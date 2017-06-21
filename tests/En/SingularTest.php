<?php

use PHPUnit\Framework\TestCase;
use Inflections\En\Singular;

class SingularTest extends TestCase
{
    public function testVersion()
    {
        $this->assertGreaterThan(0, Singular::$version);
    }

    public function testRules()
    {
        $this->assertNotNull(Singular::$rules);
        $this->assertTrue(is_array(Singular::$rules));
        foreach (Singular::$rules as $rule => $sub) {
            @$result = preg_match($rule, null);
            $this->assertNotFalse($result, "Rule $rule did not validate");
        }
    }

    public function testUninflected()
    {
        $this->assertNotNull(Singular::$uninflected);
        $this->assertTrue(is_array(Singular::$uninflected));

        foreach (Singular::$uninflected as $uninflected) {
            @$result = preg_match($uninflected, null);
            $this->assertNotFalse($result, "Uninflected rule $uninflected did not validate");
        }
    }

    public function testIrregular()
    {
        $this->assertNotNull(Singular::$irregular);

        foreach (Singular::$irregular as $key => $value) {
            $this->assertNotEquals($key, $value);
        }
    }
}
