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
<p>Instructions:</p>
<div id="content">
<ul>
<li>For "Teacher Name", enter the name of the teacher (ex. Mr. Doe).</li><br />
<li>For "Homework Page", enter the Homework Hero page or OnCourse homework main page link (ex. http://www.homeworkhero.com/cgi-bin/aahero05/acceptit20/display.cgi?CSEMONCHE+nj_brrhs03). This will be the page that opens up when you click on the "link" on the main homework page.</li><br />
<li>For "Subject", enter the subject that the teacher teaches (ex. Algebra 2 Honors).</li>
</ul>
</div>
</div>
<div id="columnTwo">
<br />
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
<br />
Site by <a href="http://rohanmathur.uphero.com">Rohan Mathur</a> | <a href="http://m.brrsdhw.net16.net">Mobile Version</a> | &copy 2011 Rohan Mathur
</div>
</div>
</body>
</html>