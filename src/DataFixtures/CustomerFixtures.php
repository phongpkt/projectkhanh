<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $customer = new Customer;
        $customer->setName("Phong");
        $customer->setphoneNumber("0327763424");
        $customer->setEmail("pktphong@gmail.com");
        $customer->setAddress("Tay Ho");
        $manager->persist($customer);

        $customer = new Customer;
        $customer->setName("Khanh");
        $customer->setphoneNumber("0321159923");
        $customer->setEmail("ngkhanh@gmail.com");
        $customer->setAddress("Long Bien");
        $manager->persist($customer);
        $manager->flush();
    }
}
