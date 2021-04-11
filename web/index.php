<?php
include('php/Csv.php');
include('php/Jingle.php');
include('php/Route.php');
include('php/Schedule.php');


// Add base route(startpage)
Route::add('/', function () {
    include('home.php');
});

Route::add('/main', function () {
    include('main.php');
});

Route::add('/schedule', function () {
    echo 'Welcome schedule';
});

// Post route example
Route::add('/schedule', function () {
    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
}, 'get');

// jingle
Route::add('/jingle', function () {
    echo 'list jingles';
}, 'get');

Route::add(
    '/jingle',
    function () {
        echo 'Jingle uploaded successfully<br/><br/><a href="/"><- Back</a>';
        Jingle::upload();
    },
    'post'
);

Route::add('/foo/([0-9]*)/([0-9]*)', function ($var1, $var2) {
    echo 'foo ' . $var1 . ' ' . $var2;
});

Route::add('/', function () {
    echo 'Welcome :-)';
});

Route::run('/');
