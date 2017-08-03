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
use cafe\Milk;
use wert2all\DataValue\AbstractDataValue;
use wert2all\DataValue\Property;

/**
 * @method MilkShake setWater(Water $value)
 * @method Water getWater()
 * @method MilkShake setCoffee($value)
 * @method mixed getCoffee()
 */
class MilkShake extends AbstractDataValue
{
    /**
     * @return array
     */
    protected function getInitPropertyList()
    {
        return array(
            (new Property("water"))->setCount(2)->setValueType(Water::class)->setValue(5.00),
            (new Property("coffee"))->setCount(1)->setValueType(Coffee::class)->setValue(10.00),
            (new Property("sugar"))->setCount(2)->setValueType(Sugar::class)->setValue(20.00),
            (new Property("milk"))->setCount(3)->setValueType(Milk::class)->setValue(30.00)
        );
    }
}
