<?php
function mergeSortedLinkedLists($list1, $list2){
	$startM = new stdClass();
	if($list1->data <= $list2->data){
		$startM->data = $list1->data;
		$list1 = $list1->next;
	} else {
		$startM->data = $list1->data;
		$list2 = $list2->next;
	}
	
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

$list1 = $node;

$node4 = new stdClass();
$node4->data = 1;
$node4->link = null;

$node3 = new stdClass();
$node3->data = 2;
$node3->link = $node4;

$node2 = new stdClass();
$node2->data = 3;
$node2->link = $node3;

$node = new stdClass();
$node->data = 4;
$node->link = $node2;

$list2 = $node;

var_dump(mergeSortedLinkedLists($list1, $list2));

?>
