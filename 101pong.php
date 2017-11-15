#!/usr/bin/env php
<?php
/*
** EPITECH PROJECT, 2017
** 101pong
** File description:
** 101pong functions
*/

include "Pong.class.php";

$args = $argv;

if (count($args) != 8)
	throw new Exception("Missing arguments. 7 arguments needed but " . (count($args) - 1) . " given.", 1);

for ($i = 1; $i < 8; $i++) { 
	if (!is_numeric($args[$i]))
		throw new Exception("Argument n°" . $i . " (" . $args[$i] . ") is not an number", 1);
}

try {
	for ($i = 1; $i < 8; $i++) { 
		if ($i < 7) {
			$args[$i] = floatval($args[$i]);
		}
	}
} catch(Exception $err) {
	throw new Exception("Cannot convert string to float.", 1);
}

$pong = new Pong($argv);
$pong->speed_vector();
$pong->n_time_vector();
$pong->incidence_angle();