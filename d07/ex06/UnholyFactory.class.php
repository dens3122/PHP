<?php
	class UnholyFactory {
		public $army = array();
		public $types = ["foot soldier", "archer", "assassin"];
		
		public function absorb($obj) {
			if ($obj instanceof Fighter)
			{
				if (!in_array($obj, $this->army)) {
					$this->army[$obj->type_sold] = $obj;
					print ("(Factory absorbed a fighter of type " . $obj->type_sold . ")" . PHP_EOL);
				}
				else
					print ("(Factory already absorbed a fighter of type " . $obj->type_sold . ")" . PHP_EOL);
			}
			else
				print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		}
		
		public function fabricate($type) {
			if (in_array($type, $this->types)) {
				print ("(Factory fabricates a fighter of type " . $type . ")" . PHP_EOL);
				return $this->army[$type];
			}
			else
				print ("(Factory hasn't absorbed any fighter of type " . $type . ")" . PHP_EOL);
		}
	}
?>
