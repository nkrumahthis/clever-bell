<!DOCTYPE html>
<html lang="en">
<?php
// hello how low
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
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
            <div class="col-md-4">
                <h3>Sounds</h3>
                <ul>
                    <?php
                    $jingles = Jingle::getAll();
                    foreach ($jingles as $jingle) {
                        echo "<li>" . $jingle . "</li>";
                    }
                    if (sizeof($jingles) == 0) {
                        echo "no sounds yet.";
                    }
                    ?>
                </ul>

                <form action="jingle" enctype="multipart/form-data" method="post">
                    <input type="file" name="jingle" accept="audio/*">
                    <input type="submit" name="Submit" value="Submit">
                </form>

                <button>Upload Sound</button>
            </div>
            <div class="col-md-8">
                <h3>Schedules</h3>
                <div class="my-3">
                    <form action="schedule" method="post">
                        <input type="text" name="description" placeholder="description" />
                        <input type="text" name="time" paceholder="12:59" />
                        <select name="days" id="days">
                            <option value="Everyday">Everyday</option>
                            <option value="Weekdays">Weekdays</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Weekends">Weekends</option>
                        </select>
                        <select name="jingle" id="jingle">
                            <option value="" default>choose a jingle</option>
                            <?php
                            foreach ($jingles as $jingle) {
                                echo "<option value=\"" . $jingle . "\">" . $jingle . "</option>\n";
                            }
                            ?>
                        </select>
                        <input type="submit" name="Submit" value="Submit">
                    </form>
                    <!-- <button>New</button> -->
                </div>
                <?php Schedule::make_table(); ?>
                <div class="my-3">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>