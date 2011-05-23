<?php
namespace funphp;

/**
 * map implementation compatible with collections
 * @param array|Traversable $list Array or object implementing Traversable
 * @param callback|Closure $func Callback or function
 * @return mixed
 */
function map($list, $func) {
    if(!is_array($list)) {
	$list = iterator_to_array($list);
    }

    return array_map($func, $list);
}
