<?php
/**
	Массив:
	y1_real_part 		- действительная часть первого числа
	y1_imaginary_part 	- мнимая часть первого числа
	y2_real_part 		- действительная часть второго числа
	y2_imaginary_part 	- мнимая часть первого числа
*/

class complex_numbers {
	
	public $errors = array();
	
	// сложение
    public function addition($values){
		if ( $this->numeric_check($values) !== false ) {
			$y1_real_part = floatval($values['y1_real_part']);
			$y1_imaginary_part = floatval($values['y1_imaginary_part']);
			$y2_real_part = floatval($values['y2_real_part']);
			$y2_imaginary_part = floatval($values['y2_imaginary_part']);
			$res = array(
				"real_part" => $y1_real_part + $y2_real_part,
				"imaginary_part" => $y1_imaginary_part + $y2_imaginary_part
			);
			return $res;
		}
		return false;
	}
	
	// вычитание
    public function subtraction($values){
		if ( $this->numeric_check($values) !== false ) {
			$y1_real_part = floatval($values['y1_real_part']);
			$y1_imaginary_part = floatval($values['y1_imaginary_part']);
			$y2_real_part = floatval($values['y2_real_part']);
			$y2_imaginary_part = floatval($values['y2_imaginary_part']);			
			$res = array(
				"real_part" => $y1_real_part - $y2_real_part,
				"imaginary_part" => $y1_imaginary_part - $y2_imaginary_part
			);
			return $res;
		}
		return false; 
	}

	// умножение
    public function multiplication($values){
		if ( $this->numeric_check($values) !== false ) {
			$y1_real_part = floatval($values['y1_real_part']);
			$y1_imaginary_part = floatval($values['y1_imaginary_part']);
			$y2_real_part = floatval($values['y2_real_part']);
			$y2_imaginary_part = floatval($values['y2_imaginary_part']);
			$real_part = ($y1_real_part * $y2_real_part) - ($y1_imaginary_part * $y2_imaginary_part);
			$imaginary_part = ($y1_real_part * $y2_imaginary_part) + ($y2_real_part * $y1_imaginary_part);
			$res = array(
				"real_part" => $real_part,
				"imaginary_part" => $imaginary_part
			);
			return $res;
		}
		return false;    
	}

	// деление
    public function division($values){
		if ( $this->numeric_check($values) !== false ) {
			$y1_real_part = floatval($values['y1_real_part']);
			$y1_imaginary_part = floatval($values['y1_imaginary_part']);
			$y2_real_part = floatval($values['y2_real_part']);
			$y2_imaginary_part = floatval($values['y2_imaginary_part']);
			$real_part = (($y1_real_part * $y2_real_part) + ($y1_imaginary_part * $y2_imaginary_part)) / (pow($y2_real_part, 2) + pow($y2_imaginary_part, 2));
			$imaginary_part = (($y2_real_part * $y1_imaginary_part) - ($y1_real_part * $y2_imaginary_part)) / (pow($y2_real_part, 2) + pow($y2_imaginary_part, 2));
			$res = array(
				"real_part" => $real_part,
				"imaginary_part" => $imaginary_part
			);
			return $res;
		}
		return false;    
	}	
	
	private function numeric_check($values){
		$this->errors = array();
		if ( !isset($values['y1_real_part']) || !is_numeric($values['y1_real_part']) ) {
			$this->errors[] = 'Wrong y1_real_part value';
			return false;
		}
		if ( !isset($values['y1_imaginary_part']) || !is_numeric($values['y1_imaginary_part']) ) {
			$this->errors[] = 'Wrong y1_imaginary_part value';
			return false;
		}
		if ( !isset($values['y2_real_part']) || !is_numeric($values['y2_real_part']) ) {
			$this->errors[] = 'Wrong y2_real_part value';
			return false;
		}
		if ( !isset($values['y2_imaginary_part']) || !is_numeric($values['y2_imaginary_part']) ) {
			$this->errors[] = 'Wrong y2_imaginary_part value';
			return false;
		}		
		return true;
	}

}