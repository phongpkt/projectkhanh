<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product;
        $product->setName("IPhone 13");
        $product->setPrice(1000.99);
        $product->setQuantity(99);
        $product->setStatus("Available");
        $product->setPicture("iphone-13.jpg");
        $manager->persist($product);

        $product = new Product;
        $product->setName("IPhone 12");
        $product->setPrice(999.99);
        $product->setQuantity(99);
        $product->setStatus("Available");
        $product->setPicture("iphone-12.png");
        $manager->persist($product);

        $product = new Product;
        $product->setName("Galaxy S20 FE");
        $product->setPrice(870.99);
        $product->setQuantity(99);
        $product->setStatus("Available");
        $product->setPicture("galaxy-s20.png");
        $manager->persist($product);

        $manager->flush();
    }
}
