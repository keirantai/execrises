<?php

$items_per_bucket = 7; // number of items render in a bucket
$number_of_buckets = 5; // number of buckets to render the items

$total_num_items = 26; // total number of items
$list = []; // list of items to render
for ($i=0; $i < $total_num_items; $i++) {
	$index = $i+1;
	array_push($list, "Item {$index}");
} // generate sample items in the list

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
	/** put your code here */
}

main();