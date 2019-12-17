<head>
	<title>Recording</title>
	<meta http-equiv="refresh" content="2; url=http://localhost:3000/register.php">
</head>
<?php
	require_once("header.php");
	ini_set('display_errors', 1);
    error_reporting(~0);
    
    /*Add data*/
    $sql = "INSERT INTO USER (UserCode, UserPassword, UserName, UserLastname, nickname, position, department, st, ed, personalID,
    birthday, lineID, Email, facebook, UserAddress, workstat, UserStatus) 
    VALUES ('".$_POST["UserCode"]."','".$_POST["UserPassword"]."','".$_POST["UserName"]."','".$_POST["UserLastname"]."'
    ,'".$_POST["nickname"]."','".$_POST["position"]."','".$_POST["dep"]."','".$_POST["st"]."','".$_POST["ed"]."'
    ,'".$_POST["personalID"]."','".$_POST["birthday"]."','".$_POST["lineID"]."','".$_POST["Email"]."','".$_POST["facebook"]."'
    ,'".$_POST["UserAddress"]."','".$_POST["workstat"]."','".$_POST["UserStatus"]."')"; 

	$result = mysqli_query($con,$sql);
	if(!$result)
	{
			echo "Don't<hr>";
	}
	else
	{
		echo "Cannot record<hr>";
	}
        mysqli_close($con);
        ?>