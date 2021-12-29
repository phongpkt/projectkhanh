<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EmployeeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $employee = new Employee;
        $employee->setName("Khanh");
        $employee->setAddress("Tay Ho");
        $employee->setContactNumber("0321134132");
        $employee->setPosition("WebDeveloper");
        $manager->persist($employee);

        $manager->flush();
    }
}
