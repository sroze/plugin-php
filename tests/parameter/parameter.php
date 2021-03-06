<?php

function foo($arg)
{
    return $arg;
}

function foo1(&$arg)
{
    return $arg;
}

function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}

function makecoffee1($types = array("cappuccino"), $coffeeMaker = NULL)
{
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of ".join(", ", $types)." with $device.\n";
}

function f(C $c) {
    echo get_class($c)."\n";
}

function f1(C $c = null) {
    var_dump($c);
}

function sum(int $a, int $b) {
    return $a + $b;
}

function sum1(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

function total_intervals($unit, DateInterval ...$intervals) {
    $time = 0;
    foreach ($intervals as $interval) {
        $time += $interval->$unit;
    }
    return $time;
}

function testReturn(?string $name): ?string
{
    return $name;
}

function intArg(int $c = 111111111111111111111111111111111111111111111111111111111111111111111111) {
    var_dump($c);
}

function bar($arg = array("veryVeryVeryVeryVeryVeryVeryVeryVeryLongString", "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString", "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString"))
{
    return $arg;
}

function bar1(
    $arg = array(
        "key1" => "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString",

        "key2" => "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString",

        "key3" => "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString"
    )
) {
    return $arg;
}

function bar2($arg = "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString" . "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString" . "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString")
{
    return $arg;
}

function bar3($arg = "veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString" ? "1" : "2")
{
    return $arg;
}

function bar4(string $arg = "veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString" ? "1" : "2")
{
    return $arg;
}

function bar5($arg = "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString" === "veryVeryVeryVeryVeryVeryVeryVeryVeryLongString" ? "1" : "2")
{
    return $arg;
}


