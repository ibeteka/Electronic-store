<?php

namespace Entity;

use Entity\ElectronicItem;

class Television extends ElectronicItem {
	
	
	public function setMaxExtra($max = null)
	{
		$this->extras = array();
	}
	
	
	public function pushExtra($extra)
	{
		if(is_array($extra))
		{
			foreach ($extra as $item)
				array_push($this->extras, $item);
		}
		else
			array_push($this->extras, $extra);
		echo "TOTO";

	}
	
	
	
	public function __construct(float $price, string $type)
	{
		$this->setType($type);
		$this->setPrice($price);
		$this->setMaxExtra();
	}
	
	
	
	
	
}
