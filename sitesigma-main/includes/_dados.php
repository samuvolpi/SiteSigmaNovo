<?php
include_once './includes/_banco.php';
?>



<?php

$produtos = array(
    0 => array('nome'=>'Capivara','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegall.jpg'),
    1 => array('nome'=>'Sucuri','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'sucuri.jpg'),
    2 => array('nome'=>'Zebra','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'zebra.jpg'),
    3 => array('nome'=>'Galo','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'galo.jpg'),
    4 => array('nome'=>'Gato','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'gato.jpg'),
    5 => array('nome'=>'Suricato','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'suricato.jpg'),
    6 => array('nome'=>'Esquilo','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'esquilo.jpg'),
    7 => array('nome'=>'Vaca','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'vaca.jpg'),
    8 => array('nome'=>'Cavalo','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'cavalo.jpg'),
    9 => array('nome'=>'Pantera','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'pantera.jpg'),
    10 => array('nome'=>'Galinha','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'galinha.jpg'),
    11 => array('nome'=>'Elefante','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'elefante.jpg'),
    12 => array('nome'=>'Urso Pardo','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'urso pardo.jpg'),
    13 => array('nome'=>'Panda','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'panda.jpg'),
    14 => array('nome'=>'Peixe','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'peixe.jpg'),
    16 => array('nome'=>'Gorila','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'gorila.jpg'),
    17 => array('nome'=>'lagosta','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'lagosta.jpg'),
    18 => array('nome'=>'lemori','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'lemori.jpg'),
    19 => array('nome'=>'macaco','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'macaco.jpg'),
    20 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    21 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    22 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    23 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    24 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    25 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    26 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    27 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    28 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),
    29 => array('nome'=>'pantera legal','preco'=>'1.200','descricao'=>'capivara legal','imagem'=>'capivaralegal.jpg'),    


);



$sql = '';
foreach ($produtos as $i => $value) {

    $nome = $value['nome'];
    $preco = $value['preco'];
    $descricao = $value['descricao'];
    $imagem = $value['imagem'];

    $sql = "$sql <br> INSERT INTO produtos(nome, preco, descricao, imagem, CategoriaID, ativo) VALUE('$nome', '$preco', '$descricao', '$imagem', 1, 1);";

}
 

/*
$sqlStr = "";

 foreach ($produtos as $key => $value) {
     $nome = $value['nome'];
     $descricao = $value['descricao'];
     $imagem = $value['imagem'];
     $preco = $value ['preco'];
     $sqlStr = "$sqlStr<br>INSERT INTO `produtos` (`Nome`, `Descricao`, `Imagem`, `Preco`, `CategoriaID`, `Ativo`) VALUES ('$nome', '$descricao', '$imagem', '$preco', 1, 1); ";
 }

 echo $sqlStr;

?>
*/