<?php

// function check_auth() {
//     if ($_GET['auth'] == 1) return true;
//     return false;
// }

// // Linear
// switch($_GET['page']) {
//     case 'about':
//         if (check_auth()) {
//             echo "Hello, This is about Event Driven Architecture (EDA)";
//         }
//         break;
//     case 'contact':
//         if (check_auth()) {
//             echo "You can contact me at 544-766-8989";
//         }
//         break;
//     default:
//     case 'home':
//         if (check_auth()) return false;
//         echo "You are home";
//         break;
// }

// Event Driven

require '/Users/prggmr/Work/prggmrlabs/prggmr/src/prggmr.php';
require '/Users/prggmr/Work/prggmrlabs/prggmr/src/signal/array_contains.php';

handle(function(){
    echo "Hello, This is about Event Driven Architecture (EDA)"; 
}, 'about');

handle(function(){
    echo "You can contact me at 544-766-8989";
}, 'contact');

handle(function(){
    echo "You are home";
}, 'home');

handle(function(){
    if ($_GET['auth'] == 1) return true;
    return false;
}, new \prggmr\signal\ArrayContains(array(
    'about', 'contact', 'home'
)), 1);

$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
signal($page);