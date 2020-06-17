<?php

namespace App\DataFixtures;

use App\Entity\Golf;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // Nouvelle factory faker en français
        $faker = Factory::create('fr_FR');

        for ($i = 1; $i <= 30; $i++) {
            $golf = new Golf();

            $name = $faker->sentence();
            $contact = $faker->name();
            $email = $faker->email();
            $comments = $faker->realText($maxNbChars = 250, $indexSize = 2);
            $address = $faker->Address();
            $websiteUrl = $faker->domainName();
            $phoneNumber = $faker->phoneNumber();

            $golf->setName($name)
                ->setPhoneNumber($phoneNumber)
                ->setWebsiteUrl($websiteUrl)
                ->setAddress($address)
                ->setComments($comments)
                ->setEmail($email)
                ->setContact($contact);

            $manager->persist($golf);
        }
        $manager->flush();
    }
}
