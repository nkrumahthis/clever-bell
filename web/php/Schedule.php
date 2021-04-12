<?php

class Schedule
{
    public static function add($schedule)
    {
        Csv::addSchedule($schedule);
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
                </tr>
    ";

        foreach ($schedules as $schedule) {
            echo "
            <tr>
                <td>$schedule[0]</td>
                <td>$schedule[1]</td>
                <td>$schedule[2]</td>
                <td>$schedule[3]</td>

            </tr>
        ";
        }
        echo "
        </tbody>
        </table>
    ";
    }
}
