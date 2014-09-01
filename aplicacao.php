<?php 
  session_start();
  if(!isset($_SESSION['logado'])){
    header("Location:login.php");
  }
 ?>

<!DOCTYPE html>
<!-- saved from url=(0047)http://getbootstrap.com/examples/justified-nav/ -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>WIB - Watch it Burn</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/justified-nav/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./index_files/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./index_files/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    function showPrompt(str)
          {
          var xmlhttp;
          if (str=="")
            {
            document.getElementById("ajax").innerHTML="";
            return;
            }
          if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
          else
            {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
          xmlhttp.onreadystatechange=function()
            {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
              document.getElementById("ajax").innerHTML=xmlhttp.responseText;
              }
            }
          xmlhttp.open("GET","ping.php?q="+str,true);
          xmlhttp.send();
          }


              function showTracer(str)
          {
          var xmlhttp;
          if (str=="")
            {
            document.getElementById("ajax").innerHTML="";
            return;
            }
          if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
          else
            {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
          xmlhttp.onreadystatechange=function()
            {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
              document.getElementById("ajax").innerHTML=xmlhttp.responseText;
              }
            }
          xmlhttp.open("GET","tracer.php?q="+str,true);
          xmlhttp.send();
          }

          function showStat()
          {
          if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
          else
            {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
          xmlhttp.onreadystatechange=function()
            {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
              document.getElementById("ajax").innerHTML=xmlhttp.responseText;
              }
            }
          xmlhttp.open("GET","netstat.php",true);
          xmlhttp.send();
          }

           function showIpconfig()
          {
          if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
          else
            {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
          xmlhttp.onreadystatechange=function()
            {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
              document.getElementById("ajax").innerHTML=xmlhttp.responseText;
              }
            }
          xmlhttp.open("GET","ipconfig.php",true);
          xmlhttp.send();
          }
    </script>
  </head>

  <body>
   <!--  <a href='sair.php'>Sair</a>   -->
    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">WIB – Solução Gráfica para Iptables</h3><br>
        <ul class="nav nav-justified">
          <li><a href="home.php" style="background:#abd3d8">Home</a></li>
          <li class="active"><a href="aplicacao.php">Aplicações</a></li>
          <li><a href="about.php" style="background:#abd3d8">About</a></li>
          <li><a href="contato.php" style="background:#abd3d8">Contact</a></li>
          <li><a href="sair.php" style="background:#abd3d8">Sair</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <form>
          <h3>Verifique se há conexão com o Endereço desejado</h3>
          <!-- <input type="text" class="lead" name ="ping" placeholder="Digite aqui o Endereço" id="ping" onblur="showPrompt(this.value)"> -->
          <input type="text" class="lead" name ="ping" placeholder="Digite aqui o Endereço" id="ping">
          <br>
          <a class="btn btn-lg btn-success" onclick="showPrompt(document.getElementById('ping').value)">Ping</a>
          <!-- <button class="btn btn-lg btn-success" onclick="showPrompt(this.value)" value=">Ping</button> -->
        </form>
      </div>

      <div id="ajax">
      </div>

      <!-- Example row of columns -->
      <div class="row">

        <div class="col-lg-4">
          <h3>Mostrar conexões ativa na Rede</h3>
          <div style="text-align: center"><a class="btn btn-lg btn-success" onclick="showStat()">Mostrar</a></div>
        </div>

        <div class="col-lg-4">
          <div style="text-align: center">
            <h3>Traçar Rota</h3>
            <input type="text" class="lead" name ="ping" placeholder="Digite aqui o Endereço" id="tracer">
            <br>
            <a class="btn btn-lg btn-success" onclick="showTracer(document.getElementById('tracer').value)">Traçar</a>
          </div>
        </div>

        <div class="col-lg-4">
          <h3>Informações do IP da Rede Local</h3>
           <div style="text-align: center"><a class="btn btn-lg btn-success" onclick="showIpconfig()">Mostrar</a></div>
        </div>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>Desenvolvimento Web - IFPB - 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

</body></html>
