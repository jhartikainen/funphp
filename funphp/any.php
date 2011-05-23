<?php
namespace funphp;

/**
 * Return if any item in list satisfies predicate
 * @param array|Traversable $list
 * @param callback|Closure $predicate Comparator function
 * @return bool
 */
function any($list, $predicate) {
    foreach($list as $item) {
	if($predicate($item)) {
	    return true;
	}
    }
    
    return false;
}
