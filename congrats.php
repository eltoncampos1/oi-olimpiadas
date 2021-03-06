<?php

require_once './class/conexao.php';
require_once './class/palpite.php';
require_once './class/bd.php';

$conexao = new Conexao();
$palpite = new Palpite();

$db = new BD($conexao, $palpite);

$jogadores = $db->pesquisaPodio();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <main class="form-return">
        <header>
            <div class="text-box-header">
                <h1>GENTE DE FIBRA, <br>
                    VIBRA. <br>
                    <span>E TORCE JUNTO!</span>
                </h1>

                <p>
                    Enquanto nossos atletas vão disputar a maior competição do mundo, você está convocado pra participar do nosso bolão. Tudo o que precisa fazer é montar o seu ranking com os países e as respectivas medalhas. Depois é só torcer pra que seu palpite esteja certo.
                </p>
            </div>

            <div class="athlete-name">
                <h1>
                    gabriel Medina, <br>
                    <span>Atleta de fibra</span>
                </h1>
            </div>
        </header>


        <section class="message">
            <h4>
                SEU PALPITE FOI REGISTRADO COM SUCESSO!
            </h4>

            <p>Agora é só assistir os jogos, torcer por nossos atletas</p>
            <p>e acompanhar sua classificação no ranking.</p>
        </section>


        <section class="ranking congrats-bg">
            <div class="athlete-name footer congrats">
                <h1>
                    Leticia Bufoni, <br>
                    <span>Atleta de fibra</span>
                </h1>
            </div>
            <div class="ranking-box">
                <div class="ranking-description m-top">
                    <h1>
                        Ranking
                    </h1>

                    <p>Tem muita competição pela frente. Boa sorte pra você e para os brasileiros na disputa.</p>
                </div>

                <div class="cooperator-ranking">
                    <ul>
                        <?php
                        $posicao = 0;
                        foreach ($jogadores as $idx => $jogador) {
                            $class = 'pod';
                            if ($posicao == 3 || $posicao == 4) {
                                $class = '';
                            }
                            $posicao++;
                        ?>

                            <li>
                                <div class="<?= $class ?>">
                                    <span><?= $posicao ?>°</span>
                                </div>
                                <?= $jogador->nome ?>
                            </li>
                        <?php

                        } ?>
                    </ul>

                    <span class="obs">
                        *A atualização é feita todo dia pela manhã.
                    </span>
                </div>
            </div>
        </section>
    </main>
</body>

</html>