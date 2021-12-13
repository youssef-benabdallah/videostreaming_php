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
<title>Home</title>
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
</style><![endif]--><!-- that's IT-->
<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>
<body>
<span class="biglines">&nbsp;</span>
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
                    <li><a href="listing.php" class="staticlinks">Videos</a></li>
                    
                    <li>
                   <form id="change" action="" method="post">
                   <a href="#" class="staticlinks">
                    Category : 
                    
                    <select name="category" id="category" onchange="document.getElementById('change').submit()">
                      <option value="All" <?php if(isset($_POST['category'])) 
					  {$category = $_POST['category'];if($category=='All') {?>selected="selected"<?php }}?>>All</option>
                      <option value="Film" <?php if(isset($_POST['category'])) 
					  {$category = $_POST['category'];if($category=='Film') {?>selected="selected"<?php }}?>>Film</option>
                      <option value="Game" <?php if(isset($_POST['category'])) 
					  {$category = $_POST['category'];if($category=='Game') {?>selected="selected"<?php }}?>>Game</option>
                      <option value="Sport" <?php if(isset($_POST['category'])) 
					  {$category = $_POST['category'];if($category=='Sport') {?>selected="selected"<?php }}?>>Sport</option>                      <option value="Music" <?php if(isset($_POST['category'])) 
					  {$category = $_POST['category'];if($category=='Music') {?>selected="selected"<?php }}?>>Music</option>
                      <option value="Animals" <?php if(isset($_POST['category'])) 
					  {$category = $_POST['category'];if($category=='Animals') {?>selected="selected"<?php }}?>>Animals</option>
</select></a>
                    <?php
  if(isset($_POST['category'])) $category = $_POST['category'];
  else $category = '';
?>
</form></li>
                   
                  
                </ul>
            	<div class="clear"></div>
            </div>
        </div>
        <!-- Search -->
        <div class="search">
        	<input type="text" value="Enter keyword to search" id="searchBox" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
            <a href="#" class="go">&nbsp;</a>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Banner -->
    <div id="banner">
    	<div id="slider2" class="leftsecbanner">
 <?php           try
{
	
	$bdd = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root', '');
	if($category=='')
	$reponse = $bdd->query("select * from video where value='1'");
else
	$reponse = $bdd->query("select * from video where value='1' AND categorie='$category'");
	while ($donnees = $reponse->fetch())
{
     ?>       <div class="contentdiv">
            
                <video onclick="if (this.paused){this.play();}else this.pause();" 
                
                 id="myVideo" controls width="620" height="348"  controls="controls">
  <source id="source" src="<?php echo 'upload/'.$donnees['id'].'.mp4'?>" type="video/mp4" >
</video>
            </div>
       <?php } }
	   catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>     
        </div>
        <div id="paginate-slider2">
        	<div class="usual">
                <ul class="idTabs">
                  <li><a href="#idTab1" class="selected"><span>Related Video</span></a></li>
                </ul>
                <div id="idTab1" class="tabssection">
                    <div class="css-scrollbar simple">
                    <?php 
				try
{
	$bdd = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root', '');
	if($category=='')
	$reponse = $bdd->query("select * from video where value='1'");
else
	$reponse = $bdd->query("select * from video where value='1' AND categorie='$category'");
	while ($donnees = $reponse->fetch())
{
   ?>

                    	<a href="login.php" class="toc" onclick="window.location='login.php';">
                        	<span class="thumb"><img src="images/video_small6.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title"><?php 
	 echo $donnees['titre'];
	 ?>

</span>
                                <span class="time"> <?php echo $donnees['duree'];?></span>
                                <span class="channel"><?php echo $donnees['realisateur'];?></span>
                            </span>
                        </a>
                       <?php }}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
} ?>
                    </div>
                </div>
              
               
          	</div>
			<div class="clear"></div>
        </div>
        <script type="text/javascript" src="js/banner.js"></script>
    </div>
                  
                  
   <script type="text/javascript">
    var player = document.getElementById('myVideo');
	 var mp4Vid = document.getElementById('source');
   function videoControl()
   {
  
      player.pause();

      // Now simply set the 'src' attribute of the mp4Vid variable!!!!
      // (...using the jQuery library in this case)

      $(mp4Vid).attr('src', "C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/grey/upload/1.mp4");

      player.load();
      player.play();
   }
   var vid = document.getElementById("myVideo");

function myFunction() { 
    isSupp = vid.canPlayType("video/mp4");
    if (isSupp == "") {
        vid.src = "/upload/4.mp4";
    } else {
        vid.src = "/upload/5.mp4";
    }
    vid.load();
}
	function playPause() {
    if (vid.paused)
        vid.play();
    else
        vid.pause();

}
 </script>
 
                <div class="inforamtion">
                
                  <?php 
				try
{
	$bdd = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root', '');
	if(strlen($category)==0)
	$reponse = $bdd->query("select * from video where value='1'");
else
	$reponse = $bdd->query("select * from video where value='1' AND categorie='$category'");
	while ($donnees = $reponse->fetch())
{
   ?>
   <br />
                	<h3> Desciption </h3>
                    <ul>
                    	<li> <?php echo $donnees['description']; ?></li>
						</ul>
                       <br />    
                	<h3> Uploader </h3>
                    <ul>
                    	<li> <?php echo $donnees['iduser']; ?></li>
						</ul>
                       <br />   
                        
                	<h3> Date Upload </h3>
                    <ul>
                    	<li> <?php echo $donnees['date']; ?></li>
						</ul>
                         <?php
}}catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}?>                      
     
     <button onclick="playPause()">play</button>                 
                    
                </div>
</body>
</html>
