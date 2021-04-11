<?php
include('Route.php');

// Add base route(startpage)
Route::add('/', function () {
    echo 'Welcome :-)';
});

Route::add('/schedule', function () {
    echo 'Welcome schedule';
});

// Post route example
Route::add('/contact-form', function () {
    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
}, 'get');

// Post route example
Route::add('/contact-form', function () {
    echo 'Hey! The form has been sent:<br/>';
    print_r($_POST);
}, 'post');

Route::add('/foo/([0-9]*)/([0-9]*)', function ($var1, $var2) {
    echo 'foo ' . $var1 . ' ' . $var2;
});

Route::add('/', function () {
    echo 'Welcome :-)';
});

Route::run('/');
