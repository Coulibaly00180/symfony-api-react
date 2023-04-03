<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($c = 0; $c < 30; $c++){
            $customer = new Customer();
            $customer->setFirstName($faker->firstName())
                ->setLastName($faker->lastName)
                ->setCompany($faker->company)
                ->setEmail($faker->email);

            $manager->persist($customer);

            for ($i = 0; $i < mt_rand(3, 10); $i++) {

            }
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
