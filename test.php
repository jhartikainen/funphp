<?php
require_once 'funphp/map.php';
require_once 'funphp/filter.php';
require_once 'funphp/any.php';
use funphp as f;

echo 'f\map test:' . PHP_EOL;
$coll = new SplFixedArray(2);
$coll[0] = 1;
$coll[1] = 2;

var_dump(f\map($coll, function($x) { return $x+1; }));
echo 'end.' . PHP_EOL;

echo 'f\filter test:' . PHP_EOL;
$coll = new SplFixedArray(2);
$coll[0] = 1;
$coll[1] = 2;

var_dump(f\filter($coll, function($x) { return $x==1; }));
echo 'end.' . PHP_EOL;

echo 'f\any test:' . PHP_EOL;
$coll = new SplFixedArray(2);
$coll[0] = 1;
$coll[1] = 2;

var_dump(f\any($coll, function($x) { return $x==2; }));
echo 'end.' . PHP_EOL;
