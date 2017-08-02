<?php

/**
 * {license_notice}
 *
 * @copyright   baidush.k
 * @license     {license_link}
 */


namespace cafe;
use cafe\Drink\DrinkInterface;

class Drink implements DrinkInterface
{

    /** @var  string */
    protected $name;

    /**
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function getName($name)
    {
        $this->name = $name;
    }

}