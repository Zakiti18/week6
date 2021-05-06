<?php

// this is my controller for the week6 project

// turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autoload file
require_once('vendor/autoload.php');

// :: invoke static method, -> invoke instance method
// instantiate Fat-Free
$f3 = Base::instance();

// define routes
// default route
$f3->route('GET /', function ($f3){
    // save variables to the F3 "hive"
    $f3->set('username', 'Jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');

    $f3->set("color", 'green');
    $f3->set("radius", '10');
    $f3->set("fruits", array('apple', 'orange', 'banana'));

    $f3->set('desserts', array('chocolate' => 'Chocolate Mousse',
        'vanilla' => 'Vanilla Custard',
        'strawberry' => 'Strawberry Shortcake'));

    $f3->set('preferredCustomer', 'true');
    $f3->set('lastLogin', strtotime('-1 week'));

    // display the home page
    $view = new Template();
    echo $view->render('views/info.html');
});

// run Fat-Free
$f3->run();