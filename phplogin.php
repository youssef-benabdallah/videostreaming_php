<?php
session_start();
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$username = stripslashes($username);
$password = stripslashes($password);
$reponse = $bdd->query("select * from login where password='$password' AND username='$username'");
$rows = $reponse->rowCount();
if ($rows == 1) {
$_SESSION['login_user']=$username;
$file = fopen('line.txt', 'w'); 
fwrite($file,"1");
fclose($file);
header("location: index.php"); 
} else {
$error = "Username or Password is invalid";
}
$bdd = null; 
$reponse->closeCursor(); 
}
}
?>