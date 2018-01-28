<?php

namespace Entity;


class Controller extends ElectronicItem {
	
	public function getExtras()
	{
		die("Controller can't have any extra !!");
	}
	
	
	public function getMaxExtra()
	{
		die("Controller can't have any extra !!");
	}
	
	
	public function pushExtra($extra)
	{
		die("Controller can't have any extra !!");
	}
	
	
	public function __construct(float $price, string $type)
	{
		$this->setType($type);
		$this->setPrice($price);
		$this->setMaxExtra(0);
	}
	
	
	
}