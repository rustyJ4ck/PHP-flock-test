#!/bin/sh

echo lock nb test
echo 

php lock-nb-test.php 1 &
php lock-nb-test.php 2 &
php lock-nb-test.php 3 &
php lock-b-test.php 11 &
php lock-b-test.php 12 &
php lock-nb-test.php 4 &
php lock-nb-test.php 5 &