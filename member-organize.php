<?php
	require_once('auth.php');
        require_once('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BRRSD Homework - Member Home</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<br />
    <div id="main">
          <div id="header">
                <div id="headerTitle"><img src="img/logo.png">&nbspHW</div>
          </div>
<div id="navcontainer">
<ul id="navlist">
<li><a href="member-index.php">Homework Home</a></li>
<li><a href="member-addnew.php">Add A New Teacher</a></li>
<li><a href="member-organize.php">Organize Teacher List</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div id="content">
<div id="columnOne">
<br />
<p>Delete a Teacher</p>
<div id="content">
<form action="delete.php" method="post">
Teacher Name:
<input type="text" name="name" id="name" /><br />
<input type="submit" />
</form>
<br />
<p>Be sure to type the teacher's name exactly like</p>
<p>it is displayed on the homework screen!</p>
</div>
</div>
<div id="columnTwo">
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
Site by <a href="http://rohanmathur.uphero.com">Rohan Mathur</a> | <a href="http://m.brrsdhw.net16.net">Mobile Version</a> | &copy 2011 Rohan Mathur
</div>
</body>
</html>