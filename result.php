<?php

require_once './class/conexao.php';
require_once './class/palpite.php';
require_once './class/bd.php';

global $pais1, $pais2, $pais3;

$conexao = new Conexao();
$palpite = new Palpite();

$db = new BD($conexao, $palpite);

$paises = $db->pesquisaPaises();
$jogadores = $db->pesquisaPodio();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>
    <main class="result-page">
        <header>
            <div class="athlete-name">
                <h1>
                    leticia bufoni, <br>
                    <span>Atleta de fibra</span>
                </h1>
            </div>
            <div class="text-box-header">
                <h1>A GENTE VIBROU <br>
                    <span>E TORCE JUNTO!</span>
                </h1>

                <p>
                    Agora é hora de ver o ranking final e conferir os campeões do nosso bolão. Parabéns a todos que participaram e vibraram junto com a gente.
                </p>
            </div>
        </header>

        <div class="final-podium">
            <div class="podium-image">
                <span class="place-1">Nome do <br> colaborador</span>
                <span class="place-2">Nome do <br> colaborador</span>
                <span class="place-3">Nome do <br> colaborador</span>
                <img src="imagens/podium.png" alt="podium">
            </div>

            <div class="ranking-container">
                <div class="column">
                    <div class="place-wrapper">
                        <span class="ctry">1° BRASIL</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="place-wrapper">
                        <span class="ctry">2° Itália</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="place-wrapper">
                        <span class="ctry">3° Espanha</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="place-wrapper">
                        <span class="ctry">1° BRASIL</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="place-wrapper">
                        <span class="ctry">2° Itália</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="place-wrapper">
                        <span class="ctry">3° Espanha</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="place-wrapper">
                        <span class="ctry">1° BRASIL</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="place-wrapper">
                        <span class="ctry">2° Itália</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                    <div class="place-wrapper">
                        <span class="ctry">3° Espanha</span>
                        <div class="medals-wrapper">
                            <div>
                                <img src="imagens/ouro-sm.png" alt="medalha de ouro">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/prata-sm.png" alt="medalha de prata">
                                <span>30</span>
                            </div>
                            <div>
                                <img src="imagens/bronze-sm.png" alt="medalha de bronze">
                                <span>30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>