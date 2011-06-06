<?php
namespace funphp;

function intersectTyped($master, $other) {
    $intersection = array();

    foreach($master as $m) {
	if(in_array($m, $other, true)) {
	    $intersection[] = $m;
	}
    }

    return $intersection;
}
