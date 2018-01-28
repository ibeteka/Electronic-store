<?php

namespace Entity;

class Microwave extends ElectronicItem{
	
	
	public function getExtras()
	{
		die("Microwave can't have any extra !!");
	}
	
	
	public function getMaxExtra()
	{
		die("Microwave can't have any extra !!");
	}
	
	
	public function pushExtra($extra)
	{
		die("Microwave can't have any extra !!");
	}
	
	
	public function __construct(float $price, string $type)
	{
		$this->setType($type);
		$this->setPrice($price);
		$this->setMaxExtra(0);
	}
	
	

}