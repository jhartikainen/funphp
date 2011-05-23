# Functional PHP helpers

This repo contains some helpers for using functional style programming in PHP 5.3.

And before you ask why did you reimplement array_map and array_filter: It's because the PHP built-in ones are incompatible with collections, and as such makes it annoying to deal with any library that uses array-like objects (eg. Doctrine 2)

Also, the order of arguments in the builtins makes no sense and is inconsistent.
