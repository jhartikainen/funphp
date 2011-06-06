<?php
require_once 'funphp/map.php';
require_once 'funphp/filter.php';
require_once 'funphp/any.php';
require_once 'funphp/find.php';
require_once 'funphp/intersectTyped.php';
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

echo 'f\find test:' . PHP_EOL;
$coll = new SplFixedArray(2);
$coll[0] = array('foo'=>'bar');
$coll[1] = array('foo'=>'baz');

var_dump(f\find($coll, function($x) { return $x['foo']=='bar'; }));
echo 'end.' . PHP_EOL;

echo 'f\intersectTyped test:' . PHP_EOL;
$o1 = new stdClass();
$o1->name = 'o1';
$o2 = new stdClass();
$o2->name = 'o2';
$master = array(
    true, false, $o1, $o2
);
$other = array(false, $o2);

var_dump(f\intersectTyped($master, $other));
echo 'end.' . PHP_EOL;
