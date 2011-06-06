<?php
namespace funphp;
require_once 'funphp/arrayify.php';

function intersectTyped($master, $other) {
    $intersection = array();
    $other = arrayify($other);

    foreach($master as $m) {
	if(in_array($m, $other, true)) {
	    $intersection[] = $m;
	}
    }

    return $intersection;
}
