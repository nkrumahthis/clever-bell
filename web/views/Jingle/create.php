<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <title>CleverBell Editor : Create Schedule</title>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row m-3">
                <div class="col-md-12">
                    <h2 class="mt-5">Upload Jingle</h2>
                    <p>Please choose a file to upload</p>
                    <form action="jingle" enctype="multipart/form-data" method="post">
                        <input type="file" name="jingle" accept="audio/*">
                        <input type="submit" name="Submit" value="Submit">
                    </form>

                    <button>Upload Sound</button>


                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>