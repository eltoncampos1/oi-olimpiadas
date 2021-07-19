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


$idPrimeiroPais = explode(',', $formPrimeiroPais);
$idSegundoPais  = explode(',', $formSegundoPais);
$idTerceiroPais = explode(',', $formTerceiroPais);


$conexao = new Conexao();
$palpite = new Palpite();

$db = new BD($conexao, $palpite);


$palpite->__set('nome', $formNome);
$palpite->__set('email', $formEmail);
$palpite->__set('idPrimeiroPais', $idPrimeiroPais['0']);
$palpite->__set('primeroOuro', $formPrimeiroOuro);
$palpite->__set('primeiraPrata', $formPrimeiroPrata);
$palpite->__set('primeiroBronze', $formPrimeiroBronze);

$palpite->__set('idSegundoPais', $idSegundoPais['0']);
$palpite->__set('segundoOuro', $formSegundoOuro);
$palpite->__set('segundaPrata', $formSegundoPrata);
$palpite->__set('segundoBronze', $formSegundoBronze);

$palpite->__set('idTerceiroPais', $idTerceiroPais['0']);
$palpite->__set('terceiroOuro', $formTerceiroOuro);
$palpite->__set('terceiraPrata', $formTerceiroPrata);
$palpite->__set('terceiroBronze', $formTerceiroBronze);


$validaEmail = $db->pesquisaEmail();
$email = '';
$email = $validaEmail['0']; 

if($email != ''){
    echo json_encode($email);
}else{
    $db->inserir();
}





