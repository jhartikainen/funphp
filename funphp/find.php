<?php
namespace funphp;

/**
 * Find first item on list which satisfies predicate function
 * @param array|Traversable $list
 * @param callback|Closure $predicate
 * @return mixed|null Null on failure
 */
function find($list, $predicate) {
    foreach($list as $item) {
	if($predicate($item)) {
	    return $item;
	}
    }

    return null;
}
