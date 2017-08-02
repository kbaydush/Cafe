<?php

$config = new cafe\Config(ROOT_DIR);
$config->setRegistry($CFG)
    ->setLogDirectory("logs");
