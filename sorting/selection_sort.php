<?php
/**
* Selection sort algorithm
*
* - In-place sorting (O(1) space)
* - Non data sensitive sort (Worst, average and worst case are always the same)
* - Unstable sorting (Does not necessarily maintain same value indexes in same order)
*/
function selectionSort($data){
	$len = sizeof($data);
	for($i = 0; $i < $len - 1; $i++){
		$smallerValueIndex = $i;
		for($j = ($i+1); $j < $len; $j++){
			if($data[$j] < $data[$smallerValueIndex]){
				$smallerValueIndex = $j;
			}
		}
		if($i != $smallerValueIndex){
			$temp = $data[$i];
			$data[$i] = $data[$smallerValueIndex];
			$data[$smallerValueIndex] = $temp;
		}
	}
	return $data;
}
// Driver code
$arr =  [5,2,10,12,4];
var_dump(selectionSort($arr));

$arr =  [1,2,3,4];
var_dump(selectionSort($arr));

$arr =  [10,9,8,4,2];
var_dump(selectionSort($arr));
?>
