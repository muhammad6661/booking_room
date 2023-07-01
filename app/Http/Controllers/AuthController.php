<?php

namespace App\Http\Controllers;

use App\Core\Auth;
use App\Core\Hash;
use App\Core\Request;
use App\Models\Entity\User;
use App\Models\Repository\UserRepository;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class AuthController extends Controller
{


    public function login(): string
    {
        return $this->render('auth/login');
    }

    public function registration(Request $request)
    {
        return $this->render('auth/registration.twig');
    }

    public function submitRegistration(Request $request, UserRepository $userRepository)
    {
        $this->validate($request,[
            'fio' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            'confirm_password' => 'same:password'
        ], [
            'fio.required' => 'Введите ФИО',
            'email.required' => 'Введите Email!',
            'email.email' => 'Неверный Email!',
            'phone.required' => 'Введите номер телефона',
            'password.required' => 'Введите пароль',
            'confirm_password.same' => 'Пароль и подтверждение пароля не совпадают'
        ]);
        $input = $request->all();
        $user = $userRepository->getOneUserByEmail($input['email']);
        if ($user) {
            $this->redirectWithError('/registration', 'Email уже существуеть!');
        }

        $input['password'] = Hash::hashPassword($input['password']);
        $input['roles'] = 'ROLE_USER';

        $user = new User();
        $user->setFio($input['fio']);
        $user->setEmail($input['email']);
        $user->setPhone($input['phone']);
        $user->setPassword($input['password']);
        $user->setRoles($input['roles']);

        $user = $userRepository->createUser($user);

        Auth::login($user);

        return $this->redirect('/');
    }


    public function auth(Request $request, UserRepository $userRepository)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = $userRepository->getOneUserByEmail($request->get('email'));
        if ($user && Hash::checkPassword($request->get('password'), $user->getPassword())) {
            Auth::login($user);
        } else {
            $this->redirectWithError('/login', 'Login or password incorrect');
        }

        return $this->redirect('/');
    }

    public function logout(Request $request)
    {

        if (!Auth::checkAuth()) {
            return $this->abort(404);
        }
        Auth::logout();

        return $this->redirect('/login');
    }


}