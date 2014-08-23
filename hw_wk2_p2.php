<?php

function findArea($radius) {
	$area = M_PI * pow($radius, 2);
	return $area;
}

function donutArea($totalRad, $subRad) {
	// area of outer circle
	$outer = findArea($totalRad);
	// area of inner circle
	$inner = findArea($subRad);
	
	$areaDonut = $outer - $inner;
	return $areaDonut;
}

$radius = 15;

$area = findArea($radius);

$donut = donutArea($radius,5);

echo $donut;
?>