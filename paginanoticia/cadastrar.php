<?php
include("conexao.php");

$tituloNoticia=$_POST["tituloNoticia"];
$subtituloNoticia=$_POST["subtituloNoticia"];
$imagemNoticia=$_POST["imagemNoticia"];
$textoNoticia=$_POST["textoNoticia"];
$dataNoticia=$_POST["dataNoticia"];

$sql="insert into noticia (tituloNoticia, subtituloNoticia, imagemNoticia, textoNoticia, dataNoticia) 
values ('$tituloNoticia', '$subtituloNoticia', '$imagemNoticia', '$textoNoticia', '$dataNoticia');";

if(mysqli_query($link, $sql)){
    echo "Cadastro Realizado";

} else{
    echo "Erro:".$sql."<br>" .mysqli_error($link);
}

mysqli_close($link);

?>