<!doctype html>
<html>
<head>
</head>
<body>
	<form action="cadastrar.php" method="post">
<div class="card mb-3">
  <h3 class="card-header"><font style=""><font style="vertical-align: inherit;">Titulo da noticia:</font></font></h3>
  <input name="tituloNoticia" type="text" class="form-control" rows="3">
  <div class="card-body">
    <h5 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Subtitulo:</font></font></h5>
    <input name="subtituloNoticia" type="text" class="form-control" id="exampleTextarea" rows="3">
  </div>
  <div class="form-group">
      <label for="formFile" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Imagem da Noticia:</font></font></label>
      <input name="imagemNoticia" class="form-control" type="file" id="formFile">
    </div>
  </svg>
  <div class="card-body">
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Texto da Noticia a baixo:</label>
      <input name="textoNoticia" type="text" class="form-control" id="exampleTextarea" rows="3">
    </div>
  </div>
  <div class="card-footer text-muted">
  <font style="vertical-align: inherit;"></font>
  <font style="vertical-align: inherit;"></font>
  <input name="dataNoticia" type="date">
</div>
<button type="submit" value="Cadastrar" class="btn btn-primary">Salvar</button>
</div>
</form>
</body>
</html>