<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forget Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <?php
        require"./header.php";
    ?>
</head>

<body>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-sm-5" style="margin-top:10%">
            <div class="container">
                <div class="card">

                    <div class="card-body">
                        <label>Forget Password</label>
                        <hr>
                        <form name="form1" method="post" action="#" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="user">Email</label>
                                <input type="text" class="form-control" id="user">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" style="float:right;"><a href="login.html"
                                        style="color:inherit">Confirm</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4"></div>

</body>