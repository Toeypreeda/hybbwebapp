<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert</title>
    <?php
        require_once("header.php");
    ?>
    <script>
        $('.datepicker').pickadate({
            weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            showMonthsShort: true
        })
    </script>
</head>

<body>
    <div class="container">
        <div class="card-group" style="margin-top:10%">
            <div class="card"
                style="background-color: #efefef; border: solid; border-color: white; border-width: 10px;">
                <div class="card-body">
                    <img src="https://cdn1.iconfinder.com/data/icons/camera-13/100/Artboard_62-512.png"
                        class="card-img-top mx-auto d-block"
                        style="height: 150px; width: 150px;border:solid; border-color:gray;">
                </div>
            </div>
            <div class="card"
                style="background-color: #efefef; border: none; border: solid; border-color: white; border-width: 10px;">
                <div class="card-body">

                    <form action="insert.php" ame="frmAdd" method="post" enctype="multipart/form-data">
                        <input type="text" class="form-control form-control-sm" placeholder="Employee ID"
                            name="UserCode"><br>
                            <input type="text" class="form-control form-control-sm" placeholder="Password"
                            name="UserPassword"><br>
                        <input type="text" class="form-control form-control-sm" name="UserName" placeholder="Name"><br>
                        <input type="text" class="form-control form-control-sm" name="UserLastname"
                            placeholder="LastName"><br>
                        <input type="text" class="form-control form-control-sm" name="nickname"
                            placeholder="Nickname"><br>
                        <select class="form-control form-control-sm" name="position">
                            <option>--Position--</option>
                            <option>Marketing</option>
                            <option>Programmer</option>
                            <option>Graphic</option>
                            <option>Admin</option>
                            <option>HR</option>
                        </select><br>
                        <input type="text" class="form-control form-control-sm" name="dep" placeholder="Department"><br>

                        <label>Start</label>
                        <input class="form-control datepicker form-control-sm" placeholder="Start" type="date"
                            name="st"><br>
                        <label align="left">End</label>
                        <input type="date" name="ed" class="form-control datepicker form-control-sm"><br>
                    
                </div>
            </div>
            <div class="card"
                style="background-color: #efefef; border: none; border: solid; border-color: white; border-width: 10px;">
                <div class="card-body">
                    <input type="text" class="form-control form-control-sm" id="personalID" name="personalID"
                        placeholder="Personal ID"><br>
                    <label>Birthday</label>
                    <input placeholder="Birthday" type="date" id="birthday" name="birthday"
                        class="form-control datepicker form-control-sm" style="width:60%"><br>
                    <input type="text" class="form-control form-control-sm" id="lineID" placeholder="Line ID"
                        name="lineID" style="width:60%"><br>
                    <input type="text" class="form-control form-control-sm" id="Email" placeholder="Personal Email"
                        name="Email" style="width:60%"><br>
                    <input type="text" class="form-control form-control-sm" id="facebook" placeholder="Facebook"
                        name="facebook"><br>
                    <input type="text" class="form-control" rows="4" id="Address" placeholder="Address"
                        name="UserAddress"><br>
                    <select class="form-control form-control-sm" id="workstat" name="workstat">
                        <option>--Working Status--</option>
                        <option>Working</option>
                        <option>Workbreak</option>
                        <option>Not working</option>
                    </select><br>
                    <select class="form-control form-control-sm" id="UserStatus" name="UserStatus">
                        <option>--Status--</option>
                        <option>Stay</option>
                        <option>Leave</option>
                    </select><br>
                    <button type="submit" class="btn btn-success" value="submit" name="submit">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>