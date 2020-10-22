<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;


class ExampleTest extends TestCase {

	public function test_example(
	) {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->multiply_by(3);
		$this->assertEquals("Fizz", $result);
	}
	public function test_multiply_by_5(
		) {
			$fizzbuzz = new FizzBuzz();
			$result = $fizzbuzz->multiply_by(5);
			$this->assertEquals("Buzz", $result);
		}
	public function test_multiply_by_3_5(
		) {
			$fizzbuzz = new FizzBuzz();
			$result = $fizzbuzz->multiply_by(15);
			$this->assertEquals("FizzBuzz", $result);
		}
	public function test_multiply_by_any(
		) {
			$fizzbuzz = new FizzBuzz();
			$result = $fizzbuzz->multiply_by(8);
			$this->assertEquals(8, $result);
		}	
	


}


