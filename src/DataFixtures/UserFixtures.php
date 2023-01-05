<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPlainPassword('toto');
        // $user->setPassword('$2y$13$oITgY562c1jP9EGudtMtpucjZSEswSH2ORDVxKFOeop28ZT37wZsm'); // demo
        $manager->persist($user);
        
        $manager->flush();
    }
}
