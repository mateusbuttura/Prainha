<?php

$Usuario = $_SESSION["Usuario"];
$Senha = $_SESSION["Senha"];

if(!(isset($Usuario) && isset($Senha))){
   
    $url = explode("/", $_SERVER["REQUEST_URI"]);
    
    
    header("Location: index.php?url=$url[3]");
    
} else if(isset($Usuario) && isset($Senha)){
        
    $SQL = mysql_query("SELECT Usuario, Senha FROM administradores WHERE Usuario='$Usuario' AND Senha='$Senha'");
        
        if(mysql_num_rows($SQL) == 0){
            
            echo "<script>alert(\"Area Restrita\");</script>";
            header("Location: ../index.php");
        }
        
    }
    
?>
