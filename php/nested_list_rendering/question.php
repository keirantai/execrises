<?php

require_once(__DIR__ . '/data.php');

$items_per_bucket = 7; // number of items render in a bucket
$number_of_buckets = 5; // number of buckets to render the items

$lists = [];
ItemList::create('main')->appendTo($lists);
// sub items
ItemList::create('main-1')->appendTo($lists);
ItemList::create('main-2')->appendTo($lists);
ItemList::create('main-3')->appendTo($lists);
// third layer items
ItemList::create('main-1-1')->appendTo($lists);
ItemList::create('main-1-2')->appendTo($lists);
ItemList::create('main-1-3')->appendTo($lists);

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
	/** put your code */
}

main();