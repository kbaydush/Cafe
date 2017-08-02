<?php

/**
 * {license_notice}
 *
 * @copyright   baidush.k
 * @license     {license_link}
 */

require_once dirname(__FILE__) . "/bootstrap.php";

$coffee = new \cafe\Drink();

$coffee->setName('coffee');
$coffee->setDesc('Bla bla bla');
$coffee->setPrice(100500);

$juce = new \cafe\Drink();

$juce->setName('juce');
$juce->setDesc('Bla bla bla');
$juce->setPrice(100500);

$tea = new \cafe\Drink();

$tea->setName('tea');
$tea->setDesc('Bla bla bla');
$tea->setPrice(100500);

$water = new \cafe\Drink();

$water->setName('water');
$water->setDesc('Bla bla bla');
$water->setPrice(100500);

