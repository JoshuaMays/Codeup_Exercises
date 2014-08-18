<?php

$people = array(
	array(
		'name' => array(
			'first' => "Joshua",
			'last' => "Mays"	
		),
		'phone_number' => '210-286-4336',
		'address' => '13402 El Mirador St. SA, TX 78233'
	), 
	array(
		'name' => array(
			'first' => "Kara",
			'last' => "Thrace"
		),		
		'phone_number' => '821-310-0091',
		'address' => '332 Eye of Jupiter Lane, Caprica City, Caprica 0921A'
	), 
	array(
		'name' => array(
			'first' => "Gaius",
			'last' => "Baltar"
		),
		'phone_number' => '771-339-1278',
		'address' => '101 FM 2001, Cuffle\'s Breath Wash, Aerilon 44E00'
	)
);

// Loop through $people array to print out personal information for each person.
foreach ($people as $key => $person) {
	
	// Increment counter for next person.
	$key++;
	
	// Grab first and last name from 'name' array
	echo "$key. " . $person['name']['first'] . ' ' . $person['name']['last'] . PHP_EOL;
	
	// Grab phone number from 'phone_number' array
	echo "   Phone: " . $person['phone_number'] . PHP_EOL;
	
	// Grab address from 'address' array
	echo "   Address: " . $person['address'] . PHP_EOL . PHP_EOL;


}

?>