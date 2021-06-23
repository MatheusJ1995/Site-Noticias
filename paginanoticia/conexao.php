<?php
$link = mysqli_connect("localhost", "root", "mudar@123", "noticias"); //localhost é o link da base de dados.

if(!$link) {
    echo "Error: Falha ao conectar-se ao banco de dados MySQL." . PHP_EOL;
    echo "Debuggin errno" . mysqli_connect_errno() . PHP_EOL;
    echo "Debuggin error" . mysqli_connect_error() . PHP_EOL;
    exit;
}
//echo "Sucesso: Sucesso ao conectar-se ao banco de dados MySQL." . PHP_EOL;
?>