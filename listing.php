<?php
$file = fopen('line.txt', 'a+');
$c = fgetc($file);
fclose($file);
if($c=='1')
{
include('session.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
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
            <?php if(isset($_SESSION['login_user']) == true){?>
        	  <li><a href="upload.php" class="upload">Upload</a></li>
              <?php }?>
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
        	<a href="index.php"><img src="images/logo.png" alt=""  width="151" height="32"/></a>
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
        <!-- Search -->
        <div class="search">
        <form id="search" action="" method="post">
        	<input type="text" value="Enter keyword to search" id="searchBox" name="searchText" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
            <a  class="go"  name="click" onclick="document.getElementById('search').submit()">&nbsp;</a>
         
            </form>
               <?php
  if(isset($_POST['searchText'])) {$search = $_POST['searchText'];
  if($search=='Enter keyword to search') $search='';}
  else $search = '';
?>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Content Section -->
    <div id="content_sec">
    	<!-- Bread Crumb -->
        
    	<!-- Column 1 -->
        <div class="col1">
            <div class="allvideos_heading">
            	<h3>Search Result</h3>
                
            </div>
            <div class="clear"></div>
            <!-- White Section small -->
            <div class="clear"></div>
            <!-- Recent Videos -->
            <div class="recent_videos">
              <div class="clear"></div>
                <!-- Video Listing -->
                <ul class="display">
                <?php
				
				 try
{	
	$bdd = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root', '');
	$reponse = $bdd->query("select * from video ");
	while($video =  $reponse->fetch()){
$titre = $video['titre'];

if((stripos($titre, $search)!=false) or ($search=='')){
?>
                	<li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video1.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="<?php echo 'upload/'.$video['id'].'.mp4'; ?>" class="colr"><?php echo $titre; ?></a></h4>
                            <div class="clear"></div>
                            <div class="clear"></div>
                            <p class="txt">
                            	<?php echo $video['description']; ?>
                            </p>
                            <div class="clear"></div>
                            <div class="postedby" align="center">
                            	<p class="postbytxt">By: <a href="#"><?php echo $video['iduser']; ?></a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">0</a></p>
                            </div>
                            <div class="right">
                            	<p class="time"><?php echo $video['duree']; ?></p>
                            	<p class="date"><span><?php echo $video['date']; ?></span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        
                    </li>
 <?php
}}}catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>                 
                                
              </ul>
          </div>
                        <!-- END -->
                        <div class="clear"></div>
      </div>
  </div>
                <div class="clear"></div>
</div>
            <div class="clear"></div>
        	<!-- Advertisment -->
        	<div class="adv"></div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<!-- Footer --><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div class="clear"></div>
<div id="copyrights">
  <div class="inner">
   	<p>Copyright © 2015 Streaming. All rights reserved.</p>
	</div>
</div>
</body>
</html>
