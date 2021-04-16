<?php

class Schedule
{
    public static function add($schedule)
    {
        Csv::addSchedule($schedule);
    }

    public static function edit($index, $schedule)
    {
        Csv::editSchedule($index, $schedule);
    }

    public static function create()
    {
        include('views/schedule/create.php');
    }

    public static function delete($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/delete.php');
    }
}
