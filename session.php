<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
session_start();
if($_SESSION['login_user']){
$user_check=$_SESSION['login_user'];
$reponse = $bdd->query("select * from login where username='$user_check'");
$row = $reponse->fetch();
$login_session = $row['username'];
}
if(!isset($login_session)){
$bdd=null;
//header('Location: index.php'); 
}
?>