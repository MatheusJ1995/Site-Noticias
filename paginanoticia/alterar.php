<?php
    include("conexao.php");

    $id = $_GET["id"];

    $sql = "SELECT * FROM noticia WHERE idNoticia=$id limit 1";
    $resultado_user = mysqli_query($link, $sql);
    $rows_user = mysqli_fetch_array($resultado_user);

    $id=$rows_user["idNoticia"];
    $tituloNoticia=$rows_user["tituloNoticia"];
    $subtituloNoticia=$rows_user["subtituloNoticia"];
    $imagemNoticia=$rows_user["imagemNoticia"];
    $textoNoticia=$rows_user["textoNoticia"];
    $dataNoticia=$rows_user["dataNoticia"];

?>
<!doctype html>
<html>
<head>  
    
    <script language="JavaScript" src="jquery-1.8.2.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="index.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel="StyleSheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body class="text-center">
<form action="altera.php" method="post">
<div class="card mb-3">
<h3 class="card-header"><font style=""><font style="vertical-align: inherit;">ID:</font></font></h3>
<input value="<?php echo "$id" ?>" type=text name=idNoticia readonly="readonly"><br>
</div>
<div class="card mb-3">
  <h3 class="card-header"><font style=""><font style="vertical-align: inherit;">Titulo da noticia:</font></font></h3>
  <input value="<?php echo "$tituloNoticia" ?>" name="tituloNoticia" type="text" class="form-control" rows="3">
  </div>
  <div class="card-body">
    <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subtitulo:</font></font></h5>
    <input value="<?php echo "$subtituloNoticia" ?>" name="subtituloNoticia" type="text" class="form-control" id="exampleTextarea" rows="3">
  </div>
  <div class="form-group">
      <label for="formFile" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Imagem da Noticia:</font></font></label>
      <input value="<?php echo "$imagemNoticia" ?>" name="imagemNoticia" class="form-control" type="file" id="formFile">
    </div>
  </svg>
  <div class="card-body">
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Texto da Noticia a baixo:</label>
      <input value="<?php echo "$textoNoticia" ?>" name="textoNoticia" type="text" class="form-control" id="exampleTextarea" rows="3">
    </div>
  </div>
  <div class="card-footer text-muted">
  <font style="vertical-align: inherit;"></font>
  <font style="vertical-align: inherit;"></font>
  <input value="<?php echo "$dataNoticia" ?>"  name="dataNoticia" type="date">
</div>
<button type="submit" value="Alterar" class="btn btn-primary">Salvar</button>
</div>
</form>
</body>
</html>