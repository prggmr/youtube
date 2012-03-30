<?php
// New Array Syntax
$array = array();

$array = [];

// Closures
class Myclass {
    
    protected $_function = null;

    public function helloworld() {

        $closure = function() {
            $this->helloworld2();
        };
        $closure = $closure->bindTo(new MyClass2());
        $closure();
    }

    public function helloworld2() {
        echo "HelloWorld";
    }
}

class Myclass2 {

    public function helloworld2()
    {
        echo "Helloworld2";
    }

}

$myclass = new Myclass();
$myclass->helloworld();