<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <title>CleverBell Editor : Create Schedule</title>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Schedule</h2>
                    <p>Please edit the input values and submit to create the schedule.</p>
                    <form action="schedule" method="post">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="text" name="time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Days</label>
                            <select name="days" id="days" class="form-control">
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
                        </div>
                        <div class="form-group">
                            <label>Jingle</label>
                            <select name="jingle" id="jingle" class="form-control">
                                <option value="">choose a jingle</option>
                                <?php
                                $jingles = Jingle::getAll();
                                $i = 0;
                                $selected = "selected = \"selected\"";
                                foreach ($jingles as $jingle) {
                                    echo "<option value=\"$jingle\"" . (($jingles[$i] == $schedule[3]) ? $selected : '') . ">$jingle</option>";
                                    $i++;
                                }
                                ?>
                            </select>
                        </div>
                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                        <a href="/" class="btn btn-secondary ml-2">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>