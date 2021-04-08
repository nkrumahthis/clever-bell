<?php

function make_table()
{
    $path = "timetable.csv";
    $schedules = [];

    $handle = fopen($path, "r") or die("error opening file");

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        array_push($schedules, $data);
    }

    fclose($handle);

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
