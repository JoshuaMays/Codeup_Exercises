<?php

function add($a, $b) {
	if (is_Numeric($a) && is_Numeric($b)) {
		$sum = $a + $b . PHP_EOL;
		return $sum;
	} else {
		$errorMessage = nonNumericError();
		return $errorMessage;
	}

}

function subtract($a, $b) {
	if (is_Numeric($a) && is_Numeric($b)) {
		$sum = $a - $b . PHP_EOL;
		return $sum;
	} else {
		$errorMessage = nonNumericError();
		return $errorMessage;
	}

}

function multiply($a, $b) {
	if (is_Numeric($a) && is_Numeric($b)) {
		$sum = $a * $b . PHP_EOL;
		return $sum;
	} else {
		$errorMessage = nonNumericError();
		return $errorMessage;
	}


}

function divide($a, $b) {
  if (is_Numeric($a) && is_Numeric($b)) {
  		if ($b == 0) {
  			$errorMessage = divideByZero($b);
  			return $errorMessage;
  		}
  		else {
  			$divide = $a / $b . PHP_EOL;
  			return $divide;
  		}
  }
  else {
  		$errorMessage = nonNumericError();
  		return $errorMessage;
  }

}

function modular($a, $b) {
  if (is_Numeric($a) && is_Numeric($b)) {
  		if ($b == 0) {
  			$errorMessage = divideByZero($b);
  			return $errorMessage;
  		}
  		else {
  			$divide = $a % $b . PHP_EOL;
  			return $divide;
  		}
  }
  else {
  		$errorMessage = nonNumericError();
  		return $errorMessage;
  }

}

function nonNumericError() {
	return 'ERROR: One of the values is non-numeric.' . PHP_EOL;
}

function divideByZero($b) {
	return 'ERROR: Please never ever divide by zero.' . PHP_EOL;
}

echo add(138, 15);
echo subtract(131, 2);
echo multiply(3, 101);
echo divide(4,2);
echo modular(4,2);

?>