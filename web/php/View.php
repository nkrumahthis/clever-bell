<?php

class View
{
    public static function home()
    {
        include('views/home.php');
    }
    public static function scheduleUpdate($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/update.php');
    }

    public static function readSchedule($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/read.php');
    }

    public static function scheduleCreate()
    {
        include('views/schedule/create.php');
    }

    public static function jingleRead()
    {
        include('views/jingle/read.php');
    }
}
