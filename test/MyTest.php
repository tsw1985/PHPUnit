<?php

require_once 'functions.php';

class MyTest extends PHPUnit_Framework_TestCase
{
    public function testIncrementSalary()
    {
       $incrementSalary = incrementSalary( 1000 );
       $this->assertEquals( 20, $incrementSalary );
    }
}

?>
