<?php
require_once('auth.php');
$con = mysql_connect("mysql11.000webhost.com","a7196206_data","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a7196206_data", $con);

$name= $_SESSION['SESS_FIRST_NAME'];

$sql="INSERT INTO Teachers (member_id, Teacher, Homework, Subject)
VALUES
('$name','$_POST[teacher]','$_POST[homework]','$_POST[subject]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

header("location: member-index.php");

mysql_close($con)
?>
