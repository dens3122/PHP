#!/usr/bin/php
<?php
	date_default_timezone_set("Europe/Paris");
	if ($argc == 2) {
	$day_of_week = array(
		1 => "lundi",
        2 => "mardi",
        3 => "mercredi",
        4 => "jeudi",
        5 => "vendredi",
        6 => "samedi",
        7 => "dimanche");
	$month = array(
		1 => "janvier",
        2 => "février",
        3 => "mars",
        4 => "avril",
        5 => "mai",
        6 => "juin",
        7 => "juillet",
        8 => "août",
        9 => "septembre",
        10 => "octobre",
        11 => "novembre",
        12 => "décembre");
	$date = explode(' ', $argv[1]);
	$date[0] = strtolower($date[0]);
	$date[2] = strtolower($date[2]);
	$match = array();
	if (count($date) != 5 || !array_search($date[0], $day_of_week) || !array_search($date[2], $month) ||
	preg_match("/^([1-9]|0[1-9]|1[012])$/", $date[1]) === 0 || preg_match("/^[0-9]{4}$/", $date[3]) === 0 ||
	preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $date[4]) === 0)
	{
		print("Wrong Format\n");
		exit ();
	}
	$n_day = array_search($date[0], $day_of_week);
	$n_month = array_search($date[2], $month);
	$time = mktime($date[4][0].$date[4][1], $date[4][3].$date[4][4], $date[4][6].$date[4][7], $n_month, $date[1], $date[3]);
	if (date("N", $time) == $n_day)
		print($time."\n");
	else
		print("Wrong Format\n");
	}
?>