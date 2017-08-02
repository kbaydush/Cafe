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

    public function testName()
    {


        $this->assertClassHasStaticAttribute('name', 'cafe/Drink');

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

    public function testDesc()
    {


        $this->assertClassHasStaticAttribute('desk', 'cafe/Drink');

        $coffee = new \cafe\Drink();

        $coffee->setDesc('bla bla bla');


        $this->assertEquals(
            $coffee->getDesk(),
            'bla bla bla'
        );

        $juce = new \cafe\Drink();

        $juce->setDesc('juce');


        $this->assertEquals(
            $juce->getDesc(),
            'juce'
        );

        $tea = new \cafe\Drink();

        $tea->setDesc('tea');


        $this->assertEquals(
            $tea->getDesc(),
            'tea'
        );

        $water = new \cafe\Drink();

        $water->setDesc('water');


        $this->assertEquals(
            $water->getDesc(),
            'water'
        );

    }

    public function testPrice()
    {


        $this->assertClassHasStaticAttribute('price', 'cafe/Drink');

        $coffee = new \cafe\Drink();

        $coffee->setPrice(100500);


        $this->assertEquals(
            $coffee->getDesk(),
            100500
        );

    }
}