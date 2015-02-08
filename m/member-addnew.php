<?php
	require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BRRSD Homework - Add New Teacher</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<a href="member-index.php">Home</a> | <a href="member-addnew.php">Add New Teacher</a> | <a href="logout.php">Logout</a>
<br /><br /><br />

<form action="addnew.php" method="post">
<table width="300" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Teacher Name:</b></td>
      <td width="188"><input type="text" name="teacher" id="teacher" /></td>
    </tr>
    <tr>
      <td><b>Homework Page:</b></td>
      <td><input type="text" name="homework" id="homework" /></td>
    </tr>
    <tr>
      <td><b>Subject:</b></td>
      <td><input type="text" name="subject" id="subject" /></td>
    </tr>
    <tr>
      <td>&nbsp</td>
      <td><input type="submit" value="Add New Teacher" /></td>
    </tr>
  </table>
</form>

</body>
</html>
