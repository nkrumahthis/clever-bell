<!DOCTYPE html>
<html lang="en">
<?php
// hello how low
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <title>CleverBell Editor</title>
</head>

<body>
    <div class="container">
        <div class="row banner mx-2">
            <div class="col">
                <h1>Clever Bell</h1>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-md-8">
                <h3>Schedules</h3>
                <div class="my-3">

                    <p><a href="/schedule/create" class="btn btn-primary">New</a></p>
                </div>
                <?php

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
                <td><span><a href=\"/schedule/view/$index\">View</a></span> <span> <a href=\"/schedule/update/$index\">Edit</a></span> <span><a href=\"/schedule/duplicate/$index\">Duplicate</a></span> <span><a href=\"/schedule/delete/$index\">Delete</a></span></td>

            </tr>
        ";
                    $index++;
                }
                echo "
        </tbody>
        </table>
    ";

                ?>


            </div>
        </div>
    </div>

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>