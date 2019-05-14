#!/usr/bin/php
<?php
function ft_split($str)
{
	$arr = str_word_count($str, 1);
	sort($arr);
	return ($arr);
}
print_r(ft_split("Hello    World and     goodbye my friend"));
?>