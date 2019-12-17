<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <nav class="navbar navbar-expand-lg bg-light static-top">
        <a class="navbar-brand" href="login.php">
            <img src="https://www.img.in.th/images/c294b5df67d0ee33753246166d651551.png"
                style="height:40px; width:100px;" alt="">
        </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Logout</a>
            </li>
        </ul>
    </nav>
</head>

<body
    style="height: 1235px; width:auto; background-color: #197fbf;background-image: linear-gradient(#1d7cbc, #2394d0, #2ca5de, #7cb5d0, #b8bdc1);position: relative;">

    <?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "absent";

$con = mysqli_connect($servername, $username, $password,$db);

if (!$con)
    die("Connection failed: " . mysqli_connect_error());

	?>


</body>

</html>