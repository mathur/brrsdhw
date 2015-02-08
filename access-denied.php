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
You are not allowed to access this page. Please log in first.
<br />
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