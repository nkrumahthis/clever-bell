<?php
include('php/View.php');
include('php/Csv.php');
include('php/Jingle.php');
include('php/Route.php');
include('php/Schedule.php');


// Add base route(startpage)
Route::add('/', function () {
    View::home();
});

Route::add('/schedule/create', function () {
    View::scheduleCreate();
}, 'get');

Route::add(
    '/schedule/create',
    function () {
        Schedule::add();
        echo 'Schedule added successfully<br/><br/><a href="/"><- Back</a>';
    },
    'post'
);

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
    '/schedule/duplicate/([0-9]*)',
    function ($index) {
        #edit
        Schedule::duplicate($index);
        View::home();
    },
    'get'
);

Route::add(
    '/schedule/update/([0-9]*)',
    function ($index) {
        Schedule::edit($index);
        echo 'Schedule editted successfully<br/><br/><a href="/"><- Back</a>';
    },
    'post'
);

Route::add(
    '/schedule/delete/([0-9]*)',
    function ($index) {
        # delete
        Schedule::delete($index);
        echo 'Schedule deleted successfully<br/><br/><a href="/"><- Back</a>';
    },
    'get'
);

// Post route example
Route::add('/schedule', function () {
    Schedule::add();
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

Route::run('/');
