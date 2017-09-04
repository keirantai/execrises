<?php

$items_per_bucket = 5; // number of items render in a bucket
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
	global $total_num_items, $list, $number_of_buckets, $items_per_bucket;

	$max_number_of_links = min($total_num_items, $items_per_bucket * $number_of_buckets);

	for($i=0; $i < $max_number_of_links; $i++) {
		pl ($list[$i]);

		// check if need a separator
		for ($col=1; $col <= $number_of_buckets; $col++) {
			$index_where_to_break = $col * $items_per_bucket;
			$current_index_from_1 = $i + 1;
			$is_the_last_item = $current_index_from_1 == $max_number_of_links;
			if ($current_index_from_1 == $index_where_to_break) {
				if (!$is_the_last_item) {
					ps();
				}
			}
		}
	}
}

main();