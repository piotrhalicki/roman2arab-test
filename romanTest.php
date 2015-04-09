<?php

require_once 'roman.php';

class romanTest extends PHPUnit_Framework_TestCase {
	public function test_roman() {
		$roman = toRoman(1);
		$this->assertEquals('I', $roman);
		
		$roman = toRoman(4);
		$this->assertEquals('IV', $roman);
		
		$roman = toRoman(5);
		$this->assertEquals('V', $roman);
		
		$roman = toRoman(9);
		$this->assertEquals('IX', $roman);
		
		$roman = toRoman(10);
		$this->assertEquals('X', $roman);
		
		$roman = toRoman(40);
		$this->assertEquals('XL', $roman);
		
		$roman = toRoman(50);
		$this->assertEquals('L', $roman);
		
		$roman = toRoman(90);
		$this->assertEquals('XC', $roman);
		
		$roman = toRoman(100);
		$this->assertEquals('C', $roman);
		
		$roman = toRoman(400);
		$this->assertEquals('CD', $roman);
		
		$roman = toRoman(500);
		$this->assertEquals('D', $roman);
		
		$roman = toRoman(900);
		$this->assertEquals('CM', $roman);
		
		$roman = toRoman(1000);
		$this->assertEquals('M', $roman);
	
		$roman = toRoman(112);
		$this->assertEquals('CXII', $roman);

		$roman = toRoman(325);
		$this->assertEquals('CCCXXV', $roman);
		
		$roman = toRoman(464);
		$this->assertEquals('CDLXIV', $roman);
	
	}
		
}


?>