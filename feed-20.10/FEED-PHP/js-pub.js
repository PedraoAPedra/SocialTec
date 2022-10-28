
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


var chk = document.getElementById('chk');
chk.addEventListener('change', ()=>{
    document.body.classList.toggle('dark');
})
