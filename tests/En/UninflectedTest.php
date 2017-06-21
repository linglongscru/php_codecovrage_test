<?php

use PHPUnit\Framework\TestCase;
use Inflections\En\Uninflected;

class UninflectedTest extends TestCase
{
    public function testVersion()
    {
        $this->assertGreaterThan(0, Uninflected::$version);
    }

    public function testRules()
    {
        $this->assertNotNull(Uninflected::$rules);
        $this->assertTrue(is_array(Uninflected::$rules));
        foreach (Uninflected::$rules as $rule) {
            @$result = preg_match($rule, null);
            $this->assertNotFalse($result, "Rule $rule did not validate");
        }
    }

    public function testUninflected()
    {
        $this->assertNotNull(Uninflected::$uninflected);
        $this->assertTrue(is_array(Uninflected::$uninflected));

        foreach (Uninflected::$uninflected as $uninflected => $trueVal) {
            $this->assertNotNull($uninflected);
            $this->assertTrue($trueVal);
            $this->assertTrue(is_string($uninflected));
        }
    }
}
