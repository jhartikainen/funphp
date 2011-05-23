<?php
namespace funphp;

require_once 'funphp/arrayify.php';

/**
 * filter implementation compatible with collections
 * @param array|Traversable $list
 * @param callback|Closure $func
 * @return mixed
 */
function filter($list, $func) {
    return array_filter(arrayify($list), $func);
}
