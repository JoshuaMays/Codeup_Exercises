<?php

function listCars($carsArray) {

	foreach ($carsArray as $carIndex => $car) {
		fwrite(STDOUT, "I own a {$carsArray[$carIndex]['year']} " . $carIndex . ". Details below: " . PHP_EOL);
		fwrite(STDOUT, "---------------------------------------------" . PHP_EOL);
		fwrite(STDOUT, $carsArray[$carIndex]['doors'] . " Door " . $carIndex . PHP_EOL);  
		fwrite(STDOUT, "Color: " . ucfirst($carsArray[$carIndex]['color']) . PHP_EOL);
		fwrite(STDOUT, 'Sunroof: ' . ($carsArray[$carIndex]['sunroof'] ? "Of course" . PHP_EOL : "N/A" . PHP_EOL));
		fwrite(STDOUT, "Convertable: " . ($carsArray[$carIndex]['convertable'] ? "Of course" . PHP_EOL : "N/A" . PHP_EOL));
		fwrite(STDOUT, "License NO: " . $carsArray[$carIndex]['license'] . PHP_EOL . PHP_EOL);
	}

}

function addCar($carList, $carAttributes) {

	foreach ($carAttributes as 
}


$cars = array(
	'Toyota Solara' => array(
		'year' => 2001,
		'doors' => 2,
		'color' => 'gray',
		'mileage' => 100000,
		'sunroof' => true,
		'convertable' => false,
		'license' => 'JSRULZ'
	),
	
	'Honda Odyssey' => array(
		'year' => 2004,
		'doors' => 4,
		'color' => 'maroon',
		'mileage' => 60000,
		'sunroof' => false,
		'convertable' => false,
		'license' => 'ILUVPHP'
	),

	'Cadillac Escalade' => array(
		'year' => 2014,
		'doors' => 4,
		'color' => 'white',
		'mileage' => 5000,
		'sunroof' => false,
		'convertable' => false,
		'license' => 'HTML5'
	),
);


listCars($cars);
?>