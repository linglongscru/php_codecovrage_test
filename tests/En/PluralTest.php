<?php

use PHPUnit\Framework\TestCase;
use Inflections\En\Plural;

class PluralTest extends TestCase
{
    public function testVersion()
    {
        $this->assertGreaterThan(0, Plural::$version);
    }

    public function testRules()
    {
        $this->assertNotNull(Plural::$rules);
        $this->assertTrue(is_array(Plural::$rules));
        foreach (Plural::$rules as $rule => $sub) {
            @$result = preg_match($rule, null);
            $this->assertNotFalse($result, "Rule $rule did not validate");
        }
    }

    public function testUninflected()
    {
        $this->assertNotNull(Plural::$uninflected);
        $this->assertTrue(is_array(Plural::$uninflected));

        foreach (Plural::$uninflected as $uninflected) {
            @$result = preg_match($uninflected, null);
            $this->assertNotFalse($result, "Uninflected rule $uninflected did not validate");
        }
    }

    public function testIrregular()
    {
        $this->assertNotNull(Plural::$irregular);

        foreach (Plural::$irregular as $key => $value) {
            $this->assertNotEquals($key, $value);
        }
    }
}
