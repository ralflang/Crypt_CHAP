# pear/crypt_chap modernized 2.0.0

This is a slightly modernized approach to pear/crypt_chap intended to be compatible with PHP 7.
It should work without changing the client code

## Important CHANGES

- Composer rather than PEAR
- phpseclib mcrypt shim rather than binary mcrypt
- Separate file per class in a PSR-0 autoloading layout
- PHP 5 constructors
- Explicitly prefix top namespace items \
- PSR-12 compatible formatting
- public rather than var
- all functions explicitly declared public
- tested with phpunit 9

## Unchanged

- Class names
- No namespaces
- Dependency on the PEAR class