<?php
namespace cafe\Drink;
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */
interface DrinkInterface
{

    /**
     * @param string $name
     * @return void
     */
    public function setName($name);

    /**
     * @param string $name
     * @return void
     */
    public function getName($name);

}