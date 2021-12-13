<?php

if (isset($_POST['submit'])) {                
  $target_dir = "C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/grey/upload/";

$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;                  
   if (file_exists($target_file)) {
                  
echo "fichier_existant !";
                  
$uploadOk = 0;
                  
} 

                
if ($uploadOk == 0) {
                    
echo "téléchargement échoué";
// if ok, upload file
                
} else {
                    
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     
                         
echo "le fichier ". basename( $_FILES["fileToUpload"]["name"]). " aetetelecharge. ".$target_file;
                    
} else {
                          
echo "telechargement_echoue";
                    
}
                
}             
}
?>