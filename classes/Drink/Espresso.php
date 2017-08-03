<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

namespace cafe\Drink;

use cafe\Coffee;
use cafe\Water;
use cafe\Sugar;
use wert2all\DataValue\AbstractDataValue;
use wert2all\DataValue\Property;

/**
 * @method Espresso setWater(Engine $value)
 * @method Espresso getWater()
 * @method Espresso setCoffee($value)
 * @method mixed getCoffee()
 * @method Espresso setSugar($value)
 * @method mixed getSugar()
 */
class Espresso extends AbstractDataValue
{
    /**
     * @return array
     */
    protected function getInitPropertyList()
    {
        return array(
            (new Property("water"))->setCount(2)->setValueType(Water::class)->setValue(5.00),
            (new Property("coffee"))->setCount(1)->setValueType(Coffee::class)->setValue(10.00),
            (new Property("sugar"))->setCount(2)->setValueType(Sugar::class)->setValue(20.00)
        );
    }
}
