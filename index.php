<?php

require_once './class/conexao.php';
require_once './class/palpite.php';
require_once './class/bd.php';

global $pais1, $pais2, $pais3;

$conexao = new Conexao();
$palpite = new Palpite();

$db = new BD($conexao, $palpite);

$paises = $db->recuperar();

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
    <link rel="shortcut icon" href="./imagens/logo.svg" type="image/svg">
    <title>Bolão - OI</title>
</head>

<body>
    <main>
        <header>
            <div class="text-box-header">
                <h1>GENTE DE <br> FIBRA, VIBRA.<br>
                    <span>E TORCE JUNTO!</span>
                </h1>

                <p>
                    Enquanto nossos atletas vão disputar a maior competição do mundo, você está convocado pra participar do nosso bolão. Tudo o que precisa fazer é montar o seu ranking com os países e as respectivas medalhas. Depois é só torcer pra que seu palpite esteja certo.
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
                                <img src="imagens/default.png" id="bandeira1" alt="bandeira">
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>

                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">

                                    <select name="país" id="primary-pais" onchange="primeiraImg(this.value)">
                                        <option value="">Escolha um pais</option>
                                        <?php
                                        foreach ($paises as $index => $pais) { ?>

                                            <option value="<?php echo $pais->url_imagem ?>"><?php echo $pais->nome ?></option>

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
                                <img src="imagens/default.png" id="bandeira2" alt="bandeira">
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>
                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">
                                    <select name="país" id="secondary-pais" onchange="segundaImg(this.value)">
                                        <option value="brasil">Escolha um pais</option>
                                        <?php
                                        foreach ($paises as $index => $pais) { ?>
                                            <option value="<?php echo $pais->url_imagem ?>"><?php echo $pais->nome ?></option>
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
                                <img src="imagens/default.png" id="bandeira3" alt="bandeira">
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>
                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">
                                    <select name="país" id="tertiary-pais" onchange="terceiraImg(this.value)">
                                        <option value="brasil">Escolha um pais</option>
                                        <?php
                                        foreach ($paises as $index => $pais) { ?>
                                            <option value="<?php echo $pais->url_imagem ?>"><?php echo $pais->nome ?></option>
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
                        <li>
                            <div class="pod">
                                <span>1°</span>
                            </div>
                            Nome do colaborador
                        </li>
                        <li>
                            <div class="pod">
                                <span>2°</span>
                            </div>
                            Nome do colaborador
                        </li>
                        <li>
                            <div class="pod">
                                <span>3°</span>
                            </div>
                            Nome do colaborador
                        </li>
                        <li>
                            <div>
                                <span> 4°</span>
                            </div>
                            Nome do colaborador
                        </li>
                        <li>
                            <div>
                                <span>5°</span>
                            </div>
                            Nome do colaborador
                        </li>
                    </ul>
                    <span class="obs">
                        *A atualização é feita todo dia pela manhã.
                    </span>
                </div>
            </div>
        </section>
    </main>
</body>
<script>
    function primeiraImg(value) {
        document.getElementById("bandeira1").src = value;
    }

    function segundaImg(value) {
        document.getElementById("bandeira2").src = value;
    }

    function terceiraImg(value) {
        document.getElementById("bandeira3").src = value;
    }
</script>

</html>