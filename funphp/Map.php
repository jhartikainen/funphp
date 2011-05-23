<?php
namespace funphp;
require_once 'funphp/arrayify.php';

/**
 * map implementation compatible with collections
 * @param array|Traversable $list Array or object implementing Traversable
 * @param callback|Closure $func Callback or function
 * @return mixed
 */
function map($list, $func) {
    return array_map($func, arrayify($list));
}
