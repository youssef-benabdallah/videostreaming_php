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
<title>Video 1</title>
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
            	<li class="first"><a href="index.html">Home</a></li>
               
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
        	<a href="index.html"><img src="images/logo.png" alt="" /></a>
        </div>
        <!-- Navigation -->
        <div class="navigation">
        	<div id="smoothmenu1" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.html" class="staticlinks">Accueil</a></li>
                    <li><a href="listing.html" class="staticlinks">Videos</a></li>
                    <li></li>
                    <li>
                      <ul>
                        <li><a href="blog_post.html">Blog Post</a></li>
                      	</ul>
                    </li>
                    <li>
                      <ul>
                        <li><a href="index.html">Accueil</a></li>
                            <li><a href="listing.html">Listing</a></li>
                            <li><a href="detail.html">Video Detail</a></li>
                          
                            <li><a href="blog_post.html">Blog Post</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="static.html">About Us</a></li>
                      	</ul>
                    </li>
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
            
            
            
            <div class="contentdiv">
              


<video controls width="620" height="348">
  <source src="<?php echo 'Crystallize - Lindsey Stirling (Dubstep Violin Original Song)_(1080p).mp4'?>" type="video/mp4" >
</video>

            </div>
        </div>
        <div id="paginate-slider2">
        	<div class="usual">
                <ul class="idTabs">
                  <li><a href="#idTab1" class="selected"><span>New</span></a></li>
                </ul>
                <div id="idTab1" class="tabssection">
                    <div class="css-scrollbar simple">
                    	<a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small6.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Don't Stop The Music</span>
                                <span class="time">03:54</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small2.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Enrique Iglesias - I Like It </span>
                                <span class="time">04:04</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small3.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">ENRIQUE IGLESIAS - Bailamos </span>
                                <span class="time">03:52</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small4.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Rihanna - Only Girl (In The World) </span>
                                <span class="time">04:11</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small5.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Tonight (I'm Lovin' You)</span>
                                <span class="time">04:59</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small6.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Don't Stop The Music</span>
                                <span class="time">03:54</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small2.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Enrique Iglesias - I Like It </span>
                                <span class="time">04:04</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small3.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">ENRIQUE IGLESIAS - Bailamos </span>
                                <span class="time">03:52</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small4.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Rihanna - Only Girl (In The World) </span>
                                <span class="time">04:11</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small5.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Tonight (I'm Lovin' You)</span>
                                <span class="time">04:59</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div id="idTab2" class="tabssection">
                    <div class="css-scrollbar simple">
                    	<a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small1.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Rude Boy</span>
                                <span class="time">03:46</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small1.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Rude Boy</span>
                                <span class="time">03:46</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small2.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Enrique Iglesias - I Like It </span>
                                <span class="time">04:04</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small3.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">ENRIQUE IGLESIAS - Bailamos </span>
                                <span class="time">03:52</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small4.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Rihanna - Only Girl (In The World) </span>
                                <span class="time">04:11</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small1.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Rude Boy</span>
                                <span class="time">03:46</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small1.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Rude Boy</span>
                                <span class="time">03:46</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small2.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Enrique Iglesias - I Like It </span>
                                <span class="time">04:04</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small3.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">ENRIQUE IGLESIAS - Bailamos </span>
                                <span class="time">03:52</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small4.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Rihanna - Only Girl (In The World) </span>
                                <span class="time">04:11</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div id="idTab3" class="tabssection">
                    <div class="css-scrollbar simple">
                    	<a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small5.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Tonight (I'm Lovin' You)</span>
                                <span class="time">04:59</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small6.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Don't Stop The Music</span>
                                <span class="time">03:54</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small1.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Rude Boy</span>
                                <span class="time">03:46</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small2.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Enrique Iglesias - I Like It </span>
                                <span class="time">04:04</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small3.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">ENRIQUE IGLESIAS - Bailamos </span>
                                <span class="time">03:52</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small5.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Tonight (I'm Lovin' You)</span>
                                <span class="time">04:59</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small6.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Don't Stop The Music</span>
                                <span class="time">03:54</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                        	<span class="thumb"><img src="images/video_small1.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">Rihanna - Rude Boy</span>
                                <span class="time">03:46</span>
                                <span class="channel">RihannaVEVO</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small2.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">Enrique Iglesias - I Like It </span>
                                <span class="time">04:04</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                        <a href="#" class="toc">
                            <span class="thumb"><img src="images/video_small3.gif" alt="" /></span>
                            <span class="desc">
                                <span class="title">ENRIQUE IGLESIAS - Bailamos </span>
                                <span class="time">03:52</span>
                                <span class="channel">Enrique Iglesias</span>
                            </span>
                        </a>
                    </div>
                </div>
          	</div>
			<div class="clear"></div>
        </div>
        <script type="text/javascript" src="js/banner.js"></script>
    </div>
                  
                <div class="inforamtion">
                	<h3>Inforamtion</h3>
                    <ul>
                    	<li><a href="#">Help</a></li>
                        <li><a href="#">Imprint</a></li>
                        <li><a href="#">Copyright Agent</a></li>
                    </ul>
                </div>
</body>
</html>
