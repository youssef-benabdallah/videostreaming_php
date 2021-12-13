<?php
$mess = '';
if (isset($_POST['submit'])) {   
 $tmp_file = $_FILES['userfile']['tmp_name'];
    if( !is_uploaded_file($tmp_file) )
    {
        $mess = 'Please Select Your Video.';
    }
else{	
$title = $_POST['title'];

if($title== 'Title')
{
$mess = 'Give a title for your video.';
}else{
 $infosfichier = pathinfo($_FILES['userfile']['name']);
$extension_upload = $infosfichier['extension'];

	 if( !strstr($extension_upload, 'mp4')&& !strstr($extension_upload, 'MP4') && !strstr($extension_upload, '3gp') && !strstr($extension_upload, 'mpg') && !strstr($extension_upload, 'wmv') )
    {
         $mess = 'Please Check Your Video.';
    }
	else
	{    
	
	try
{
	$bdd = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root', '');
	$uploaddir = 'C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/grey/upload/';   	
	$reponse = $bdd->query("select * from video");
$rows = $reponse->rowCount()+1;
$uploadfile = $uploaddir . $rows .'.'.$extension_upload;
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
$director = $_POST['director'];
$description = $_POST['description'];
$category = $_POST['category'];
$date = date('Y-m-d');
require_once('getID3-1.9.9/getid3/getid3.php');
$getID3 = new getID3;
$ThisFileInfo = $getID3->analyze($uploadfile);
$duration = $ThisFileInfo['playtime_string'];
	   $reponse = $bdd->query("INSERT INTO video values('$rows','$title','$director','$duration','$date','$description','$category','$login_session','1')");    
$bdd = null;                                     
$mess = "Your Video is uploaded. " ;  
} else {                          
$mess = 'Upload Error';
}                      
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

}
}
}
}


?>