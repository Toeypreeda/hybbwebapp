
<!DOCTYPE html>
<html lang="en">

<head>
    <title>absent</title>
    <?php
        require"./header.php";
    ?>
    <style>
        .scroll {
            max-height: auto;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-sm-4" style="margin-top:10%">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form name="form1" method="post" action="#" enctype="multipart/form-data">
                            <label for="user">Email</label>
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" id="user" name="user" placeholder="username">
                            </div><br>
                            <label for="psd">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="password">

                            </div><br>
                            <a href="forgetpassword.php">Forget Password</a>
                            <a href="register.php" style="float:right;" class="btn btn-warning" role="button value="login">login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
    </div>
</body>