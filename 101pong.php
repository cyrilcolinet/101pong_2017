#!/usr/bin/env php
<?php
/*
** EPITECH PROJECT, 2017
** 101pong
** File description:
** 101pong functions
*/

include "Pong.class.php";

// Check argument count
if (count($argv) != 8)
	throw new Exception("Missing arguments. 7 arguments needed but " . (count($argv) - 1) . " given.", 1);

// Check if all arguments is numeric
for ($i = 1; $i < 8; $i++) { 
	if (!is_numeric($argv[$i]))
		throw new Exception("Argument n°" . $i . " (" . $argv[$i] . ") is not an number.", 1);
}

$pong = new Pong($argv);
$pong->speed_vector();
$pong->n_time_vector();
$pong->incidence_angle();