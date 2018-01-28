<?php

namespace Entity;

class ElectronicItemFactory {
	
	 const ELECTRONIC_ITEM_TELEVISION 	= 'television';
	 const ELECTRONIC_ITEM_CONSOLE 		= 'console';
	 const ELECTRONIC_ITEM_MICROWAVE 	= 'microwave';
	 const ELECTONIC_ITEM_CONTROLLER 	= 'controller';
	 
	 private static $types = array(
				 self::ELECTRONIC_ITEM_CONSOLE,
				 self::ELECTRONIC_ITEM_MICROWAVE,
				 self::ELECTRONIC_ITEM_TELEVISION,
	 			 self::ELECTONIC_ITEM_CONTROLLER
	 );
	
	
	
	
	/**
	 * Creates and returns a type of electronic item according to given parameters
	 * @param array $args
	 * @throws message
	 * @return ElectronicItem
	 */
	public static function getElectonicItem(array $args):ElectronicItem
	{
		
		if(is_null($args['type']) || in_array($args['type'], self::$types) == false)
			die("Please enter a type of electronic item").PHP_EOL;
			
		
		$reflection = new \ReflectionClass(__NAMESPACE__."\\".ucwords($args['type']));
		$instance = $reflection->newInstance($args['price'], $args['type']);
				
		return $instance;
			
	}
	
	
	
	/**
	 * Return the total price for one Electronic Item
	 * and his extras.
	 * @param array $electronics
	 * List of ElectronicItem
	 * @return void
	 */
	public static function printReceipt(array $electronics)
	{
		$total = null;
		
		foreach($electronics as $electronic)
		{
			$total = $total + $electronic->getPrice();
			echo "* ".$electronic->getType(). ' : $CAN '. $electronic->getPrice().PHP_EOL;
			
			foreach ($electronic->getSortedItems() as $key => $index){
				foreach ($index as $item){
					$total = $total + $item->getPrice();
					echo "   ".$item->getType(). ' : $CAN '. $item->getPrice().PHP_EOL;
				}	
			}
		}
	
		echo "Total : ".$total.PHP_EOL;
	}
	
	
}