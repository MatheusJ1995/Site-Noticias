<!DOCTYPE html>
<html lang="pt-br">
    <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=urf-8" />
    <script language="JavaScript" src="jquery-1.8.2.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="index.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel="StyleSheet">
    
    <title>Cedup Noticias</title>
    <!-- Fonte -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    </head>
        <body class="text-center">
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
          
                    <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul id="menu_ul" class="navbar-nav me-auto">
                            <li id="lihome" class="nav-item active">
                                <a id="_home" class="nav-link" href="#">CEDUP NOTICIAS <span class="sr-only">Noticias</span></a>
                            </li>
                             <li id="cadNot" class="nav-item">
                                <a id="_cad" class="nav-link active" href="#">Cadastrar Noticias</a>
                             </li>
                            <li id="ultNot" class="nav-item">
                                <a id="_ult" class="nav-link active" href="#">Ultimas Noticias</a>
                            </li>
                            <li id="todNot" class="nav-item">
                                 <a id="_tod" class="nav-link active" href="#">Todas as Noticias</a>
                            </li>
                        </ul>
                    </div>
            </div>
          </nav>            
    </header>
    
    <section id="centro">
    <section id="menu_home" style="display: ;">
    <h1>Noticias</h1>
    </section>
    <section id="menu_cad" style="display:none ;">
    <h1>Cadastrar Noticias</h1>
    <?php
        include("cadNoticia.php")
    ?>
    </section>
    <section id="menu_ult" style="display:none ;">
    <h1>Ultimas Noticias</h1>
        <?php
            include("ultNoticias.php");
        ?>
    </section>
    <section id="menu_tod" style="display:none ;">
    <h1>Todas as Noticias</h1>
        <?php
            include("pesquisarTodas.php");
        ?>
    </section>
    <section id="menu_sobre" style="display:none ;">
    <h1>Sobre</h1>
        <?php
            include("sobre.php");
        ?>
    </section>
 </section>

</body>
</html>