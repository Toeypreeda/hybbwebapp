<head>
    <title>User</title>
</head>

<body>
    <?php
require_once("header2.php");
    ini_set('dispaly_errors',1);
    error_reporting(~0);

    $username = $_POST["user"];
    $password = $_POST["password"];
    //query

     $sql = "select * from USER";
     $result=mysqli_query($con,$sql);
if($result){
     while($record = mysqli_fetch_array($result)){
         $user = $record["UserName"];
         $pass = $record["UserPassword"];
        if($username === $user and $pass === $password){
    $usercode = $user;?>
    <div class="container-fluid">
        <div class="row" style="margin-top:7%">
            <div class="col-sm-2">
                <div class="card"
                    style="background-color: #efefef; border: none; border-color: white; border-width: 10px;">
                    <br>
                    <h5 style="margin-left:15px; margin-top:-10px"><i
                            class="fas fa-info-circle"></i>&nbsp;<b>Shortcuts</b>
                    </h5>
                    <div class="card-body" style="background-color:#FFFFFF;">

                        <div class="btn-group btn-group-sm" style="display: block;">
                            <a href="static.php">
                                <button class="btn btn-outline-info">สถิติ</button></a>
                            <a href="profile.php">
                                <button class="btn btn-outline-warning">ข้อมูลส่วนตัว</button></a>
                            <a href="absent.php">
                                <button class="btn btn-outline-danger">ยื่นเรื่องลา</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <div class="card"
                    style="background-color: #efefef; border: none; border-color: white; border-width: 10px;">

                    <h5 style="margin-left:15px; margin-top: 15px">
                        <i class="fas fa-stream"></i>&nbsp;<b>แสดงการทำรายงาน</b></h5>

                    <div class="card-body" style="background-color:#FFFFFF;">
                        <div class="container">
                            <ul class="pagination ustify-content-center">
                                <li class="page-item"><a class="page-link" href="tableabsucc.php">
                                        <p align="center" style="color:28a745;">
                                            <span class="badge badge-success"> 4 </span> การลาอนุมัติ</p>
                                    </a></li>
                                <li class="page-item"><a class="page-link" href="tableabwait.php">
                                        <p align="center" style="color:ffc107;">
                                            <span class="badge badge-warning"> 6 </span> การลารออนุมัติ</p>
                                    </a></li>
                                <li class="page-item"><a class="page-link" href="tableabdecline.php">
                                        <p align="center" style="color:dc3545">
                                            <span class="badge badge-danger"> 1 </span> การลาไม่อนุมัติ</p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>

    </div>
    </div>

    <?php
        }else{
        }
     }}
     
	mysqli_close($con);
	?>
</body>