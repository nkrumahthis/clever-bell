<?php

class Csv
{
    private static $path = "timetable.csv";
    private static $file_error = "error opening file";

    private static function schedule_array()
    {
        return array($_POST["description"], $_POST["time"], $_POST["days"], $_POST["jingle"]);
    }

    public static function addSchedule()
    {
        $schedule = self::schedule_array();
        $handle = fopen(self::$path, "a") or die(self::$file_error);
        $input = $schedule[0] . "," . $schedule[1] . "," . $schedule[2] . "," . $schedule[3] . "\n";
        fwrite($handle, $input);
        fclose($handle);
    }

    public static function appendSchedule($schedule)
    {
        $handle = fopen(self::$path, "a") or die(self::$file_error);
        $input = $schedule[0] . "," . $schedule[1] . "," . $schedule[2] . "," . $schedule[3] . "\n";
        fwrite($handle, $input);
        fclose($handle);
    }

    public static function writeSchedules($schedules)
    {
        $handle = fopen(self::$path, "w") or die(self::$file_error);
        $input = "";
        foreach ($schedules as $schedule) {
            $input .= $schedule[0] . "," . $schedule[1] . "," . $schedule[2] . "," . $schedule[3] . "\n";
        }
        fwrite($handle, $input);
        fclose($handle);
    }

    public static function editSchedule($index)
    {
        $schedules = self::readAllSchedules();
        $schedules[$index] = self::schedule_array();
        self::writeSchedules($schedules);
    }

    public static function duplicateSchedule($index)
    {
        $schedule = self::getSchedule($index);
        self::appendSchedule($schedule);
    }

    public static function deleteSchedule($index)
    {
        $schedules = self::readAllSchedules();
        unset($schedules[$index]);
        self::writeSchedules($schedules);
    }

    public static function readAllSchedules()
    {

        $schedules = [];

        $handle = fopen(self::$path, "r") or die(self::$file_error);

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
