<?php

namespace App\DataFixtures;

use App\Entity\Vendor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VendorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $vendor = new Vendor;
        $vendor->setName("Apple");
        $vendor->setaddress("Ha Noi");
        $vendor->setcontactNumber("0123456789");
        $manager->persist($vendor);

        $vendor = new Vendor;
        $vendor->setName("Samsung");
        $vendor->setaddress("Ha Noi");
        $vendor->setcontactNumber("0323715543");
        $manager->persist($vendor);

        $manager->flush();
    }
}
