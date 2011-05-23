<?php
require_once 'funphp/Map.php';
use funphp as f;

echo 'f\map test:' . PHP_EOL;
$coll = new SplFixedArray(2);
$coll[0] = 1;
$coll[1] = 2;

var_dump(f\map($coll, function($x) { return $x+1; }));
echo 'end.' . PHP_EOL;
