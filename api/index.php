<?php
include ("connect.php");

// example filter with specific patametar///

function search_array($array, $needle) {
	$results = array();
	
	foreach ($array as $subarray) {
		if (array_search($needle, $subarray, true) !== false) {
			$results[] = $subarray;
		}
	}

   //print_r($results);
	echo json_encode($results);
}


//search_array($newArray,'Green');

// Filter Page type
$filterType = $_GET["type"];
if ($filterType!='') {
	search_array($newArray,$filterType);
} else {
	echo json_encode($data);
}

