<?php
/**
* Sorting linked list by value
* This sorting uses bubble-sort
*/
function sortLinkedListByValue($head){
	if(!$head){
		return;
	}
	if(!isset($head->link)){
		return $head;
	}

	$end = null;

	while($end != $head->link){
		$current = $head;
		while($current->link != $end){
			$next = $current->link;
			if($current->data > $next->data){
				$temp = $current->data;
				$current->data = $next->data;
				$next->data = $temp;
			}
			$current = $current->link;
		}
		$end = $current;
	}

	return $head;
}

/**
* Sorting linked list by links
* This sorting uses bubble-sort
*/
function sortLinkedListByLink($head){
	if(!$head){
		return;
	}
	if(!isset($head->link)){
		return $head;
	}

	while($end != $head->link){
		$prev = $current = $head;
		while($current->link != $end){
			$next = $current->link;
			if($current->data > $next->data){
				$current->link = $next->link;
				$next->link = $current;
				if($current != $head){
					$prev->link = $next;
				} else {
					$head = $next;
				}
				$temp = $current;
				$current = $next;
				$next = $temp;
			}
			$prev = $current;
			$current = $current->link;
		}
		$end = $current;
	}

	return $head;
}

// Driver code
$node4 = new stdClass();
$node4->data = 20;
$node4->link = null;

$node3 = new stdClass();
$node3->data = 300;
$node3->link = $node4;

$node2 = new stdClass();
$node2->data = 2;
$node2->link = $node3;

$node = new stdClass();
$node->data = -20;
$node->link = $node2;

var_dump(sortLinkedListByValue($node));
var_dump(sortLinkedListByLink($node));
?>
