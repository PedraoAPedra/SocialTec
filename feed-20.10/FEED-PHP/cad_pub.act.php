<?php
extract($_POST);
extract($_FILES);
require('conectar.php');

//palavras e expressões proibidas
$str = 'porra';
$str = 'caralho';
$str = 'filho da puta'; 
$str = 'filha da puta';
$str = 'arombado';
$str = 'arrombada';
$str = 'bicha';
$str = 'boiola';
$str = 'buceta';
$str = 'boquete'; 
$str = 'bosta';
$str = 'bronha';
$str = 'bunda'; 
$str = 'burra';
$str = 'burro';
$str = 'bêbado';
$str = 'cacete';
$str = 'corno';
$str = 'corna';
$str = 'canalha';
$str = 'criolo';
$str = 'cu';
$str = 'cuzão';
$str = 'debiloide';
$str = 'deficiente';
$str = 'demônio';
$str = 'doida';
$str = 'doido';
$str = 'escroto';
$str = 'escrota';
$str = 'facista';
$str = 'foda';
$str = 'fode';
$str = 'fudida';
$str = 'fudendo';
$str = 'gay';
$str = 'grelo';
$str = 'homo-sexual';
$str = 'idiota'; 
$str = 'imbecil';
$str = 'ladrão';
$str = 'leprosa';
$str = 'leproso';
$str = 'louco';
$str = 'louca';
$str = 'macaca';
$str = 'macaco';
$str = 'macumbeiro';
$str = 'macumbeiro';
$str = 'mulata';
$str = 'mulato';
$str = 'nazista';
$str = 'otario';
$str = 'otaria';
$str = 'perereca';
$str = 'pinto';
$str = 'piranha';
$str = 'prostituo';
$str = 'prostituta';
$str = 'punheta';
$str = 'puta';
$str = 'puto';
$str = 'pênis';
$str = 'retardada';
$str = 'retardado';
$str = 'ridícula';
$str = 'racista';
$str = 'safado';
$str = 'safada';
$str = 'sapatão';
$str = 'sifilis';
$str = 'siririca'; 
$str = 'tarado';
$str = 'tarada';
$str = 'trouxa';
$str = 'traveco';
$str = 'vaca';
$str = 'vadia';
$str = 'viado';
$str = 'xereca';
$str = 'xota';
$str = 'vai toma no cu';
$str = 'lixo';

//$url = "imagens/".md5(time().$foto['name']).".jpg";
    if(strpos($texto, 'caralho') !== false || strpos($texto, 'porra') !== false || strpos($texto, 'filho da puta') !== false || strpos($texto, 'filha da puta') !== false || strpos($texto, 'arrombado') !== false || strpos($texto, 'arromada') !== false || strpos($texto, 'bicha') !== false || strpos($texto, 'boiola') !== false || strpos($texto, 'buceta') !== false || strpos($texto, 'boquete') !== false || strpos($texto, 'bosta') !== false || strpos($texto, 'bronha') !== false || strpos($texto, 'bunda') !== false || strpos($texto, 'burra') !== false || strpos($texto, 'burro') !== false || strpos($texto, 'bêbado') !== false || strpos($texto, 'cacete') !== false || strpos($texto, 'corno') !== false || strpos($texto, 'corna') !== false || strpos($texto, 'canalha') !== false || strpos($texto, 'criolo') !== false || strpos($texto, 'cu') !== false || strpos($texto, 'cuzão') !== false || strpos($texto, 'debiloide') !== false || strpos($texto, 'deficiente') !== false || strpos($texto, 'demônio') !== false || strpos($texto, 'doida') !== false || strpos($texto, 'doido') !== false || strpos($texto, 'escrota') !== false || strpos($texto, 'escroto') !== false || strpos($texto, 'facista') !== false || strpos($texto, 'foda') !== false || strpos($texto, 'fode') !== false || strpos($texto, 'fudida') !== false || strpos($texto, 'fudendo') !== false || strpos($texto, 'gay') !== false || strpos($texto, 'grelo') !== false || strpos($texto, 'homo-sexual') !== false || strpos($texto, 'idiota') !== false || strpos($texto, 'imbecil') !== false || strpos($texto, 'ladrão') !== false || strpos($texto, 'lebrosa') !== false || strpos($texto, 'lebroso') !== false || strpos($texto, 'louco') !== false || strpos($texto, 'louca') !== false || strpos($texto, 'macaca') !== false || strpos($texto, 'macaco') !== false || strpos($texto, 'macumbeiro') !== false || strpos($texto, 'macumbeira') !== false || strpos($texto, 'mulata') !== false || strpos($texto, 'mulato') !== false || strpos($texto, 'nazista') !== false || strpos($texto, 'otaria') !== false || strpos($texto, 'otario') !== false || strpos($texto, 'perereca') !== false || strpos($texto, 'pinto') !== false || strpos($texto, 'piranha') !== false || strpos($texto, 'prostituto') !== false || strpos($texto, 'prostituta') !== false || strpos($texto, 'punheta') !== false || strpos($texto, 'puto') !== false || strpos($texto, 'puta') !== false || strpos($texto, 'pênis') !== false || strpos($texto, 'retardada') !== false || strpos($texto, 'retardado') !== false || strpos($texto, 'ridícula') !== false || strpos($texto, 'racista') !== false || strpos($texto, 'safada') !== false || strpos($texto, 'safado') !== false || strpos($texto, 'sapatão') !== false || strpos($texto, 'sífilis') !== false || strpos($texto, 'siririca') !== false || strpos($texto, 'tarada') !== false || strpos($texto, 'tarado') !== false || strpos($texto, 'trouxa') !== false || strpos($texto, 'traveco') !== false || strpos($texto, 'vaca') !== false || strpos($texto, 'vadia') !== false || strpos($texto, 'viado') !== false || strpos($texto, 'xereca') !== false || strpos($texto, 'xota') !== false || strpos($texto, 'vai toma no cu') !== false || strpos($texto, 'lixo') !== false){
        header("location:cad_pub.php"); 
        $msg ="<script>alert('LINGUAGEM INAPROPRIADA!! Por favor, utilize palavras apropriadas.')</script>";

    }else if (strpos($trechoCod, 'caralho') !== false || strpos($trechoCod, 'porra') !== false || strpos($trechoCod, 'filho da puta') !== false || strpos($trechoCod, 'filha da puta') !== false || strpos($trechoCod, 'arrombado') !== false || strpos($trechoCod, 'arromada') !== false || strpos($trechoCod, 'bicha') !== false || strpos($trechoCod, 'boiola') !== false || strpos($trechoCod, 'buceta') !== false || strpos($trechoCod, 'boquete') !== false || strpos($trechoCod, 'bosta') !== false || strpos($trechoCod, 'bronha') !== false || strpos($trechoCod, 'bunda') !== false || strpos($trechoCod, 'burra') !== false || strpos($trechoCod, 'burro') !== false || strpos($trechoCod, 'bêbado') !== false || strpos($trechoCod, 'cacete') !== false || strpos($trechoCod, 'corno') !== false || strpos($trechoCod, 'corna') !== false || strpos($trechoCod, 'canalha') !== false || strpos($trechoCod, 'criolo') !== false || strpos($trechoCod, 'cu') !== false || strpos($trechoCod, 'cuzão') !== false || strpos($trechoCod, 'debiloide') !== false || strpos($trechoCod, 'deficiente') !== false || strpos($trechoCod, 'demônio') !== false || strpos($trechoCod, 'doida') !== false || strpos($trechoCod, 'doido') !== false || strpos($trechoCod, 'escrota') !== false || strpos($trechoCod, 'escroto') !== false || strpos($trechoCod, 'facista') !== false || strpos($trechoCod, 'foda') !== false || strpos($trechoCod, 'fode') !== false || strpos($trechoCod, 'fudida') !== false || strpos($trechoCod, 'fudendo') !== false || strpos($trechoCod, 'gay') !== false || strpos($trechoCod, 'grelo') !== false || strpos($trechoCod, 'homo-sexual') !== false || strpos($trechoCod, 'idiota') !== false || strpos($trechoCod, 'imbecil') !== false || strpos($trechoCod, 'ladrão') !== false || strpos($trechoCod, 'lebrosa') !== false || strpos($trechoCod, 'lebroso') !== false || strpos($trechoCod, 'louco') !== false || strpos($trechoCod, 'louca') !== false || strpos($trechoCod, 'macaca') !== false || strpos($trechoCod, 'macaco') !== false || strpos($trechoCod, 'macumbeiro') !== false || strpos($trechoCod, 'macumbeira') !== false || strpos($trechoCod, 'mulata') !== false || strpos($trechoCod, 'mulato') !== false || strpos($trechoCod, 'nazista') !== false || strpos($trechoCod, 'otaria') !== false || strpos($trechoCod, 'otario') !== false || strpos($trechoCod, 'perereca') !== false || strpos($trechoCod, 'pinto') !== false || strpos($trechoCod, 'piranha') !== false || strpos($trechoCod, 'prostituto') !== false || strpos($trechoCod, 'prostituta') !== false || strpos($trechoCod, 'punheta') !== false || strpos($trechoCod, 'puto') !== false || strpos($trechoCod, 'puta') !== false || strpos($trechoCod, 'pênis') !== false || strpos($trechoCod, 'retardada') !== false || strpos($trechoCod, 'retardado') !== false || strpos($trechoCod, 'ridícula') !== false || strpos($trechoCod, 'racista') !== false || strpos($trechoCod, 'safada') !== false || strpos($trechoCod, 'safado') !== false || strpos($trechoCod, 'sapatão') !== false || strpos($trechoCod, 'sífilis') !== false || strpos($trechoCod, 'siririca') !== false || strpos($trechoCod, 'tarada') !== false || strpos($trechoCod, 'tarado') !== false || strpos($trechoCod, 'trouxa') !== false || strpos($trechoCod, 'traveco') !== false || strpos($trechoCod, 'vaca') !== false || strpos($trechoCod, 'vadia') !== false || strpos($trechoCod, 'viado') !== false || strpos($trechoCod, 'xereca') !== false || strpos($trechoCod, 'xota') !== false || strpos($trechoCod, 'vai toma no cu') !== false || strpos($trechoCod, 'lixo') !== false){
        header("location:cad_pub.php"); 
        $msg ="<script>alert('LINGUAGEM INAPROPRIADA!! Por favor, utilize palavras apropriadas.')</script>";
    }else{
        if (mysqli_query($tec, "INSERT INTO `tb_publicacao` (`codigo`, `nome`, `texto`, `trechoCod`)
        VALUES (NULL, '$nome', '$texto', '$trechoCod');")){
                header("location:feed.php");
               $msg ="<script>alert('incluido')</script>";
        }
    }

    


@session_start();
 $_SESSION['msg'] = $msg;
//header("location:feed.php");

?>