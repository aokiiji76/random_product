<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    /**
     * @throws \Exception
     */
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {

            $product = new Product();
            $product->setName($faker->word);
            $product->setPrice(random_int(10, 100));
            $product->setDescription($faker->text($maxNbChars = 200) );
            $product->setImage('https://picsum.photos/200/200');
            $manager->persist($product);


        }


        $manager->flush();
    }


}