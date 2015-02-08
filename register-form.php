<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>BRRSD Homework - Login</title>
</head>

<body>
<br />
    <div id="main">
          <div id="header">
                <div id="headerTitle">
                     <img src="img/logo.png">&nbspHW<br /></div>
          </div>
    
    
    <div id="content">
    <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<div id="navcontainer">
<ul id="navlist">
<li><a href="index.htm">Home</a></li>
</ul>
</div>
<br />
<center>
<br />
<form id="loginForm" name="loginForm" method="post" action="register-exec.php">
  <table width="500" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <th width="250">First Name </th>
      <td width="250"><input name="fname" type="text" class="textfield" id="fname" /></td>
    </tr>
    <tr>
      <th>Last Name </th>
      <td><input name="lname" type="text" class="textfield" id="lname" /></td>
    </tr>
    <tr>
      <th>Login</th>
      <td><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <th>&nbsp</th>
      <td><input type="submit" name="Submit" value="Register"/></td>
    </tr>
  </table>
</form>
<table width="500" border="0" cellpadding="2" cellspacing="0">
<tr>
<th><p>Already have an account? Click <a href="http://brrsdhw.net16.net/index.htm">here</a> to log in.</a></p></th>
</tr>
</table>
</center>
</div>
<div id="footer">
<center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0905865545439662";
/* BRRSD Homework */
google_ad_slot = "1256620738";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
<br />
Site by <a href="http://rohanmathur.uphero.com">Rohan Mathur</a> | <a href="http://m.brrsdhw.net16.net">Mobile Version</a> | &copy 2011 Rohan Mathur All Rights Reserved
</div>
</body>
</html>
			