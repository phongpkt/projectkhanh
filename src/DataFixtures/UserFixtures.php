<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $harsher;

    public function __construct(UserPasswordHasherInterface $harsher){
        $this->hasher = $harsher;
    }

    public function load(ObjectManager $manager): void
    {
        //Tạo tài khoản USER
        $user = new User();
        $user->setUsername("user");
        $user->setPassword($this->hasher->hashPassword($user,"123456"));
        $user->setRoles(['ROLE_USER']);
        $manager->persist($user);

        //Tạo tài khoản ADMIN
        $user = new User();
        $user->setUsername("admin");
        $user->setPassword($this->hasher->hashPassword($user,"123456"));
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $manager->flush();
    }
}
