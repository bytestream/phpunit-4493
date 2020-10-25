Steps to replicate:
```
$ composer install
$ ./vendor/bin/phpunit --testsuite=cache

PHPUnit 9.4.2 by Sebastian Bergmann and contributors.

No tests executed!

```

Steps to fix:
1. Change `test/cache` in `phpunit.xml` to `test/Cache`
```
$ ./vendor/bin/phpunit --testsuite=cache

PHPUnit 9.4.2 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.005, Memory: 6.00 MB

OK (1 test, 1 assertion)

```
