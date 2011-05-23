<?php
namespace funphp;

/**
 * Arrayify iterable things. 
 *
 * Returns arrays without touching, traversable objects converted into arrays.
 *
 * @param array|Traversable $list 
 * @return array
 */
function arrayify($list) {
    if(is_array($list)) {
	return $list;
    }

    return iterator_to_array($list);
}
