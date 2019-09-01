<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="arquivoCss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="arquivo1.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="arquivo1.js" type="text/javascript"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Requisições Assincronas</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra">
            <span class="sr-only">NAVIGATION</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h4 class="navbar-brand">Requisições Assincronas com JQuery</h4>
        </div>
        <div class="collapse navbar-collapse" id="barra">
          <ul class="nav navbar-nav navbar-right">
            <li><button type="button" class="btn btn-primary li" id="pagina_1">Home</button></li>
            <li><button type="button" class="btn btn-danger li" id="pagina_2">Quem Somos</button></li>
            <li><button type="button" class="btn btn-warning li" id="pagina_3">Galeria</button></li>
            <li><button type="button" class="btn btn-success li" id="pagina_4">Contato</button></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="div_conteudo"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>