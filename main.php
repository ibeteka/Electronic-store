<?php

require "vendor/autoload.php";

use Entity\ElectronicItemFactory;
use Entity\RemoteController;
use Entity\WiredController;


$console 	= ElectronicItemFactory::getElectonicItem(array('type' => 'console', 'price' => 600));
$tv1 		= ElectronicItemFactory::getElectonicItem(array('type' => 'television', 'price' => 400));
$tv2		= ElectronicItemFactory::getElectonicItem(array('type' => 'television', 'price' => 430));
$microwave	= ElectronicItemFactory::getElectonicItem(array('type' => 'microwave', 'price' => 200));

$console->pushExtra(array(
		new RemoteController(11.70), 
		new RemoteController(11.70),
		new WiredController(20.50),
		new WiredController(20.25),
));
$tv1->pushExtra(array(new RemoteController(11.50), new RemoteController(11.50)));
$tv2->pushExtra(new WiredController(11.50));


ElectronicItemFactory::printReceipt(array($console, $microwave, $tv1, $tv2)); //Total purchase cost
ElectronicItemFactory::printReceipt(array($console)); // Console and extra total cost