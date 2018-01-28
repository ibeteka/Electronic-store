<?php

namespace Entity;

abstract class ElectronicItem 
{
	
		/**
		 * @var string
		 */
		private $type;
		
		/**
		 * @var array $extras
		 */
		protected $extras;
		
		
		/**
		 * @var integer $max_extra
		 */
		private $max_extra;
		
		
		/**
		 * @var float
		 */
		public $price;
		
		
		public $wired;
		
		
	
		function getPrice() {
			return $this->price;
		}
		
		function getType() {
			return $this->type;
		}
		
		function getWired() {
			return $this->wired;
		}
		
		function setPrice($price) {
			$this->price = $price;
		}
		
		function setType($type) {
			$this->type = $type;
		}
		
		function setWired($wired) {
			$this->wired = $wired;
		}
		
		public function getMaxExtra() {
			return $this->max_extra;
		}

    /**
     * @param null $max_extra
     * @return $this
     */
    protected function setMaxExtra($max_extra = null)
		{
			$this->max_extra = $max_extra;
			
			if(!is_null($max_extra))
				$this->extras = new \SplFixedArray($max_extra);
			else 
				$this->extras = new \SplFixedArray();
				
			return $this;
		}
		
		public function getExtras() 
		{
			return $this->extras;
		}
	
	
	
		
		/**
		 * Add a new extra to the list of extras
		 * @param array | ElectronicItem $extra
		 * $extra Array of ElectronicItem or ElectronicItem instance
		 * @return void
		 */
		public function pushExtra($extra)
		{
			if(is_array($extra))
			{
				foreach ($extra as $item)
				{
					
					$this->extras->offsetSet($this->extras->key(), $item);
					$this->extras->next();
				}
			}
			else{
				$this->extras->offsetSet($this->extras->key(), $extra);
				$this->extras->next();
			}
			
		}
		
		
		/**
		 * Returns the items depending on the sorting type requested
		 *
		 * @return array
		 */
		public function getSortedItems($type = null) {
			
			$sorted = array();
			$i = 0;
			foreach ( $this->extras as $item ) {
				
				$sorted[($item->price * 100)][$i] = $item;
				
				$i++;
			}
			
			ksort($sorted, SORT_NUMERIC);

			return $sorted;
		}
		
		
		/**
		 * 
		 * @param string $type
		 * @return array
		 */
		public function getItemsByType( $type ) {


			if ( in_array($type, ElectronicItem::$types) ) {
				
				$callback = function ($item) use ($type) {
					
					return $item->type == $type;
				};
				
				$items = array_filter($this->items, $callback);
			}
			
			return false;
		}
	
		
		
		
		
}