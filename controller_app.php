<?php 
require_once "./class/conexao.php";
require_once "./class/palpite.php";
require_once "./class/bd.php";


//Recupera dados do formulário

$formNome = $_POST['nome'];
$formEmail = $_POST['email'];

$formPrimeiroPais = $_POST['primaryPais'];
$formPrimeiroOuro = $_POST['primaryGold'];
$formPrimeiroPrata = $_POST['primarySilver'];
$formPrimeiroBronze = $_POST['primaryBronze'];

$formSegundoPais = $_POST['secondaryPais'];
$formSegundoOuro = $_POST['secondaryGold'];
$formSegundoPrata = $_POST['secondarySilver'];
$formSegundoBronze = $_POST['secondaryBronze'];

$formTerceiroPais = $_POST['tertiaryPais'];
$formTerceiroOuro = $_POST['tertiaryGold'];
$formTerceiroPrata = $_POST['tertiarySilver'];
$formTerceiroBronze = $_POST['tertiaryBronze'];

$conexao = new Conexao();
$palpite = new Palpite();

$db = new BD($conexao, $palpite);

$db->inserir();


$palpite->__set('nome', $formNome);
$palpite->__set('email', $formEmail);
$palpite->__set('primeiroPais', $formPrimeiroPais);
$palpite->__set('primeroOuro', $formPrimeiroOuro);
$palpite->__set('primeiraPrata', $formPrimeiroPrata);
$palpite->__set('primeiroBronze', $formPrimeiroBronze);

$palpite->__set('segundoPais', $formSegundoPais);
$palpite->__set('segundoOuro', $formSegundoOuro);
$palpite->__set('segundaPrata', $formSegundoPrata);
$palpite->__set('segundoBronze', $formSegundoBronze);

$palpite->__set('terceiroPais', $formTerceiroPais);
$palpite->__set('terceiroOuro', $formTerceiroOuro);
$palpite->__set('terceiraPrata', $formTerceiroPrata);
$palpite->__set('terceiroBronze', $formTerceiroBronze);


