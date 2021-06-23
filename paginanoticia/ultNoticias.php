<?php
include("conexao.php");

$result_noticia = "select * from noticia ORDER BY idnoticia desc LIMIT 5";
$resultado_noticia = mysqli_query($link, $result_noticia);

echo "<table>";
    echo "<tr>";
        echo "<td>Noticia</td>";
        echo "<td>Titulo</td>";
        echo "<td>Subtitulo</td>";
        echo "<td>Imagem</td>";
        echo "<td>Texto</td>";
        echo "<td>Data</td>";
        
    echo "</tr>";
while($rows_user = mysqli_fetch_array($resultado_noticia)){
    @$id=$rows_user["idNoticia"];
echo "<tr>";
        echo "<td>".$rows_user['idNoticia']."</td>";
        echo "<td>".$rows_user['tituloNoticia']."</td>";
        echo "<td>".$rows_user['subtituloNoticia']."</td>";
        echo '<td><img src="' .  $rows_user['imagemNoticia'] . '"  /></td>';
        echo "<td><textarea>".$rows_user['textoNoticia']."</textarea></td>";
        echo "<td>".$rows_user['dataNoticia']."</td>";
        echo "<td><a href='alterar.php?id=$id'>Editar</a></td>";
        echo "<td><a href='apagar.php?id=$id'>Apagar</a></td>";

echo "</tr>";
}
echo "</table>";
?>