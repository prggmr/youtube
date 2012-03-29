<?php
/**
 * prggmrlabs
 * 
 * PHP Traits Introduction Tutorial
 */
class Hello {
    /**
     * Echo World!
     * 
     * @return  void
     */
    public function helloworld()
    {
        echo "Hello";
    }
}

trait World {

    private $_hello = "I am private";

    /**
     * Echo World!
     * 
     * @return  void
     */
    public function helloworld()
    {
        parent::helloworld();
        echo "World";
    }
}

class MyClass extends Hello {
    /**
     * Inherit the World trait
     */
    use World;

    public function property()
    {
        echo $this->_hello;
    }
}

$myclass = new MyClass();
$myclass->helloworld();
$myclass->property();