<?php

require_once './class/conexao.php';
require_once './class/palpite.php';
require_once './class/bd.php';

global $pais1, $pais2, $pais3;

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


var_dump(calculaPontuacao(9,12));



foreach($paises as $i => $pais){
    echo '<pre>';
    var_dump($pais);
    echo '</pre>';
    $total_medalhas = $pais->medalhaOuro + $pais->medalhaPrata + $pais->medalhaBronze; 
    var_dump($total_medalhas .'funcao');
}



// foreach($jogadores as $index => $jogador){
//     // echo '<pre>';
//     // var_dump($jogador->aposta_ouro, $jogador->aposta_prata, $jogador->aposta_bronze, $jogador->pontuacao_geral);
//     // echo '</pre>';
//     // echo '<hr>';
//     foreach($paises as $idx => $pais){
//         // echo '<pre>';
//         // var_dump($pais->medalhaOuro);
//         // echo '</pre>';

//         // var_dump('Pontuação é: ' . calculaPontuacao($jogador->aposta_ouro,$pais->medalhaOuro));
//         // var_dump('Pontuação é: ' . calculaPontuacao($jogador->aposta_prata,$pais->medalhaPrata));
//         // var_dump('Pontuação é: ' . calculaPontuacao($jogador->aposta_bronze,$pais->medalhaBronze));

//         var_dump($total_medalhas = calculaPontuacao($jogador->aposta_ouro,$pais->medalhaOuro) + calculaPontuacao($jogador->aposta_prata,$pais->medalhaPrata) + calculaPontuacao($jogador->aposta_bronze,$pais->medalhaBronze));

//     }
    
    
//     var_dump($total_medalhas);

// }
