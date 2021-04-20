<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <title>CleverBell Editor : View Schedule</title>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row m-3">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Schedule</h1>
                    <div class="form-group">
                        <label>Description</label>
                        <p><b><?php echo $schedule[0]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <p><b><?php echo $schedule[1]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Days</label>
                        <p><b><?php echo $schedule[2]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Jingle</label>
                        <p><b><?php echo $schedule[3]; ?></b></p>
                    </div>
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