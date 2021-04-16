<?php

class View
{
    public static function scheduleUpdate($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/update.php');
    }

    public static function scheduleRead($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/read.php');
    }
}
