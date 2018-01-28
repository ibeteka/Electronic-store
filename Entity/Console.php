<?php

namespace Entity;

class Console extends ElectronicItem {
	
	public function __construct(float $price, string $type)
	{
		$this->setType($type);
		$this->setPrice($price);
		$this->setMaxExtra(4);
	}
}