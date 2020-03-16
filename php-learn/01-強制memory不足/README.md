# 01-強制memory不足

```
$ cat allowed-memory-test.php
<?php
ini_set('memory_limit', '1M');

$a = [];
for($i = 0; $i < $argv[1]; $i++) {
  $a[] = $i*$i;
}
$ php allowed-memory-test.php 100
$ echo $?
0
$ php allowed-memory-test.php 100000

Fatal error: Allowed memory size of 2097152 bytes exhausted (tried to allocate 2097160 bytes) in github.com/IkezoeMakoto/etc-trial/php-learn/01-強制memory不足/allowed-memory-test.php on line 6
$ echo $?
255
```
