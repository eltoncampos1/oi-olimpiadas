<?php

require_once './class/conexao.php';
require_once './class/palpite.php';
require_once './class/bd.php';

$conexao = new Conexao();
$palpite = new Palpite();

$db = new BD($conexao, $palpite);

$paises = $db->pesquisaPaises();
$jogadores = $db->pesquisaJogadores();

function calculaPontuacao($aposta, $pais){
    $pontuacao = 0;

    if($aposta > $pais){
        $pontuacao = $pais;
    }else if($aposta < $pais){
        $pontuacao = $aposta * 2 - $pais;
    }else {
        $pontuacao = $aposta;
    }
    return $pontuacao;
}

$pontuacaoTotal = 0;

foreach($jogadores as $index => $jogador){
    
    echo'dados do jogador';
    echo'<pre>';
    print_r($jogador->id_pais);
    echo '</pre>';
    echo '<hr>';
    echo '<hr>';
    echo '<hr>';

    foreach($paises as $idx => $pais){
        echo'<pre>';
        print_r($pais);
        echo '</pre>';
        if($jogador->id_pais === $pais->id){
           
            echo'esse jogador apostou nesse país'; 
            $totalOuro = calculaPontuacao($jogador->aposta_ouro, $pais->medalhaOuro );
            $totalPrata = calculaPontuacao($jogador->aposta_prata, $pais->medalhaPrata );
            $totalBronze = calculaPontuacao($jogador->aposta_bronze, $pais->medalhaBronze );
            $pontuacaoGeral = $totalOuro + $totalPrata + $totalBronze;
            echo'=======================';
            echo $pontuacaoGeral . '<br>';
            echo $jogador->id;
            echo'=======================';
            $palpite->__set('id', $jogador->id);
            $palpite->__set('pontuacaoGeral', $pontuacaoGeral);
            $palpite->__set('email', $jogador->email);            
            
            $db->inseriPontuacao();
        }
    }

}
