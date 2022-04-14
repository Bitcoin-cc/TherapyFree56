<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="topnav">
	<a class="title" href="index.html" taret="_self">The Therapy Webbo</a>
	<a class="active" href="login.php" target="_self">login</a>
    <a href="Questionnaire.html" target="_self">Questionnaire</a>
	<a href="TherapyInfo.html" target="_self">TherapyInfo</a>
     <a href="Register.php" target="_self">register</a>
     <a href="logout.php" target="_self">logout</a>
    <a href="changePassword.php" target="_self">change password</a>
    
    
</div>
<h2 class="wide">Therapy main page</h2>
    here we display each and every registered email inside the database .
    
<br>

        
<?php include 'DBConnection.php';?>
<?php
    $sql = "SELECT email FROM usertbl";
$result = mysqli_query($GLOBALS["link"], $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["email"];
      }
    echo"</table>";
    
} else {
  echo "0 results";
}

mysqli_close($GLOBALS["link"]);

  ?>
 <br>
    
   database connection is done and the sql connection is working
</body>
</html>
