<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	$file = fopen('line.txt', 'w'); 
fwrite($file,"0");
fclose($file);
header("Location: index.php"); // Redirecting To Home Page
}
?>