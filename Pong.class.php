<?php
/*
** EPITECH PROJECT, 2017
** 101Pong
** File description:
** Pong class
*/

class Pong {

	private $x;
	private $y;
	private $z;
	private $n;

	private $vector_s;
	private $vector_t;

	public function __construct($arg) {
		$this->vector_s = array(
			floatval($arg[4]) - floatval($arg[1]),
			floatval($arg[5]) - floatval($arg[2]),
			floatval($arg[6]) - floatval($arg[3])
		);
		$this->vector_t = array(
			floatval($arg[4]),
			floatval($arg[5]),
			floatval($arg[6])
		);
		$this->n = intval($arg[7]);

		if ($this->n < 0) {
			print("Argument n°7 must be positive or null.\n");
			exit(1);
		}
	}

	private function print_float($float = null) {
		if (is_null($float)) {
			print("Cannot convert null value.\n");
			exit(1);
		}

		$v = number_format(floatval($float), 2, '.', '');
		return $v;
	}

	private function print_vector() {
		$coords = array(
			$this->print_float($this->x),
			$this->print_float($this->y),
			$this->print_float($this->z)
		);
		$this->printf_array("(%s;%s;%s)\n", $coords);
	}

	public function speed_vector() {
		print("The speed vector coordinates are :\n");
		$this->x = $this->vector_s[0];
		$this->y = $this->vector_s[1];
		$this->z = $this->vector_s[2];
		$this->print_vector();
	}

	public function n_time_vector() {
		$this->x = $this->vector_t[0] + $this->vector_s[0] * $this->n;
		$this->y = $this->vector_t[1] + $this->vector_s[1] * $this->n;
		$this->z = $this->vector_t[2] + $this->vector_s[2] * $this->n;

		print("At time t+" . $this->n . ", ball coordinates will be :\n");
		$this->print_vector();
	}

	public function incidence_angle() {
		if ($this->vector_s[2] != 0 && ((-$this->vector_t[2]) / $this->vector_s[2]) >= 0) {
			$abs_s_vector = sqrt(pow($this->vector_s[0], 2) + pow($this->vector_s[1], 2) + pow($this->vector_s[2], 2));
			$ang_rad = acos($this->vector_s[2] / $abs_s_vector);
			$ang = 180 * ($ang_rad - (pi() / 2)) / pi();
			$ang = abs($ang);

			print("The incidence angle is :\n");
			print($this->print_float($ang) . " degrees\n");
		} else {
			print("The ball won’t reach the bat.\n");
		}
	}

	private function printf_array($format, $arr) { 
    	return call_user_func_array('printf', array_merge((array)$format, $arr)); 
	}

}