<?php
include("conexao.php");

    $id=$_POST["idNoticia"];
    $tituloNoticia=$_POST["tituloNoticia"];
    $subtituloNoticia=$_POST["subtituloNoticia"];
    $imagemNoticia=$_POST["imagemNoticia"];
    $textoNoticia=$_POST["textoNoticia"];
    $dataNoticia=$_POST["dataNoticia"];

    $sql="update noticia set tituloNoticia='$tituloNoticia', subtituloNoticia='$subtituloNoticia', imagemNoticia='$imagemNoticia',
    textoNoticia='$textoNoticia', dataNoticia='$dataNoticia' where idNoticia='$id';";
    
    if(mysqli_query($link, $sql)){
        echo "Alteração Realizada";
    }else{
        echo "Erro: ".$sql."<br>".mysqli_error($link);
    }
    mysqli_close($link);
?>