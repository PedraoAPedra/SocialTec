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

/*function do botao curtir*/
/*const btnsCurtir = document.querySelectorAll('.curtir');
btnsCurtir.forEach((btn) =>
  btn.addEventListener('click', (event) => {
    btn.classList.toggle('curtido');
  })
);*/


/*function do botao comentar
const btnsComentar = document.querySelectorAll('.comentar');
var capValor = "";
var comentario = document.querySelector('vDigitado');
btnsComentar.forEach((btn) =>
  btn.addEventListener('click', (event) => {
    btn.classList.toggle('comentado');
    capValor = document.querySelector('comentario').value;
    comentario.innerHTML+= capValor;
    capValor.innerHTML= "";
  })
);*/



/*function do modo dark*/
var chk = document.getElementById('chk');
var gruposEstudo = document.querySelector('.grupos');
var gHTML = document.querySelector('.grupoHTML');
var gCSS = document.querySelector('.grupoCSS');
var gJS = document.querySelector('.grupoJS');
var gPHP = document.querySelector('.grupoPHP');
// var gJAVA = document.querySelector('.grupoJAVA');
// var gSQL = document.querySelector('.grupoSQL');
// var gRecados = document.querySelector('.grupoRecados');
// var gNoticias = document.querySelector('.grupoNoticias');
var nomeGrupoHTML = document.querySelector('.grupoHTML h2');
var nomeGrupoCSS = document.querySelector('.grupoCSS h2');
var nomeGrupoJS = document.querySelector('.grupoJS h2');
var nomeGrupoPHP = document.querySelector('.grupoPHP h2');
// var nomeGrupoJAVA = document.querySelector('.grupoJAVA h2');
// var nomeGrupoSQL = document.querySelector('.grupoSQL h2');
// var nomeGrupoRecados = document.querySelector('.grupoRecados h2');
// var nomeGrupoNoticias = document.querySelector('.grupoNoticias h2');
var nomeGrupos = document.querySelector('.grupos h1');
var publicacoes = document.querySelector('div.pub');
var nomeUser = document.querySelector('div.pub h3');
var nomeUserP = document.querySelector('div.nav2 h1');
var legenda = document.querySelector('legend');
var nv = document.querySelector('.box');

chk.addEventListener('change', ()=>{
    document.body.classList.toggle('dark');
    gruposEstudo.classList.toggle('dark4');
    gHTML.classList.toggle('dark1');
    gCSS.classList.toggle('dark1');
    gJS.classList.toggle('dark1');
    gPHP.classList.toggle('dark1');
    nv.classList.toggle('dark1');
    // gJAVA.classList.toggle('dark1');
    // gSQL.classList.toggle('dark1');
    // gRecados.classList.toggle('dark1');
    // gNoticias.classList.toggle('dark1');
    nomeGrupoHTML.classList.toggle('dark3');
    nomeGrupoCSS.classList.toggle('dark3');
    nomeGrupoJS.classList.toggle('dark3');
    nomeGrupoPHP.classList.toggle('dark3');
    // nomeGrupoJAVA.classList.toggle('dark3');
    // nomeGrupoSQL.classList.toggle('dark3');
    // nomeGrupoRecados.classList.toggle('dark3');
    // nomeGrupoNoticias.classList.toggle('dark3');
    nomeGrupos.classList.toggle('dark3');
    publicacoes.classList.toggle('dark1');
    nomeUser.classList.toggle('dark3');
    nomeUserP.classList.toggle('dark3');
    legenda.classList.toggle('dark3');
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



function comentar1($coment){
    console.log($coment);
    const node = document.createElement("p");
    node.classList.add('vDigitado');
    const textnode = document.createTextNode($coment);
    node.appendChild(textnode);
    console.log($(this).next());
    //document.getElementById("comentarios").appendChild(node);
}

$('.comentar').click(function(e){
  coment = $(this).prev();
  coment = coment[0].value;
  campo = $(this).prev().prev();
  const node = document.createElement("p");
  const textnode = document.createTextNode(coment);
  node.classList.add('vDigitado');
  node.appendChild(textnode);
  $(campo).append(node);
  console.log(campo);
});



function curtir(){
  var curtidas = document.querySelector('.num-curtidas');
  var cont = "";
  for(cont = 0; cont<=1; cont++){
    curtidas.innerHTML=cont;
  }
}



  
