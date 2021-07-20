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
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="./assets/js/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <link rel="shortcut icon" href="./imagens/logo.png" type="image/svg">
    <title>Bolão Oi</title>
</head>

<body>
    <main>
        <header>
            <div class="text-box-header">
                <h1>GENTE DE <br> FIBRA, VIBRA.<br>
                    <span>E TORCE JUNTO!</span>
                </h1>

                <p>
                    Enquanto nossos atletas vão disputar a maior competição do mundo, você está convocado pra participar do nosso bolão. Tudo o que precisa fazer é montar o seu ranking com os países e as respectivas medalhas. Depois é só torcer pra que seu palpite esteja certo.
                </p>
            </div>

            <div class="athlete-name">
                <h1>
                    Medina, <br>
                    <span>Atleta de fibra</span>
                </h1>
            </div>
        </header>


        <section class="form">

            <div class="bet-container">
                <form>
                    <div class="input-box">
                        <span>Nome completo*</span>
                        <input type="text" name="nome" id="nome" />
                    </div>
                    <div class="input-box">
                        <span>E-mail*</span>
                        <input type="email" name="email" id="email" />
                    </div>
                </form>

                <div class="bet">
                    <h1>Meu palpite</h1>

                    <div class="first">
                        <div class="change-country">
                            <div class="flag">
                                <div class="place">1</div>
                                <img src="imagens/def.png" id="bandeira1" alt="bandeira">
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>

                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">

                                    <select name="país" id="primary-pais" onchange="primeiraImg(this.value)">
                                        <option value="">Escolha um pais</option>
                                        <?php
                                        foreach ($paises as $index => $pais) { ?>

                                            <option value='<?php echo ($pais->id . ',' . $pais->url_imagem)  ?>'><?php echo $pais->nome ?></option>

                                        <?php
                                        }
                                        ?>
                                    </select>


                                </div>
                            </div>

                            <div class="medals-box">
                                <span>Número de medalhas</span>
                                <div>
                                    <div class="medals">
                                        <img src="imagens/golden.png" alt="golden medal">
                                        <input type="number" name="gold" id="primary-gold">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/silver.png" alt="silver medal">
                                        <input type="number" name="silver" id="primary-silver">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/bronze.png" alt="bronze medal">
                                        <input type="number" name="bronze" id="primary-bronze">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="second">
                        <div class="change-country">
                            <div class="flag">
                                <div class="place">
                                    2
                                </div>
                                <img src="imagens/def.png" id="bandeira2" alt="bandeira">
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>
                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">
                                    <select name="país" id="secondary-pais" onchange="segundaImg(this.value)">
                                        <option value="">Escolha um pais</option>
                                        <?php
                                        foreach ($paises as $index => $pais) { ?>
                                            <option value='<?php echo ($pais->id . ',' . $pais->url_imagem)  ?>'><?php echo $pais->nome ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="medals-box">
                                <span>Número de medalhas</span>
                                <div>
                                    <div class="medals">
                                        <img src="imagens/golden.png" alt="golden medal">
                                        <input type="number" name="gold" id="secondary-gold">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/silver.png" alt="silver medal">
                                        <input type="number" name="silver" id="secondary-silver">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/bronze.png" alt="bronze medal">
                                        <input type="number" name="bronze" id="secondary-bronze">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="third">
                        <div class="change-country">
                            <div class="flag">
                                <div class="place">3</div>
                                <img src="imagens/def.png" id="bandeira3" alt="bandeira">
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>
                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">
                                    <select name="país" id="tertiary-pais" onchange="terceiraImg(this.value)">
                                        <option value="">Escolha um pais</option>
                                        <?php
                                        foreach ($paises as $index => $pais) { ?>
                                            <option value='<?php echo ($pais->id . ',' . $pais->url_imagem)  ?>'><?php echo $pais->nome ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="medals-box">
                                <span>Número de medalhas</span>
                                <div>
                                    <div class="medals">
                                        <img src="imagens/golden.png" alt="golden medal">
                                        <input type="number" name="gold" id="tertiary-gold">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/silver.png" alt="silver medal">
                                        <input type="number" name="silver" id="tertiary-silver">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/bronze.png" alt="bronze medal">
                                        <input type="number" name="bronze" id="tertiary-bronze">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="btn-enviar">
                        Enviar Meu Palpite
                    </button>

                </div>
            </div>
        </section>


        <section class="ranking main">
            <div class="athlete-name footer">
                <h1>
                    leticia bufoni, <br>
                    <span>Atleta de fibra</span>
                </h1>
            </div>
            <div class="ranking-box">
                <div class="ranking-description">
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

    <div class="modal fade" id="modal-email-valido" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " style="right: -4%;" role="document">
            <div class="box-modal-sucesso">
                <div tabindex="-1" role="dialog">
                    <div id="modal-error" class="modal-error">
                        <div class="btn-sair">X</div>
                        <h1>Atenção!</h1>
                        <span class="infos">Volte ao formulário e corrija as informaçõs abaixo:</span>

                        <p><span>X </span> Insira um <strong>e-mail válido.</strong></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-campos-vazios" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " style="right: -4%;" role="document">
            <div class="box-modal-sucesso">
                <div tabindex="-1" role="dialog">
                    <div id="modal-error" class="modal-error">
                        <div class="btn-sair">X</div>
                        <h1>Atenção!</h1>
                        <span class="infos">Volte ao formulário e corrija as informaçõs abaixo:</span>

                        <p><span>X </span> Preencha <strong>Todos os campos </strong>do formulário.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-paises-diferentes" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " style="right: -4%;" role="document">
            <div class="box-modal-sucesso">
                <div tabindex="-1" role="dialog">
                    <div id="modal-error" class="modal-error">
                        <div class="btn-sair">X</div>
                        <h1>Atenção!</h1>
                        <span class="infos">Volte ao formulário e corrija as informaçõs abaixo:</span>

                        <p><span>x </span> Preencha com <strong>3 países diferentes.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    function primeiraImg(value) {
        var arr = value.split(',')
        if (value === '') {
            document.getElementById("bandeira1").src = 'imagens/default.png';
        } else {
            document.getElementById("bandeira1").src = arr[1];
        }

    }

    function segundaImg(value) {
        var arr = value.split(',')
        if (value === '') {
            document.getElementById("bandeira2").src = 'imagens/default.png';
        } else {
            document.getElementById("bandeira2").src = arr[1];
        }
    }

    function terceiraImg(value) {
        var arr = value.split(',')
        if (value === '') {
            document.getElementById("bandeira3").src = 'imagens/default.png';
        } else {
            document.getElementById("bandeira3").src = arr[1];
        }
    }
</script>

</html>