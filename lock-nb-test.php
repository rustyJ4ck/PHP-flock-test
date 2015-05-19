<?php

set_time_limit(0);
_time();

$id = @$argv[1]?:1;

$sleep = rand(0, 10);
printf('start #%d sleep %d %s', $id, $sleep, PHP_EOL);

#sleep($sleep);                          

$fp = fopen('test.log', 'w+');

$count = 0;
$timeout = 60;
$wouldblock = false;

$wait = microtime(1);

while (!($got_lock = flock($fp, LOCK_EX | LOCK_NB, $wouldblock))) {
    if ($wouldblock && $count++ < $timeout) {
        printf('[%.5f] #%d try get lock %d/%.2f %s', _time(), $id, $count, microtime(1)-$wait, PHP_EOL);
        sleep(1);
    }
}

printf('[%.5f] #%d loop end [awaiting %.2f] wblock %d %s', _time(), $id, microtime(1)-$wait, $wouldblock, PHP_EOL);

if ($got_lock) {
    // Do stuff with file
    $sleep = rand(1, 5);
    printf('[%.5f] #%d got lock [awaiting %.2f], go to sleep %d %s', _time(), $id, microtime(1)-$wait, $sleep, PHP_EOL);
    sleep($sleep);                          
    flock($fp, LOCK_UN); // unlock the file

} else {
    printf('[%.5f] #%d CANT GET LOCK! [awaiting %.2f] %s', _time(), $id, microtime(1)-$wait, PHP_EOL);
}

fclose($fp);
printf('[%.5f] done #%d %s', _time(), $id, PHP_EOL);

function _time() {
	static $time = 0;
	$return = (!$time) ? 0*($time=microtime(1)) : microtime(1)-$time;
	return $return;
}