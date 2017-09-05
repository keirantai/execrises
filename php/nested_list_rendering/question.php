<?php

$lists = include(__DIR__ . '/data.php');

$root = "main";

$items_per_bucket = 7; // number of items render in a bucket
$number_of_buckets = 5; // number of buckets to render the items

/**
 * Print texts in a line
 * @param  [type] $text [description]
 */
function pl($text) {
	echo "| $text |\r\n";
}

/**
 * Print a separator
 */
function ps() {
	echo "-----------\r\n";
}

function main() {
	global $lists;
	var_dump($lists);
	/** put your code */
}

main();