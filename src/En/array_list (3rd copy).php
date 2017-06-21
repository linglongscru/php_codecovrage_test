<?php

/**
 * @jms-builtin
 * @param array $x
 * @return array
 */
function each($x) {}

/**
 * @Assertions(4)
 */
function test() {
    $x = $_GET['x'];
    /** @AssertTainted */ $x;

    list($a, $b) = $x;
    /** @AssertTainted */ $a;

    $y = each($x);
    /** @AssertTainted */ $y;

    list($b) = each($x);
    /** @AssertTainted */ $b;
}
