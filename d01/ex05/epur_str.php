#!/usr/bin/php
<?php
if ($argc == 2)
{
	$arr = trim(preg_replace("/\s+/", " ", $argv[1]));
	print($arr."\n");
}
?>