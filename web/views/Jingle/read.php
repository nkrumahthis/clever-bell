<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <title>CleverBell Editor : All Jingles</title>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">All Jingles</h1>
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
                    <p><a href="/" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>