<?php

$quiz = [
	'1' => [ 'question' => 'Which Apollo mission landed the first humans on the moon?',
			 'answers'  => [
						   'A' => 'Apollo 1',
						   'B' => 'Apollo 13',
						   'C' => 'Apollo 11',
						   'D' => 'Apollo 4'
							], // End of 'answers' array
			 'correct_answer' => 'C'
	], // End of '1' array
	'2' => [ 'question' => 'What was the name of the spacecraft in which Yuri Gagarin made the first human space flight?',
			 'answers'  => [
						   'A' => 'Vostok 1',
						   'B' => 'Sputnik 1',
						   'C' => 'Soyuz 1',
						   'D' => 'Apollo 1'
							], // End of 'answers' array
			 'correct_answer' => 'A'
	], // End of '2' array
	'3' => [ 'question' => 'Which gas makes up the bulk of the atmosphere of Venus?',
			 'answers'  => [
						   'A' => 'Methane',
						   'B' => 'Hydrogen',
						   'C' => 'Oxygen',
						   'D' => 'Carbon Dioxide'
							], // End of 'answers' array
			 'correct_answer' => 'D'
	], // End of '3' array
	'4' => [ 'question' => 'Triton is the largest moon of which planet?',
			 'answers'  => [
						   'A' => 'Jupiter',
						   'B' => 'Pluto',
						   'C' => 'Neptune',
						   'D' => 'Uranus'
							], // End of 'answers' array
			 'correct_answer' => 'C'
	] // End of '4'
]; // End of $quiz array


// Loop through quiz array to access each question
foreach($quiz as $questionNumber => $value) {

	// Output the question number and the question. 
	echo $questionNumber . ". {$value['question']} " . PHP_EOL;

	// Loop through the answers array to access each answer choice
	foreach($value['answers'] as $answerChoice => $answerContent) {
		
		// Check if the key answerChoice is equal to the string of correct_answer
		if ($answerChoice == $value['correct_answer']) {
			echo "  *$answerChoice.  $answerContent" . PHP_EOL;
		}
		else {
			echo "   $answerChoice.  $answerContent" . PHP_EOL;
		}
	} // End inner foreach loop

} // End outer foreach loop


?>
