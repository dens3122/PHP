<?php
	Class Color {
		public $red;
		public $green;
		public $blue;
		public static $verbose = FALSE;

		public function __construct($arr) {
			if (array_key_exists('rgb', $arr)) {
				$str = str_pad(base_convert($arr['rgb'], 10, 16), 6, '0', STR_PAD_LEFT);
				list($this->red, $this->green, $this->blue) = sscanf($str, '%2x%2x%2x');
			}
			elseif (count($arr) == 3) {
				$this->red = (int)$arr['red'];
				$this->green = (int)$arr['green'];
				$this->blue = (int)$arr['blue'];
			}
			else
				print ("Error");
			if (self::$verbose == TRUE)
				printf ("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		}
		public function __destruct() {
			if (self::$verbose) {
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
			}
		}
		public function __toString() {
			return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
		}
		public static function doc() {
			$GetContentFile = file_get_contents('Color.doc.txt');
    		echo $GetContentFile;
		}
		public function add($obj) {
			$new = new Color( array('red' => $this->red + $obj->red,
									'green' => $this->green + $obj->green,
									'blue' => $this->blue + $obj->blue));
			return $new;
		}
		public function sub($obj) {
			$new = new Color( array('red' => $this->red - $obj->red,
									'green' => $this->green - $obj->green,
									'blue' => $this->blue - $obj->blue));
			return $new;
		}
		public function mult($obj) {
			$new = new Color( array('red' => $this->red * $obj,
									'green' => $this->green * $obj,
									'blue' => $this->blue * $obj));
			return $new;
		}
	}
?>