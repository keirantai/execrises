<?php

$lists = include(__DIR__ . '/../data.php');

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

/**
 * Check if the key is in the hashed list
 * @param  [type]  $key [description]
 * @return boolean      [description]
 */
function hasNestedList($key) {
	global $lists;

	return @isset($lists[$key]);
}

/**
 * Get the list of items by the hash key
 * @param  [type] $key [description]
 * @return [type]      [description]
 */
function getNestedList($key) {
	global $lists;

	return $lists[$key];
}

/**
 * Print items in the list and all nested lists
 * @param  [type] $list   [description]
 * @param  string $prefix [description]
 * @return [type]         [description]
 */
function printItems($list, $prefix='') {
	foreach ($list->items as $item) {
		pl($prefix . $item);

		if (hasNestedList($item)) {
			printItems(getNestedList($item), $prefix . '    ');
		}
	}
}

function main() {
	global $lists, $root;
	
	// get the root menu first
	$root_menu = $lists[$root];
	printItems($root_menu);
}

main();