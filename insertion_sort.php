<?php

// Insertion Sort Algorithm 
function insertionSort(&$array, $n)
{
	for ($i = 1; $i < $n; $i++)
	{
		$key = $array[$i];
		$j = $i-1;
	
		while ($j >= 0 && $array[$j] > $key){
			$array[$j + 1] = $array[$j];
			$j = $j - 1;
		}
		
		$array[$j + 1] = $key;
	}
}
//-----------------------------------

// Print Array of Size n
function output(&$array, $n)
{
	for ($i = 0; $i < $n; $i++)
		echo $array[$i]." ";
    echo "\n";
}
//-----------------------------------

// Example
$array = array(10, 15, 28, 2, 7);
$n = sizeof($array);
insertionSort($array, $n);
output($array, $n);

?>
