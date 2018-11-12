<?php

class TestApp  {
	
	
	protected $test;
	
	
	public function testValidEmail ()
	
	{$test= new ControlMail ();
	
	$this->assertTue($test->isEmail(''));
	
	
	}
	
	
	public function testInvalidEmail()
	
	{$test= new ControlMail();
	
	$this->assertFalse($test->isEmail(''))
	
	}
	
	
	
	
	
	
	
	
	
	
	
}





















?>
