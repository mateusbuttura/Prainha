<?php

require_once '../includes/configuration.php';

$userName = $_POST["user-name"];
$userPass = $_POST["user-pass"];
$criptSen = hash("whirlpool", $userPass);
@$rediURL = $_GET["url"];

$SQL = mysql_query("SELECT Usuario, Senha FROM administradores WHERE Usuario='$userName' AND Senha='$criptSen' ");
    
if(mysql_num_rows($SQL) != 0){
    
session_start();

$_SESSION['Usuario'] = $userName;
$_SESSION['Senha'] = $criptSen;

    
if(isset($rediURL)){

header("Location: ../rediURL");

} else {
    
    header("Location: ../inicial.php");
}

}else{
    header("Location: ../index.php");
}

?>