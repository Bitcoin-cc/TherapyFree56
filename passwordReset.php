<?php
include_once 'DBConnection.php';
$result = mysqli_query($GLOBALS["link"],"SELECT * FROM usertbl");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>

			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["Password_"]; ?></td>
		
		<td><a href="password.php?id=<?php echo $row["Password_"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>

 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>