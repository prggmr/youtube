<?php
/**
 * Closure
 * 
 * Signal
 * 
 * Priority
 * 
 * Exhaustion
 */
handle(function(){
    echo "HelloWorld Handle #1".PHP_EOL;
}, 'test', 1, 2);

handle(function(){
    echo "HelloWorld Handle #2".PHP_EOL;
}, 'test', 2, 1);