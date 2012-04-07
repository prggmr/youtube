<?php

// handle(function(){
//     $this->cat = "Jeff";
//     $this->_dog = "Delula";
// }, 'test', 0);

// handle(function(){
//     echo $this->cat;
//     $this->_dog = "Savanaha";
//     echo $this->_dog;
// }, 'test', 1);

class User {

    public function register()
    {
        // sql functions registers user
        handle(function(){
            echo "Handle";
            var_dump($this);
        }, 'test');

        $user = function(){
            echo "User class";
            var_dump($this);
        };
        $user();
    }

}

$user = new User();
$user->register();

signal('test');