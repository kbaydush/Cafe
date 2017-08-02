<?php

/**
 * Created by PhpStorm.
 * User: Kostia
 * Date: 11/29/16
 * Time: 3:33 PM
 */
class DrinkTest extends \Symfony\Bundle\FrameworkBundle\Test\KernelTestCase
{

    private $container;

    public function setUp()
    {
        self::bootKernel();

        $this->container = self::$kernel->getContainer();
    }

    public function testHandler()
    {


        $this->assertClassHasStaticAttribute('drinkName', 'cafe/Drink');

        $coffee = new \cafe\Drink();

        $coffee->setName('coffee');


        $this->assertEquals(
            $coffee->getName(),
            'coffee'
        );

        $juce = new \cafe\Drink();

        $juce->setName('juce');


        $this->assertEquals(
            $juce->getName(),
            'juce'
        );

        $tea = new \cafe\Drink();

        $tea->setName('tea');


        $this->assertEquals(
            $tea->getName(),
            'tea'
        );

        $water = new \cafe\Drink();

        $water->setName('water');


        $this->assertEquals(
            $water->getName(),
            'water'
        );

    }
}