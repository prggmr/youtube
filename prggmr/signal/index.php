<?php

// handle(function($array){
//     var_dump($array);
// }, 'baby');

// handle(function(){
//     echo $this->youtube;
// }, 'baby');

handle(function(){
    var_dump($this);
}, 'baby');

// $event = new \prggmr\Event();
// $event->youtube = "prggmr";

class User extends \prggmr\Event {}

signal('baby', null, new User());