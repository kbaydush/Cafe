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
     * @return void
     */
    public function getName();

    /**
     * @param string $desc
     * @return void
     */
    public function setDesc($desc);

    /**
     * @return void
     */
    public function getDesc();

    /**
     * @param string $price
     * @return void
     */
    public function setPrice($price);

    /**
     * @return void
     */
    public function getPrice();


}