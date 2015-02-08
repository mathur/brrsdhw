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
<div class="content">
To the right you can find all your teachers that you have added via the "Add More Teachers" link above. You may also go to the "Organize Homework List" link above to reorder and remove your teacher list.
</div>
<br />
<p>News:</p>
<div class="content">
6/24/11 : The Desktop interface is officially released to the public... trying to fix everything now that summer break is in... adding teachers, organizing lists, and homework previews are coming soon.
</div>
</div>
<div id="columnTwo">


<?php
$name= $_SESSION['SESS_FIRST_NAME'];
// Connects to your Database 
mysql_connect("mysql11.000webhost.com", "a7196206_data", "password") or die(mysql_error()); 
mysql_select_db("a7196206_data") or die(mysql_error()); 
$data = mysql_query("SELECT * FROM Teachers WHERE member_id = '$name'") 
or die(mysql_error()); 

while($info = mysql_fetch_array( $data )) 
{ 
Print "</table>";
Print "<br />";
Print "<table border=0 width=297px>";
Print "<tr>"; 
Print "<th width=175px>Teacher Name:</th> <td>".$info['Teacher'] . "</td></tr> ";
Print "<tr>";
Print "<th width=175px>Homework Page:</th> <td><a href=".$info['Homework'] . ">Link</a></td></tr>";
Print "<tr>";
Print "<th width=175px>Subject:</th> <td>".$info['Subject'] . "</td></tr> ";  
} 
Print "</table>"; 
?>
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
