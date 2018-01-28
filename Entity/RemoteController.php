<?php

namespace Entity;

class RemoteController extends Controller 
{
	
	public function __construct(float $price)
	{
		parent::__construct($price, 'Remotecontroller');
	}
}