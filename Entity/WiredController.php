<?php

namespace Entity;

class WiredController extends Controller 
{
	public function __construct(float $price)
	{
		parent::__construct($price, 'Wiredcontroller');
	}
}