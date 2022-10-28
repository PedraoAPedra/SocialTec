<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialTec</title>
    <link rel="stylesheet" href="pesquisar.css">
    <script src="https://kit.fontawesome.com/27d55b8184.js" 
    crossorigin="anonymous"></script>

</head>
<header>
        <div class="nav-menu">
            <img src="imagens/logo.png" alt="LOGO-SOCIALTEC" class="logotipo">
                <div class="botao"><!--BOTAO DOS GRUPOS-->
                    <div class="linha4"></div>
                    <div class="linha5"></div>
                    <div class="linha6"></div>
                    
                </div>

            <ul class="nav-links">
                <li><a href="">Chat</a></li>
                <li><a href="cad_pub.php">Publicação</a></li>
                <li><a href="#">Perfil</a></li>
            </ul>
            
            <div class="burguer">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>
        </div>
        <div class="input">
            <input type="checkbox" class="checkbox" id="chk">
            <label for="chk" class="label">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball"></div>
            </label>
        </div>
    </header>

    <fieldset class="grupos">
        <h1>Grupos</h1>

        <fieldset class="grupoRecados">
            <img src="imagens/auto-falante.png" alt="auto-falante" class="logoRecados">
            <h2>Recados</h2>
        </fieldset>
        <fieldset class="grupoNoticias">
            <img src="imagens/img-noticia" alt="auto-falante" class="logoRecados">
            <h2>Notícias</h2>
        </fieldset>
        <fieldset class="grupoHTML">
            <img src="imagens/logo-html-removebg-preview.png" alt="logo-html" class="logoHTML">
            <h2>HTML</h2>
        </fieldset>
        <fieldset class="grupoCSS">
            <img src="imagens/logo-css-removebg-preview.png" alt="logo-css" class="logoCSS">
            <h2>CSS</h2>
        </fieldset>
        <fieldset class="grupoJS">
            <img src="imagens/logo-js.png" alt="logo-js" class="logoJS">
            <h2>JavaScript</h2>
        </fieldset>
        <fieldset class="grupoPHP">
            <img src="imagens/logo-php.png" alt="logo-php" class="logoPHP">
            <h2>PHP</h2>
        </fieldset>
        <fieldset class="grupoJAVA">
            <img src="imagens/logo-java.png" alt="logo-java" class="logoJAVA">
            <h2>JAVA</h2>
        </fieldset>
        <fieldset class="grupoSQL">
            <img src="imagens/logo-sql.png" alt="logo-sql" class="logoSQL">
            <h2>SQL</h2>
        </fieldset>
    </fieldset>
<body>
<?php
extract($_POST);
extract($_FILES);
require('conectar.php');

if(!empty($_POST['pesquisar'])){
    $pesquisar = $_POST['pesquisar'];
    $result_pesquisa = "SELECT * FROM tb_publicacao WHERE nome LIKE '%$pesquisar%' or texto LIKE '%$pesquisar%'";
    $resultado_pesquisa = mysqli_query($tec, $result_pesquisa);
    
    while($row_pesquisa = mysqli_fetch_array($resultado_pesquisa)){
        echo "<fieldset class=principal>";
        echo "<div class=pub>";//inicio da div pub
        echo "<h3>$row_pesquisa[nome]</h3>";
        echo "<textarea class=txt disabled=true>$row_pesquisa[texto]</textarea>";
        echo "<textarea class=trechoCod disabled=true>$row_pesquisa[trechoCod]</textarea>";
        echo "<div class=opcoes>";//inicio da div opcoes
        echo "<input type=button value=Curtir class=curtir onclick=curtir()>";
        echo "<input type=submit value=Comentar class=comentar onclick=comentar()>";
        echo "</div>";//final da div opcoes
        echo "<div class=curtida>";//inicio da div curtidas
        echo "<img src = imagens/coracao-curtir.png alt=coracao-curtir>";
        echo "<p class=num-curtidas></p>";
        echo "</div>";//final da div curtidas
        echo "<div class=comentarios>";//inicio da div comentarios
        echo "</div>";//final da div comentarios
        echo "</div>";//final da div pub
        echo "</fieldset>";
    }
}else{
    @session_start();
    $_SESSION['msg'] = $msg;
    header("location:feed.php");
}

//fazer uma exeção para quando o usuario procurar algo que n tenha no bd
?>


</body>
<script>
    var burguer =   document.querySelector('.burguer');
    var navLinks =  document.querySelector('.nav-links');
    var burguer1 = document.querySelector('.burguer div:nth-child(1)');
    var burguer3 = document.querySelector ('.burguer div:nth-child(3)');
    var burguer2 = document.querySelector ('.burguer div:nth-child(2)');

/*function do botao menu*/
burguer.addEventListener('click', () => {
    navLinks.classList.toggle('exibir');
    burguer1.classList.toggle('close1');
    burguer3.classList.toggle('close3');
    burguer2.classList.toggle('close2');
})

/*function do botao dos grupos*/
var botao2 =   document.querySelector('.botao');
var grupos =  document.querySelector('.grupos');
var botao4 = document.querySelector('.botao div:nth-child(1)');
var botao5 = document.querySelector ('.botao div:nth-child(2)');
var botao6 = document.querySelector ('.botao div:nth-child(3)');

botao2.addEventListener('click', () => {
  if (gruposEstudo.style.display== "block"){
    gruposEstudo.style.display="none";
  }else {
    gruposEstudo.style.display="block";
  }
  botao4.classList.toggle('fechar1');
  botao5.classList.toggle('fechar2');
  botao6.classList.toggle('fechar3');
  
})

/*function do modo dark*/
var chk = document.getElementById('chk');
var gruposEstudo = document.querySelector('.grupos');
var gHTML = document.querySelector('.grupoHTML');
var gCSS = document.querySelector('.grupoCSS');
var gJS = document.querySelector('.grupoJS');
var gPHP = document.querySelector('.grupoPHP');
var gJAVA = document.querySelector('.grupoJAVA');
var gSQL = document.querySelector('.grupoSQL');
var gRecados = document.querySelector('.grupoRecados');
var gNoticias = document.querySelector('.grupoNoticias');
var nomeGrupoHTML = document.querySelector('.grupoHTML h2');
var nomeGrupoCSS = document.querySelector('.grupoCSS h2');
var nomeGrupoJS = document.querySelector('.grupoJS h2');
var nomeGrupoPHP = document.querySelector('.grupoPHP h2');
var nomeGrupoJAVA = document.querySelector('.grupoJAVA h2');
var nomeGrupoSQL = document.querySelector('.grupoSQL h2');
var nomeGrupoRecados = document.querySelector('.grupoRecados h2');
var nomeGrupos = document.querySelector('.grupos h1');

chk.addEventListener('change', ()=>{
    document.body.classList.toggle('dark');
    gruposEstudo.classList.toggle('dark4');
    gHTML.classList.toggle('dark1');
    gCSS.classList.toggle('dark1');
    gJS.classList.toggle('dark1');
    gPHP.classList.toggle('dark1');
    gJAVA.classList.toggle('dark1');
    gSQL.classList.toggle('dark1');
    gRecados.classList.toggle('dark1');
    gNoticias.classList.toggle('dark1');
    nomeGrupoHTML.classList.toggle('dark3');
    nomeGrupoCSS.classList.toggle('dark3');
    nomeGrupoJS.classList.toggle('dark3');
    nomeGrupoPHP.classList.toggle('dark3');
    nomeGrupoJAVA.classList.toggle('dark3');
    nomeGrupoSQL.classList.toggle('dark3');
    nomeGrupoRecados.classList.toggle('dark3');
    nomeGrupos.classList.toggle('dark3');
    
})
</script>
</html>

