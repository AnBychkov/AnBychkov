<?php
require_once 'complex_numbers.php';
$numbers = new complex_numbers();

$test_values = array(
	1 => array(
		'y1_real_part' 		=> '1', 
		'y1_imaginary_part' => '2', 
		'y2_real_part' 		=> '3', 
		'y2_imaginary_part' => '4'
	),
	2 => array(
		'y1_real_part' 		=> '2', 
		'y1_imaginary_part' => '3', 
		'y2_real_part' 		=> '4', 
		'y2_imaginary_part' => '5'
	),
	3=> array(
		'y1_real_part' 		=> '3', 
		'y1_imaginary_part' => '4', 
		'y2_real_part' 		=> '5', 
		'y2_imaginary_part' => '6'
	),
	4 => array(
		'y1_real_part' 		=> 'A', 
		'y1_imaginary_part' => '5', 
		'y2_real_part' 		=> '6', 
		'y2_imaginary_part' => '7'
	),	
);

foreach ( $test_values as $values ) {

	print "Addition:\n";
	$res = $numbers->addition($values);
	if ( $res !== false ) {
		$sign = $res['imaginary_part'] > 0 ? '+' : '';
		print "Z = " . number_format($res['real_part'], 3, '.', '') . " $sign" . number_format($res['imaginary_part'], 3, '.', '') . "i\n";
	} else {
		print "\t" . $numbers->errors[0] . "\n";
	}
	
	print "Subtraction:\n";
	$res = $numbers->subtraction($values);
	if ( $res !== false ) {
		$sign = $res['imaginary_part'] > 0 ? '+' : '';
		print "Z = " . number_format($res['real_part'], 3, '.', '') . " $sign" . number_format($res['imaginary_part'], 3, '.', '') . "i\n";
	} else {
		print "\t" . $numbers->errors[0] . "\n";
	}

	print "Multiplication:\n";
	$res = $numbers->multiplication($values);
	if ( $res !== false ) {
		$sign = $res['imaginary_part'] > 0 ? '+' : '';
		print "Z = " . number_format($res['real_part'], 3, '.', '') . " $sign" . number_format($res['imaginary_part'], 3, '.', '') . "i\n";
	} else {
		print "\t" . $numbers->errors[0] . "\n";
	}

	print "Division\n";
	$res = $numbers->division($values);
	if ( $res !== false ) {
		$sign = $res['imaginary_part'] > 0 ? '+' : '';
		print "Z = " . number_format($res['real_part'], 3, '.', '') . " $sign" . number_format($res['imaginary_part'], 3, '.', '') . "i\n";
	} else {
		print "\t" . $numbers->errors[0] . "\n";
	}
	
	print "\n";
}