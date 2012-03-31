<?php
// Array Short
$short = [
    0, 
    1, 
    2, 
    3
];

var_dump($short);

// Array Short w/ Keywords
$keywords = [
    'dog' => 'dog',
    'cat' => 'cat',
    'rat' => 'rat'
];

var_dump($keywords);

function array_return(){
    return [
        'lion'
    ];
}

$myvar = array_return();
echo $myvar[0];