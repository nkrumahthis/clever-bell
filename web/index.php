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
}, 'get');

Route::add('/schedule/view/([0-9]*)', function ($index) {
    View::scheduleRead($index);
}, 'get');

Route::add(
    '/schedule/update/([0-9]*)',
    function ($index) {
        #edit
        View::scheduleUpdate($index);
    },
    'get'
);

Route::add(
    '/schedule/update/([0-9]*)',
    function ($index) {
        $schedule = array($_POST["description"], $_POST["time"], $_POST["days"], $_POST["jingle"]);
        Schedule::edit($index, $schedule);
        echo 'Schedule editted successfully<br/><br/><a href="/"><- Back</a>';
    },
    'post'
);

Route::add(
    '/schedule/delete/([0-9]*)',
    function ($index) {
        # delete
    },
    'get'
);

// Post route example
Route::add('/schedule', function () {
    $schedule = array($_POST["description"], $_POST["time"], $_POST["days"], $_POST["jingle"]);
    Schedule::add($schedule);
    echo 'Schedule added successfully<br/><br/><a href="/"><- Back</a>';
}, 'post');

// jingle
Route::add('/jingle', function () {
    echo 'list jingles';
}, 'get');

Route::add(
    '/jingle',
    function () {
        Jingle::upload();
        echo 'Jingle uploaded successfully<br/><br/><a href="/"><- Back</a>';
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
