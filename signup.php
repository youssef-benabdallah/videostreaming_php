<?php
include('phpsingup.php');
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signup</title>
<!--// Stylesheets //-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
<link href="css/scrollbar.css" rel="stylesheet" type="text/css" />
<!--// Javascript //-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/contentslider.js"></script>
<script type="text/javascript" src="js/jquery.1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.lint.js"></script>
<script type="text/javascript" src="js/jquery.scroll.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="js/switch.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400-Myriad_Pro_700-Myriad_Pro_italic_400-Myriad_Pro_italic_700.font.js"></script>
<!--[if lte IE 7]><style>.comments .commentlinks{margin-left:250px;}
.comments .singlebtn{margin-left:380px;}
.comments ul li:hover .commentlinks{display:inline-block;}
.comments ul li.level2:hover .commentlinks{margin-left:210px;}
.comments ul li.level2:hover .singlebtn{margin-left:340px;}
</style><![endif]-->
<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>
<body class="bg2">
<span class="smalllines">&nbsp;</span>
<!-- Wrapper -->
<div id="wrapper_sec">
	<!-- Top Section -->
    <div class="top_sec">
    	<!-- Top Section Left Links -->
        <div class="toplinks">
        	<ul>
            	<li class="first"><a href="index.php">Home</a></li>
            	 <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <!-- Top Section right Links -->
        <div class="links_icons">
        	<ul>
          <li>  <?php
			  date_default_timezone_set('Europe/Paris');
			   echo date('H:m:s');?></li>
               <li><?php echo date('d/m/Y');?></li>
        	</ul>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Header -->
    <div id="masthead">
    	<!-- Logo -->
        <div class="logo">
        	<a href="index.php"><img src="images/logo.png" alt="" width="151" height="32" /></a>
        </div>
        <!-- Navigation -->
        <div class="navigation">
        	<div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.php" class="staticlinks">Home</a></li>
                    <li><a href="listing.php" class="staticlinks">Videos search</a></li>
                </ul>
            	<div class="clear"></div>
            </div>
        </div>
    <!-- Search --></div>
    <div class="clear"></div>
<!-- Content Section --></div>
<div class="clear"></div>
<!-- Footer -->
<div id="footer">
	<div class="inner">
    	<!-- Top button Section -->
        <div class="topbutonsec"><a href="#">Signup</a></div>
        <div class="clear"></div>
        <!-- Footer - Search - Share -->
        <div class="foot_search_share">
        	<!-- Footer - search --><!-- Footer -share -->
            <div class="share">
            
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <!-- Footer content -->
        <div class="footer_cont">
        	<!-- Footer sec1 --><!-- Footer sec2 --><!-- Footer sec3 -->
<div class="getintouch">
                	<h3 class="colr">Signup :</h3>
                    <br />
                    <form action="" method="post">
        <input type="text" value="Name" id="name" name="name" onblur="if(this.value == '') { this.value = 'Name'; }" onfocus="if(this.value == 'Name') { this.value = ''; }" placeholder="Name" class="bar left" />
                    <br />
                     <br />
                      <br />
                      <input type="text" value="Surname" id="surname" name="surname" onblur="if(this.value == '') { this.value = 'Surname'; }" onfocus="if(this.value == 'Surname') { this.value = ''; }" placeholder="Surname" class="bar left" />
                    <br />
                     <br />
                      <br />
                      <input type="email" value="Email" id="username" name="username" onblur="if(this.value == '') { this.value = 'Email'; }" onfocus="if(this.value == 'Email') { this.value = ''; }" placeholder="Email" class="bar left" />
                    <br />
                     <br />
                      <br />
                    <input type="password" value="Password" id="password" name="password" onblur="if(this.value == '') { this.value = 'Password'; }" onfocus="if(this.value == 'Password') { this.value = ''; }" placeholder="Password" class="bar left" />
                     <br />
                     <br />
                      <br />
                    <input name="submit" type="submit" value=" Login " class="buttonone">
                    <span><?php echo $error; ?></span>
                    </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>
