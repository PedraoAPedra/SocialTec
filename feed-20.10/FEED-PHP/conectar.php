<?php
//ESSA PARTE VERIFICA SE NÃO EXISTE UM BD COM ESSAS CARACTERISTICAS
if(!$tec= mysqli_connect('localhost','root', '','bd_socialtec')){
    echo "Erro ao se conectar com o banco de dados"; 
}


//ESSE COMANDO É PARA ACESSAR UMA QUERY NO PHPMYADMIN
mysqli_query($tec, "SET NAMES utf8");
?>