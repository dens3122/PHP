<?php
	class NightsWatch {
		private $array;

		public function recruit($obj) {
			if ($obj instanceof IFighter) 
				$this->array[] = $obj;
		}
		public function fight() {
			foreach($this->array as $recrut)
				print ($recrut->fight());
		}
	}
?>
