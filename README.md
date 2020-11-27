Steps to replicate:
```
$ composer install
$ vendor/bin/phpunit 
PHPUnit 9.4.3 by Sebastian Bergmann and contributors.

S                                                                   1 / 1 (100%)

Time: 00:00.006, Memory: 6.00 MB

OK, but incomplete, skipped, or risky tests!
Tests: 1, Assertions: 0, Skipped: 1.

$ vendor/bin/paratest 

In DocBlock.php line 291:
                                        
  [PHPUnit\Framework\SkippedTestError]  
                                        

paratest [--bootstrap BOOTSTRAP] [--colors] [-c|--configuration CONFIGURATION] [--coverage-clover COVERAGE-CLOVER] [--coverage-cobertura COVERAGE-COBERTURA] [--coverage-crap4j COVERAGE-CRAP4J] [--coverage-html COVERAGE-HTML] [--coverage-php COVERAGE-PHP] [--coverage-test-limit COVERAGE-TEST-LIMIT] [--coverage-text] [--coverage-xml COVERAGE-XML] [--exclude-group EXCLUDE-GROUP] [--filter FILTER] [-f|--functional] [-g|--group GROUP] [-h|--help] [--log-junit LOG-JUNIT] [--log-teamcity LOG-TEAMCITY] [-m|--max-batch-size MAX-BATCH-SIZE] [--no-test-tokens] [--order-by [ORDER-BY]] [--parallel-suite] [--passthru PASSTHRU] [--passthru-php PASSTHRU-PHP] [--path PATH] [-p|--processes PROCESSES] [--random-order-seed [RANDOM-ORDER-SEED]] [--runner RUNNER] [--stop-on-failure] [--testsuite TESTSUITE] [--tmp-dir TMP-DIR] [-v|--verbose VERBOSE] [--whitelist WHITELIST] [--] [<path>]


```
