<?php
	abstract class Fighter {
		public $type_sold;
		abstract public function fight($target);
		
		public function __construct($type) {
			$this->type_sold = $type;
		}
	}
?>
