<?php

interval(function(){
    echo "1 seconds";
}, 1000);

timeout(function(){
    echo "TIMEOUT HAPPENING";
    prggmr_shutdown();
}, 10000);

handle(function(){
    echo "Shutting down";
}, \prggmr\engine\Signals::LOOP_SHUTDOWN);

prggmr_loop();