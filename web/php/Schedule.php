<?php

class Schedule
{
    public static function add($schedule)
    {
        Csv::addSchedule($schedule);
    }

    public static function create()
    {
        include('views/schedule/create.php');
    }

    public static function read($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/read.php');
    }

    public static function update($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/update.php');
    }

    public static function delete($index)
    {
        $schedule = Csv::getSchedule($index);
        include('views/schedule/delete.php');
    }

    public static function make_table()
    {
        $schedules = Csv::readAllSchedules();

        echo "
        <table class=\"w-100\">
            <tbody>
                <tr>
                    <th>
                        Description
                    </th>
                    <th>
                        Time
                    </th>
                    <th>
                        Days
                    </th>
                    <th>
                        Sound
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
    ";
        $index = 0;
        foreach ($schedules as $schedule) {
            echo "
            <tr>
                <td>$schedule[0]</td>
                <td>$schedule[1]</td>
                <td>$schedule[2]</td>
                <td>$schedule[3]</td>
                <td><span><a href=\"/schedule/$index\">View</a></span> <span><a href=\"#\">Edit</a></span> <span><a href=\"#\">Delete</a></span></td>

            </tr>
        ";
            $index++;
        }
        echo "
        </tbody>
        </table>
    ";
    }
}
