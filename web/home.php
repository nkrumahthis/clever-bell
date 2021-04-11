<!DOCTYPE html>

<?php
// hello how low
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

                <button>Upload Sound</button>
            </div>
            <div class="col-md-8">
                <h3>Schedules</h3>
                <div class="my-3">
                    <button>New</button>
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