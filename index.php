<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>

<body>
    <main>
        <header>
            <div class="text-box-header">
                <h1>lorem Ipsum
                    <span>Dolor sit amet</span>
                </h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A, quis. Rem ea dolores inventore consequatur nostrum distinctio explicabo ratione reprehenderit temporibus amet! Ducimus, possimus sunt.
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
                                <!-- <img src="imagens/brasil.png" alt="bandeira"> -->
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>
                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">

                                    <select name="país" id="pais">
                                        <option value="brasil">Brasil</option>
                                    </select>
                                </div>
                            </div>

                            <div class="medals-box">
                                <span>Número de medalhas</span>
                                <div>
                                    <div class="medals">
                                        <img src="imagens/golden.png" alt="golden medal">
                                        <input type="number" name="gold" id="gold">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/silver.png" alt="silver medal">
                                        <input type="number" name="silver" id="silver">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/bronze.png" alt="bronze medal">
                                        <input type="number" name="bronze" id="bronze">
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
                                <!-- <img src="imagens/brasil.png" alt="bandeira"> -->
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>
                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">
                                    <select name="país" id="pais">
                                        <option value="brasil">Brasil</option>
                                    </select>
                                </div>
                            </div>

                            <div class="medals-box">
                                <span>Número de medalhas</span>
                                <div>
                                    <div class="medals">
                                        <img src="imagens/golden.png" alt="golden medal">
                                        <input type="number" name="gold" id="gold">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/silver.png" alt="silver medal">
                                        <input type="number" name="silver" id="silver">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/bronze.png" alt="bronze medal">
                                        <input type="number" name="bronze" id="bronze">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="third">
                        <div class="change-country">
                            <div class="flag">
                                <div class="place">3</div>
                                <!-- <img src="imagens/brasil.png" alt="bandeira"> -->
                            </div>

                            <div class="select">
                                <span>País</span>
                                <div>
                                    <img class="triangle" src="imagens/triangle.png" alt="triangle">
                                    <select name="país" id="pais">
                                        <option value="brasil">Brasil</option>
                                    </select>
                                </div>
                            </div>

                            <div class="medals-box">
                                <span>Número de medalhas</span>
                                <div>
                                    <div class="medals">
                                        <img src="imagens/golden.png" alt="golden medal">
                                        <input type="number" name="gold" id="gold">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/silver.png" alt="silver medal">
                                        <input type="number" name="silver" id="silver">
                                    </div>
                                    <div class="medals">
                                        <img src="imagens/bronze.png" alt="bronze medal">
                                        <input type="number" name="bronze" id="bronze">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button">
                        Enviar Meu Palpite
                    </button>

                </div>
            </div>
        </section>


        <section class="ranking main">
            <div class="ranking-description">
                <h1>
                    Ranking
                </h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non voluptas soluta culpa. Recusandae ut odit facere animi enim dignissimos quasi tempore!</p>
            </div>

            <div class="cooperator-ranking">
                <ul>
                    <li>
                        <img src="imagens/ouro2.png" alt="Golden medal">
                        Nome do colaborador
                    </li>
                    <li>
                        <img src="imagens/prata2.png" alt="silver medal">
                        Nome do colaborador
                    </li>
                    <li>
                        <img src="imagens/bronze2.png" alt="bronze medal">
                        Nome do colaborador
                    </li>
                    <li>
                        <div>
                            <span> 4</span>
                        </div>
                        Nome do colaborador
                    </li>
                    <li>
                        <div>
                            <span>5</span>
                        </div>
                        Nome do colaborador
                    </li>
                </ul>
            </div>
        </section>
    </main>
</body>

</html>