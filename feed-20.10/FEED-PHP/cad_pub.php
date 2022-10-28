<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="estilo-pub.css">
    <script src="https://kit.fontawesome.com/27d55b8184.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous">

      
    <?php
        session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
</head>
<body>
<header>
        <div class="nav-menu">
            <img src="imagens/logo.png" alt="LOGO-SOCIALTEC" class="logotipo">
            <ul class="nav-links">
                <li><a href="">Chat</a></li>
                <li><a href="feed.php">Feed</a></li>
                <li><a href="#">Perfil</a></li>
            </ul>
            <div class="burguer">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>
        </div>
    </header>
        
    <div class="box">   
    <form action="cad_pub.act.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><b>Faça sua publicação</b></legend>

        <label for="nome" class="labelInput" id="nome"><b>Nome do usuário</b></label>
        <input type="text" name="nome"  class="inputUser" required>

        <div id="partTexto"><!--inicio da parte do texto-->
        <label for="texto" class="labelInput" id="txt"><b>Texto</b></label>
        <p id="txt">Descreva sua pergunta de forma detalhada para que outras pessoas possam responder.</p>
        <textarea name="texto" cols="25" rows="5" class="inputUser" wrap="hard" id="texto" required></textarea>
        </div><!--final da parte do texto-->

        <div id="partCod"><!--inicio da parte do codigo-->
        <label for="trechoCod" class="labelInput" id="trecho"><b>Código</b></label>
        <p id="trecho">Mostre o trecho do seu códifo que está com o problema informado à cima</p>
        <textarea name="trechoCod" cols="25" rows="5" class="inputUser" wrap="hard" id="trechoCod" required></textarea>
        </div><!--final da parte do codigo-->

        <input type="submit" value="Publicar" id="incluir">
        </fieldset>
    </form>
    </div>
    <div class="input">
            <input type="checkbox" class="checkbox" id="chk">
            <label for="chk" class="label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball"></div>
            </label>
        </div>

    <script src="js-pub.js"></script>
</body>
</html>