<?php
$error=''; 
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$surname=$_POST['surname'];
$username=$_POST['username'];
$password=$_POST['password'];

echo $name;
echo $surname;
echo $username;
echo $password;
if ((strlen($username)==0) ||(strlen($password)==0)
|| (strlen($name)==0)|| (strlen($surname)==0)) {
$error = "Champs is invalid";
}
else{
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=company;charset=utf8', 'root', '');
	$reponse = $bdd->query("select * from login where username='$username'");
	$rows = $reponse->rowCount();
    if ($rows == 1) {
		$error = "Email is already exists";
	}
	else
	{
	$reponse = $bdd->query("INSERT INTO login values(NULL,'$username','$password','$name','$surname')");
	$bdd=null;
    $reponse->closeCursor(); 
	include('phplogin.php'); 
	}
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
}
}
?>
