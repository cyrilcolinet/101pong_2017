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

	public function __construct($arg) {
		$this->x = array(
			floatval($arg[1]), 
			floatval($arg[4])
		);
		$this->y = array(
			floatval($arg[2]), 
			floatval($arg[5])
		);
		$this->z = array(
			floatval($arg[3]), 
			floatval($arg[6])
		);
		$this->n = intval($arg[7]);
	}

	private function print_float($float = null) {
		if (is_null($float))
			throw new Exception("Cannot convert null value.", 1);
			
		$v = number_format(floatval($float), 2, '.', '');
		return $v;
	}

	public function speed_vector() {
		$x_vec = ($this->x[1] - $this->x[0]);
		$y_vec = ($this->y[1] - $this->y[0]);
		$z_vec = ($this->z[1] - $this->z[0]);

		echo "The speed vector coordinates are:\n";
		echo "(" . $this->print_float($x_vec) . ";" . $this->print_float($y_vec) . ";" . $this->print_float($z_vec) . ")";
	}

}