<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="estilo-feed.css">
    <script src="libs/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/27d55b8184.js" crossorigin="anonymous"></script>
    <!--link dos icones-->
</head>

    <header>
        <div class="menu">
            <img src="imagens/logo.png" alt="LOGO-SOCIALTEC" id="logo">

                <!-- BARRA DE PESQUISA
    <form action="pesquisar.php" method="post">
        <div class="barra">
            <input type="text" name="pesquisar" class="pesquisar" placeholder="Explore as publicações">
            <input type="submit" value="enviar" class="btnEnviar" onclick="searchData()"></input>
        </div>
    </form> -->

            <!-- <ul class="nav-links">
                <li><a href="cad_pub.php">Publicação</a></li> -->

            <div class="input">
                <input type="checkbox" class="checkbox" id="chk">
                    <label for="chk" class="label">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                    </label>
            </div>
            
            </ul>   
            
            <div class="burguer">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>

        </div>

    </header>

<body>

<fieldset class="grupos">

        <h1>SocialTec</h1>

        <!-- <fieldset class="grupoRecados">
            <img src="imagens/auto-falante.png" alt="auto-falante" class="logoRecados">
            <h2>Recados</h2>
        </fieldset>
        <fieldset class="grupoNoticias">
            <img src="imagens/img-noticia" alt="auto-falante" class="logoRecados">
            <h2>Notícias</h2>
        </fieldset> -->
        
                        <!--BARRA DE PESQUISA-->
    <form action="pesquisar.php" method="post">
        <div class="barra">
            <input type="text" name="pesquisar" class="pesquisar" placeholder="Explore as publicações">
            <input type="submit" value="enviar" class="btnEnviar" onclick="searchData()"></input>
        </div>
    </form>
        <fieldset class="grupoHTML">
            <img src="imagens/chat-p.png" alt="logo-html" class="logoHTML">
            <h2>Chat</h2>
        </fieldset>
        <fieldset class="grupoCSS">
            <img src="imagens/grupo-p.png" alt="logo-css" class="logoCSS">
            <h2>Grupos</h2>
        </fieldset>
        <fieldset class="grupoJS">
            <img src="imagens/comunicado-p.png" alt="logo-js" class="logoJS">
            <h2>Comunicados</h2>
        </fieldset>
        <!-- <fieldset class="grupoPHP">
            <img src="imagens/logo-php.png" alt="logo-php" class="logoPHP">
            <h2>Nova Publicação</h2> -->
        

<fieldset class="grupoPHP"><a href="#abrirModal"><img src="imagens/adc_pub-p.png" alt="logo-php" class="logoPHP"><h2>Nova Publicação</h2></a>
<div id="abrirModal" class="modal">
<a href="#fechar" title="Fechar" class="fechar">x</a>
<div class="box">   
    <form action="cad_pub.act.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><b>Faça sua publicação</b></legend>

        <label for="nome" class="labelInput" id="nome"><b>Nome do usuário</b></label>
        <input type="text" name="nome"  class="inputUser" id="nome" required>

        <div id="partTexto"><!--inicio da parte do texto-->
        <label for="texto" class="labelInput" id="txt"><b>Texto</b></label>
        <p id="txt">Descreva sua pergunta de forma detalhada para que outras pessoas possam responder.</p>
        <textarea name="texto" cols="25" rows="5" class="inputUser" wrap="hard" id="texto" required></textarea>
        </div><!--final da parte do texto-->

        <div id="partCod"><!--inicio da parte do codigo-->
        <label for="trechoCod" class="labelInput" id="trecho"><b>Código</b></label>
        <p id="trecho">Mostre o trecho do seu código que está com o problema informado à cima</p>
        <textarea name="trechoCod" cols="25" rows="5" class="inputUser" wrap="hard" id="trechoCod" required></textarea>
        </div><!--final da parte do codigo-->

        <input type="submit" value="Publicar" id="incluir">
        </fieldset>
    </form>
    </div>
</div>
</fieldset>

        <!-- <fieldset class="grupoJAVA">
            <img src="imagens/logo-java.png" alt="logo-java" class="logoJAVA">
            <h2>JAVA</h2>
        </fieldset>
        <fieldset class="grupoSQL">
            <img src="imagens/logo-sql.png" alt="logo-sql" class="logoSQL">
            <h2>SQL</h2>
        </fieldset> -->

</fieldset>

<div class="nav2">
    <img src="imagens/perfil" id="fotoPerfil">
    <h1 class="Nome">Nome do usuário</h1>
    <a href="#" id="verPerfil">Ver Perfil</a>

    <div class="menuToggle"></div>
    <div class="menuB"></div>

    </div>

    <script>
        let menuToggle = document.querySelector('.menuToggle');
        menuToggle.onclick = function() {
        menuToggle.classList.toggle('active')
        }
    </script>


</div>

<div class="botao"><!--BOTAO DOS GRUPOS-->
<div class="linha4"></div>
<div class="linha5"></div>
<div class="linha6"></div>
</div>


<?php

    @session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    require('conectar.php');
    $publicacoes = mysqli_query($tec, "Select * from `tb_publicacao`");

    echo "<fieldset class=principal>";

    while($publicacao = mysqli_fetch_array($publicacoes)){
        echo "<div class=pub>";//inicio da div pub
        echo "<p class = codigo>Código: $publicacao[codigo]</p>";
        echo "<h3>$publicacao[nome]</h3>";
        echo "<textarea class=txt disabled=true>$publicacao[texto]</textarea>";
        echo "<textarea class=trechoCod disabled=true>$publicacao[trechoCod]</textarea>";
        echo "<div class=opcoes>";//inicio da div opcoes
        echo "<input type=button value=Curtir class=curtir onclick=curtir()>";
        echo "</div>";//final da div opcoes
        echo "<div class=curtida>";//inicio da div curtidas
        // echo "<img src = imagens/coracao-curtir.png alt=coracao-curtir>";
        // echo "<p class=num-curtidas></p>";//contador de curtidas
        echo "</div>";//final da div curtidas
        echo "<div class=comentarios>";//inicio da div comentarios
        //COMEÇO DA PARTE DOS COMENTARIOS
        ?>
        <form action="comentarioFeito.act.php" method="post">
        <input type="hidden" name="codPublicacao" value="<?php echo $publicacao['codigo'] ?>">
        <input type="text" name="nome" id="nomeComentario" placeholder="Escreva seu nome" required>
        <textarea name="comentario" id="txtComentario" maxlength="200" placeholder="Escreva um comentário..." required></textarea>
        <input type="submit" value="Enviar">
        <?php
        
        echo "</form>";
        echo "</div>";//final da div comentarios
    
        $comentarios = mysqli_query($tec, "Select * from `tb_comentarios` where `codPublicacao` = '$publicacao[codigo]'");
        while($comentario = mysqli_fetch_array($comentarios)){
            
            echo "<p class=nomeComentFeito>Nome: $comentario[NomeComentario]</p>";
            echo "<textarea class=txtComentFeito disabled=true>$comentario[txtComentario]</textarea>";
            
        }//FINAL DA PARTE DOS COMENTARIOS
        echo "</div>";//final da div pub

        
    }
    echo "</fieldset>";

?>  


<script src="js-feed.js"></script>
</body>
</html>


