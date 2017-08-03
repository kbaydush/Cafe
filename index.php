<?php

/**
 * {license_notice}
 *
 * @copyright   baidush.k
 * @license     {license_link}
 */

require_once dirname(__FILE__) . "/bootstrap.php";

$drink = new \cafe\Drink\Espresso();

$ingredients = $drink->getInitPropertyList();

$sum = 0;
foreach($ingredients as $key => $obj) {

    $sum += $obj->getCount() * $obj->getPrice();

}

echo $sum;




