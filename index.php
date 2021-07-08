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
                        <input type="text" name="nome" id="nome"/>
                    </div>
                    <div class="input-box">
                        <span>E-mail*</span>
                        <input type="email" name="email" id="email"/>
                    </div>
                </form>

                <div class="bet">
                    <h1>Meu palpite</h1>

                    <div class="first">
                        <div class="change-country">
                            <div class="flag">
                                <div class="place">1</div>
                                    <img src="imagens/brasil.png" alt="bandeira">
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
                                <div class="medals">
                                    <img src="imagens/golden.png" alt="gold medal">
                                    <input type="number" name="golden" id="gold">
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
                                <img src="imagens/brasil.png" alt="bandeira">
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
                                <div class="medals">
                                    <img src="imagens/silver.png" alt="silver medal">
                                    <input type="number" name="silver" id="silver">
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="third">
                        <div class="change-country">
                            <div class="flag">
                                <div class="place">3</div>
                                <img src="imagens/brasil.png" alt="bandeira">
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
                                <div class="medals">
                                    <img src="imagens/bronze.png" alt="bronze medal">
                                    <input type="number" name="bronze" id="bronze">
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
    </main>
</body>
</html>