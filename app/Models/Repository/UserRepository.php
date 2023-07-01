<?php

namespace App\Models\Repository;

use App\Core\BaseRepository;
use App\Core\Doctrine;
use App\Models\Entity\User;
use Doctrine\ORM\Exception\NotSupported;

class UserRepository extends BaseRepository
{

    public string $entityName;

    public function __construct()
    {
        parent::__construct();
        $this->entityName = User::class;
    }

    public function getOneUserByEmail(string $email)
    {
        $repo = $this->doctrine->em->getRepository($this->entityName);
        return $repo->findOneBy(['email' => $email]);
    }

    public function createUser(User $user)
    {
        $this->doctrine->em->persist($user);
        $this->doctrine->em->flush();
        return $user;
    }



}