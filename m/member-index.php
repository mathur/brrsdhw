<?php
	require_once('auth.php');
        require_once('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BRRSD Homework - Member Home</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<a href="member-index.php">Home</a> | <a href="member-addnew.php">Add New Teacher</a> | <a href="logout.php">Logout</a>

<br />
<br />
<?php

$name= $_SESSION['SESS_FIRST_NAME'];

// Connects to your Database 
mysql_connect("mysql11.000webhost.com", "a7196206_data", "password") or die(mysql_error()); 
mysql_select_db("a7196206_data") or die(mysql_error()); 
$data = mysql_query("SELECT * FROM Teachers WHERE member_id = '$name'") 
or die(mysql_error()); 
Print "<table border cellpadding=3 width=300px>"; 
while($info = mysql_fetch_array( $data )) 
{ 
Print "</table>";
Print "<br />";
Print "<table border cellpadding=3 width=300px>";
Print "<tr>"; 
Print "<th width=150px>Teacher Name:</th> <td>".$info['Teacher'] . "</td></tr> ";
Print "<tr>";
Print "<th width=150px>Homework Page:</th> <td><a href=".$info['Homework'] . ">Link</a></td></tr>";
Print "<tr>";
Print "<th width=150px>Subject:</th> <td>".$info['Subject'] . "</td></tr> ";  
} 
Print "</table>"; 
?>
<br />
</body>
</html>
