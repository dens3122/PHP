<?php
	class Jaime extends Lannister {
		public function sleepWith($obj) {
			if (get_class($obj) == "Tyrion")
				print ("Not even if I'm drunk !" . PHP_EOL);
			elseif (get_class($obj) == "Sansa")
				print ("Let's do this." . PHP_EOL);
			elseif (get_class($obj) == "Cersei")
				print ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		}
	}
?>
