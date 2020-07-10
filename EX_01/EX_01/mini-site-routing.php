<!DOCTYPE html>
<html>
<head>
<title>mini-site-routing</title>
<meta charset="utf-8">
 <head>
 </head>
    <body>
    <nav>
 <a href="http://localhost:8888/ISCC%202020/ISCC-2020-J12/EX_01/mini-site-routing.php?page=1">Accueil!</a>
 <a href="http://localhost:8888/ISCC%202020/ISCC-2020-J12/EX_01/mini-site-routing.php?page=2">Page 2</a>
 <a href="http://localhost:8888/ISCC%202020/ISCC-2020-J12/EX_01/mini-site-routing.php?page=3">Page 3</a>
 <a href="http://localhost:8888/ISCC%202020/ISCC-2020-J12/EX_01/mini-site-routing.php?page=connexion">Connexion</a>
 <?php

if($_COOKIE['id']){
    echo '<a href="http://localhost:8888/ISCC%202020/ISCC-2020-J12/EX_01/mini-site-routing.php?page=admin">Admin</p>';
}

?>
 </nav>
 <form enctype="multipart/form-data" action="admin.php" method="post">
 <input type="hidden" name="MAX_FILE_SIZE" value="2097152"/>
 <input name="userfile" type="file" accept="image/x-png,image/jpg,image/jpeg"/>
 <input name="description" type="text" value="text"/>
 <input name="titre" type="text" value="text"/>
 <input type="submit" value="Envoyer le fichier"/>
 </form>
<?php
if($_GET['page'] == '1')
{
    echo '<h1>Accueil !</h1>';
}
if($_GET["page"] == "2")
{
    echo '<h1>Page 2 </h1>';
}
if($_GET["page"] == "3")
{
    echo '<h1>Page 3 </h1>';
}
if($_GET['page'] == 'connexion')
{
echo '<h1>Connexion</h1';
include('connexion.php');
}

?>
</body>
    
    <footer>
    <?php
    session_start();
    if(isset($_SESSION["id"])) {
    echo '<p> Login : ' .$_SESSION["id"]. '</p>';
}

elseif(!isset($_COOKIE['id'])){
    session_start();
    $_SESSION['id'] = $_POST['login'];
    $_SESSION['mdp'] = $_POST['password'];
}
else{
    header('http://localhost:8888/ISCC%202020/ISCC-2020-J12/EX_01/mini-site-routing.php?page=connexion');
}

?>

    </footer>
    </html>

    