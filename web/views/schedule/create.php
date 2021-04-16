<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
</body>

</html>