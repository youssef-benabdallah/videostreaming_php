<?php
$file = fopen('line.txt', 'a+');
$c = fgetc($file);
fclose($file);
if($c=='1')
{
include('session.php');
}
else{header("location: index.php");}
include('phpupload.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload</title>
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
               
			   <li><?php
if(isset($_SESSION['login_user']) == true){
	 echo 'Welcome : ';echo $login_session;?>
      <li><a href="logout.php">Logout</a></li><?php }      
	 else{ ?>  <li><a href="login.php">Login</a></li>
	 <li><a href="signup.php">Signup</a></li><?php }; ?>             </li>   
            </ul>
        </div>
        <!-- Top Section right Links -->
        <div class="links_icons">
        	<ul>
        	                 <li><?php
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
        	<a href="index.html"><img src="images/logo.png" alt=""  width="151" height="32"/></a>
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
    <br /><br /><br /><br /><br /><br /><br /><br />
    <!-- Content Section -->
    <div id="content_sec">
    	<!-- Bread Crumb -->
       
   	  <!-- Column 1 -->
        <div class="col1">
            <div class="contact">
            	<h2 class="heading">Upload Video</h2>
                <div class="getintouch">
                	
                    
                  <h4>Fill the text fields</h4>
                  <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" value="Title" id="nameBox" name="title" onblur="if(this.value == '') { this.value = 'Title'; }" onfocus="if(this.value == 'Title') { this.value = ''; }" class="bar left" />
                    <input type="text" value="Director" id="companyBox" name="director" onblur="if(this.value == '') { this.value = 'Director'; }" onfocus="if(this.value == 'Director') { this.value = ''; }" class="bar right" />
                    <textarea name="description" cols="" rows="">Description</textarea>
                    Category : <select name="category" id="category">
                      <option value="Film">Film</option>
                      <option value="Game">Game</option>
                      <option value="Sport">Sport</option>
                      <option value="Music">Music</option>
                      <option value="Animals">Animals</option>
                    </select>
                    
                    <br />
                    <br />
                    <input type="file" name="userfile"  placeholder="Choose Your Video" accept="video/*">
                    <br /><br />
                    <input name="submit" type="submit" value=" Upload " class="buttonone">
                 <span>   <?php echo $mess;?></span>
                  
                  </form>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    <!-- Column 2 --></div>
</div>
<div class="clear"></div>
<br /><br /><br /><br /><br /><br />
<!-- Footer -->
<div id="footer">
	<div class="inner">
    	<!-- Top button Section -->
       
        <div class="clear"></div>
        <!-- Footer - Search - Share -->
        <div class="clear"></div>
    <!-- Footer content --></div>
</div>
<div class="clear"></div>
<div id="copyrights">
	<div class="inner">
    	<p>Copyright © 2015 Video. All rights reserved.</p>
        <div class="designdby">
        	<p>Designed By: </p>
            <a href="#" class="chimplogo">&nbsp;</a>
        </div>
    </div>
</div>
</body>
</html>
