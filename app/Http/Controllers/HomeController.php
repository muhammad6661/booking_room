<?php

namespace App\Http\Controllers;

use App\Core\Auth;
use App\Core\Config;
use App\Core\Doctrine;
use App\Core\Request;
use App\Models\Entity\User;

class HomeController extends Controller
{
    public function index()
    {
        if (!Auth::checkAuth()) {
            $this->redirect('/login');
        }
        return $this->render('index.twig', ['app' => 'My app']);
    }

    public function post(Doctrine $doctrine, User $user)
    {
        $user->setName('Test');
        $user->setAvatar('ttavatar');
        $user->setEmail('test@email');
        $user->setPassword('123456');
        $doctrine->em->persist($user);
        $doctrine->em->flush();
        dd($user);
        return $this->render('index', []);
    }

}