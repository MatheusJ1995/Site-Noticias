<?php
include("conexao.php");

    $id=$_GET["id"];

    $sql="delete from noticia where idNoticia='$id';";
    
    if(mysqli_query($link, $sql)){
        echo "Exclusao Realizada";
    }else{
        echo "Erro: ".$sql."<br>".mysqli_error($link);
    }
    mysqli_close($link);
?>