<?php
	Class Vertex {
		private $_x;
		private $_y;
		private $_z;
		private $_w = 1.0;
		private $_color;
		public static $verbose = FALSE;

		public function __construct($arr) {
			if (isset($arr['x']) && isset($arr['y']) &&	isset($arr['z'])) {
				$this->_x = $arr['x'];
				$this->_y = $arr['y'];
				$this->_z = $arr['z'];
			}
			if (isset($arr['color'])) {
				$this->_color = $arr['color'];
			} 
			else {
				$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
			}
			if (isset($arr['w'])) {
				$this->_w = $arr['w'];
			}
			if (self::$verbose) {
				printf($this . " constructed\n");
			}
		}

		public function __destruct() {
			if (self::$verbose) {
				printf($this . " destructed\n");
			}
		}

		public function __tostring() {
			if (self::$verbose) {
				return ($ret = sprintf(
					"Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, $this->_color )",
					$this->_x, $this->_y, $this->_z, $this->_w) );
			} 
			else {
				return ($ret = sprintf(
					"Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )",
					$this->_x, $this->_y, $this->_z, $this->_w) );
			}
		}

		public function doc() {
			if ($str = file_get_contents('Vertex.doc.txt')) {
				echo "$str";
			}
			else {
				echo "Error: file doesn't exist.\n";
			}
		}

		public function __get($name) {
			if ($name == '_x')
				return ($this->_x);
			elseif ($name == '_y')
				return ($this->_y);
			elseif ($name == '_z')
				return ($this->_z);
			elseif ($name == '_w')
				return ($this->_w);
			elseif ($name == '_color')
				return ($this->_color);
		}

		public function __set($name, $value) {
			if ($name == '_x')
				$this->_x = $value;
			elseif ($name == '_y')
				$this->_y = $value;
			elseif ($name == '_z')
				$this->_z = $value;
			elseif ($name == '_w')
				$this->_w = $value;
			elseif ($name == '_color')
				$this->_color = $value;
		}
	}
?>