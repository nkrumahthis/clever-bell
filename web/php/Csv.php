<?php

class Csv
{
    private static $path = "timetable.csv";

    public static function readAllSchedules()
    {

        $schedules = [];

        $handle = fopen(self::$path, "r") or die("error opening file");

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($schedules, $data);
        }

        fclose($handle);

        return $schedules;
    }
}
