<?php

class Csv
{
    private static $path = "timetable.csv";

    public static function addSchedule($schedule)
    {
        $handle = fopen(self::$path, "a") or die("error opening file");
        $input = $schedule[0] . "," . $schedule[1] . "," . $schedule[2] . "," . $schedule[3] . "\n";
        fwrite($handle, $input);
        fclose($handle);
    }

    public static function writeSchedules($schedules)
    {
        $handle = fopen(self::$path, "w") or die("error opening file");
        $input = "";
        foreach ($schedules as $schedule) {
            $input .= $schedule[0] . "," . $schedule[1] . "," . $schedule[2] . "," . $schedule[3] . "\n";
        }
        fwrite($handle, $input);
        fclose($handle);
    }

    public static function editSchedule($index, $schedule)
    {
        $schedules = self::readAllSchedules();
        $schedules[$index] = $schedule;
        self::writeSchedules($schedules);
    }

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

    public static function getSchedule($index)
    {
        $schedules = self::readAllSchedules();
        return $schedules[$index];
    }
}
