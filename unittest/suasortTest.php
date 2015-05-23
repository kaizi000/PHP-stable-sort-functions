<?php

require_once '../suasort.php';

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-08-25 at 12:28:08.
 */
class suasortTest extends PHPUnit_Framework_TestCase {

	/**
	 * @covers sasort
	 * @group  stablesort
	 */
	public function testAssociation() {
		$source = array(
			'a'	=> array('red', 3),
			'b'	=> array('green', 2),
			'c'	=> array('blue', 2),
			'd'	=> array('yellow', 1),
		);
		
		$expected = array(
			'd'	=> array('yellow', 1),
			'b'	=> array('green', 2),
			'c'	=> array('blue', 2),
			'a'	=> array('red', 3),
		);
		
		$array = $source;
		uasort($array, function($a, $b) {
			return $a[1] - $b[1];
		});
		$this->assertNotSame($expected, $array);
		
		$array = $source;
		suasort($array, function($a, $b) {
			return $a[1] - $b[1];
		});
		$this->assertSame($expected, $array);
	}
}