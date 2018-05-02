<?php
/**
* Bubble sort algorithm
*
* - In-place sorting (O(1) space)
* - Data sensitive sort (Worst, average and best case differ)
* - Unstable sorting (Does not necessarily maintain same value indexes in same order)
*/
function bubbleSort($data){
	$len = sizeof($data);
	for($i = ($len-2); $i >= 0; $i--){
		$swaps = 0;
		for($j = 0; $j <= $i; $j++){
			if($data[$j] > $data[$j+1]){
				$temp = $data[$j];
				$data[$j] = $data[$j+1];
				$data[$j+1] = $temp;
				$swaps++;
			}
		}
		if($swaps == 0) break;
	}
	return $data;
}
// Driver code
$arr =  [5,2,10,12,4];
var_dump(bubbleSort($arr));

$arr =  [1,2,3,4];
var_dump(bubbleSort($arr));

$arr =  [10,9,8,4,2];
var_dump(bubbleSort($arr));
?>
