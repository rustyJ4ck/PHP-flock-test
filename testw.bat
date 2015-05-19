@echo off
echo lock nb test
echo 

SET php=Q:\xampp\xampp183\php\php.exe

%php% -v

start /b %php% lock-nb-test.php 1
start /b %php% lock-nb-test.php 2
start /b %php% lock-nb-test.php 3
start /b %php% lock-b-test.php 11
start /b %php% lock-b-test.php 12
start /b %php% lock-nb-test.php 4
start /b %php% lock-nb-test.php 5