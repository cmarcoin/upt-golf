<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Golf;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // Nouvelle factory faker en français
        $faker = Factory::create('fr_FR');

        // Création des golfs
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

        // Création des users
        for ($i = 1; $i <= 70; $i++) {
            $user = new User();

            $firstName = $faker->firstName();
            $lastName = $faker->lastName();
            $email = $faker->email();
            $hash = $faker->password();
            $mobilePhone = $faker->phoneNumber();
            $phone = $faker->phoneNumber();
            $licence = $faker->randomNumber(9);
            $address = $faker->Address();
            $handicap = $faker->randomFloat(2, 0, 53.50);

            $user->setFirstName($firstName)
                ->setLastName($lastName)
                ->setEmail($email)
                ->setHash($hash)
                ->setMobilePhone($mobilePhone)
                ->setPhone($phone)
                ->setLicence($licence)
                ->setAddress($address)
                ->setHandicap($handicap);

            $manager->persist($user);
        }

        // Création des écarts entre les joueurs
        $manager->flush();
    }
}
