<?php
include_once 'DBConnection.php';
if(count($_POST)>0) {
mysqli_query($GLOBALS["link"],"UPDATE usertbl set Password_='" . $_POST['Password_']  . "'");
$message = "Record Modified Successfully";
}


$result = mysqli_query($GLOBALS["link"],"SELECT * FROM usertbl WHERE Password_='" . $_GET['Password_'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="passwordReset.php">password reset</a>
</div>
Username: <br>
<input type="hidden" name="Password_" class="txtField" 
       value="<?php echo $row['NAME']; ?>">
<input type="text" name="Password_"  value="<?php echo $row['Password_']; ?>">
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>