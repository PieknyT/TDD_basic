<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-08-01
 * Time: 23:05
 */


class ExampleTest extends PHPUnit_Framework_TestCase {

    public function testGreetings()
    {
        $greetings = 'Hello World';
        $this->assertEquals('Hello World', $greetings);
    }

}