<?php

namespace App\DataFixtures;

use App\Entity\Order;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OrderFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=1; $i<3; $i++) {
            $order = new Order;
            $order->setdate(\DateTime::createFromFormat('Y-m-d', '2021-12-30'));
            $order->setQuantity(rand(1,4));
            $order->setLocation("Tay Ho");
            $order->setStatus("Shipping");
            $manager->persist($order);
        }
        for($i=1; $i<3; $i++) {
            $order = new Order;
            $order->setdate(\DateTime::createFromFormat('Y-m-d', '2021-05-30'));
            $order->setQuantity(rand(1,3));
            $order->setLocation("Long Bien");
            $order->setStatus("Delivered");
            $manager->persist($order);
        }

        $manager->flush();
    }
}
