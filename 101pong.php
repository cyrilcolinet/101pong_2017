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
if (count($argv) != 8) {
	printf("Missing arguments. 7 arguments needed but %d given.\n", (count($argv) - 1));
	exit(1);
}

// Check if all arguments is numeric
for ($i = 1; $i < 8; $i++) { 
	if (!is_numeric($argv[$i])) {
		printf("Argument n°%d (%s) is not an number.\n", $i, $argv[$i]);
		exit(1);
	}
}

$pong = new Pong($argv);
$pong->speed_vector();
$pong->n_time_vector();
$pong->incidence_angle();