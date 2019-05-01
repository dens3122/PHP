#!/usr/bin/php
<?php
if ($argc > 1)
{
	$arr = trim(preg_replace("/\s+/", " ", $argv[1]));
	print($arr."\n");
}
?>