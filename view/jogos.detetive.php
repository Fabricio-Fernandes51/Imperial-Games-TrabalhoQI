<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/input.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <script src="../js/carro"></script>
    <title>Detetive</title>
</head>

<body class="dr-ht-red-blue">
<header class="wi-100 red text-center ">
        <fieldset>
            <section class="wi-100 pd-top-3 pd-bt-3">
                <div class=" text-center ">
                <a href="jogos.inicio.php"><h3 class="perfil text-black">Imperial Games</h3></a>
                </div>
            </section>
        </fieldset>
    </header>

    <main>
        <section class="wi-80 pd-top-3 mg-lf-10 text-center">
            <h3>Um homem rico no qual o próprio construiu seu proprio imperio financeiro foi encontrado morto a facadas na piscina em uma manhã de terça, seu dever é descobrir o assassino e a cumplice entre: esposa, faxineira, cozinheiro e o filho. se errar está demitido!!</h4>
        </section>


        <form action="../controller/detetive.controller.php" method="POST">
            <section class="slider">

                <input name='slide' type="radio" class="selection" checked>
                <input name='slide' type="radio" class="selection">
                <input name='slide' type="radio" class="selection">
                <input name='slide' type="radio" class="selection">


                <section class="slider-content mg-bt-5">

                    <section class="slider-item1">
                        <h3>Filho da Vitima</h3>
                        <article>
                            <img src="../img/imagens-detetive/criança.png" alt="">
                            <table class="wi-100 pd-top-5">
                                <tr>
                                    <td class="pd-top-3 pd-bt-3 ">
                                        <h3> Sobre a Vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Onde Estava </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre a relação com sua mãe </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre o cozinheiro </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre a faxineira </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ele sempre foi muito brincalhão e atencioso comigo, ate me dava uma bao mesada para eu aproveitar com meus amigos </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Eu tinha ido dormir na casa de um colega meu </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ela na verdade é minha madastra, com um pouco de esforço do meu pai conseguiu que a gente se aproximasse, ela é ate legal, mas as vezes é rigida demais e meu pai acabava brigando com ela por causa disso. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ele é uma pessoa muito legal, sempre me faz companhia quando meu pai estava ocupado, ate mesmo me ajudava nos deveres de casa as vezes </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Eu não sei quase nada sobre ela, só sei que ela não fazia muito suas responsabilidade e sempre sobrava para o cozinheiro o que ele não gostar dela, além de ser próxima da "mãe". </h5>
                                    </th>
                                </tr>
                            </table>
                        </article>
                    </section>


                    <section class="slider-item2">
                        <h3>Cozinheiro da casa</h3>
                        <article>
                            <img src="../img/imagens-detetive/chefe.png" alt="">
                            <table class="wi-100 pd-top-5">
                                <tr>
                                    <td class=" pd-top-3 pd-bt-3 ">
                                        <h3> Sobre a Vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre seu Trabalho </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Onde Estava </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre a esposa da vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre o filho da vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre a faxineira </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Era uma boa pessoa, as vezes brigavamos por causa de sua má alimentação mas nunca foi nada demais já que eramos ótimos amigos. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Eu recebia bem e também não era exaustivo, tinha bastante dias de folga também, não tinha do que reclamar realmente. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Estava lavando a louça do último jantar pois a faxineira estava de folga naquele dia e depois tinha ido para minha casa. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ela é uma mulher um tanto quando peculiar, mas acho que nunca fez nada de errado, só tinha umas ideias meio estranhas as vezes, ela e a faxineira era bem amigas. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ele é bem inteligente, educado e engraçado, eu o vi crescendo então pode se dizer que tenho uma visão paterna dele. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ela não é bem a faxineira na verdade, ela faz um afazer e outro, mas mais parecia que ela estava aproveitando as férias em uma casa de luxo, não sei muito qual a dela. </h5>
                                    </th>
                                </tr>
                            </table>
                        </article>
                    </section>

                    <section class="slider-item3">
                        <h3>Faxineira da casa</h3>
                        <article>
                            <img src="../img/imagens-detetive/empregada.png" alt="">
                            <table class="wi-100 pd-top-5">
                                <tr>
                                    <td class=" pd-top-3 pd-bt-3 ">
                                        <h3> Sobre a Vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre seu Trabalho </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Onde Estava </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre a esposa da vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre o filho da vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre o cozinheiro </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> nunca fomos muito próximos apesar de estarmos na mesma casa quase todo dia, a esposa dele não queria que fossemos próximos por medo de ser traída. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Era um lugar ótimo para se trabalhar pois não tinha muitas coisas para se fazer e também recebia bem </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Estava de folga, então aproveitei para ir em uma festa com a esposa da vitima e umas amigas </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ela é uma mulher incrivel mesmo tendo problemas de ciumes, nos davamos muito bem, as vezes saimos juntas para fazer compras e afins. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ele parece ter medo de mim de alguma forma, já tentei me aproximar algumas vezes mas ele era muito defensivo, com certeza aqele cozinheiro falou merda de mim para ele </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ele é um bom cozinheiro, mas se mete demais na vida dos outros, já brigamos varias vezes por ele dizer que eu não fazia direito o meu trabalho. </h5>
                                    </th>
                                </tr>
                            </table>
                        </article>
                    </section>

                    <section class="slider-item4">
                        <h3>Esposa da vitima</h3>
                        <article>
                            <img src="../img/imagens-detetive/mulher.png" alt="">
                            <table class="wi-100 pd-top-5">
                                <tr>
                                    <td class=" pd-top-3 pd-bt-3 ">
                                        <h3> Sobre a Vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre sua casa </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Onde Estava </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre o cozinheiro </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre o filho da vitima </h3>
                                    </td>
                                    <td class="pd-top-3 pd-bt-3">
                                        <h3> Sobre a faxineira </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ele era um homem justo e hosneto, mas tinha uma personalidade bem explosiva, já discutimos bastante, muitas vezes por motivo nenhum. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Era um lugar ótimo de se morar, tinha tudo que uma pessoa precisava para ser feliz além de termos um cozinheiro incrivel e uma faxineira maravilhosa. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Fui no salão de beleza com a faxineira que é uma amiga ate que intima minha. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ele é um cozinheiro maravilhoso, não tenho o que reclamar dele, já que ele também faz o trabalho de babá cuidando do meu enteado. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ele é maravilhoso, muito engraçado e inteligente, mas mal educado as vezes então tinha que sempre estar puxando a orelha dele, ele também não é muito dedicado a seus estudos. </h5>
                                    </th>
                                    <th class="pd-top-3 pd-bt-3">
                                        <h5> Ela é uma amiga maravilhosa, conheço ela deste os tempos do colegio, ela estava desempregada então ofereci o emprego já que está vaga estava livre, foi uma ótima decisão na minha opinião. </h5>
                                    </th>
                                </tr>
                            </table>
                        </article>
                    </section>
                </section>

                <div>

                    <select name="cumplice" id="" class="mg-top-5 mg-rt-5 wi-15 blue">
                        <option value="" checked> Quem é a cumplice?</option>
                        <option value="cumplice-filho">Filho</option>
                        <option value="cumplice-faxineira">Faxineira</option>
                        <option value="cumplice-cozinheiro">Cozinheiro</option>
                        <option value="cumplice-esposa">Esposa</option>
                    </select>


                    <select name="assassino" id="" class="mg-top-5 mg-bt-5 mg-lf-5 wi-15 red">
                        <option value="" checked> Quem é o assassino(a)?</option>
                        <option value="assassino-filho">Filho</option>
                        <option value="assassino-faxineira">Faxineira</option>
                        <option value="assassino-cozinheiro">Cozinheiro</option>
                        <option value="assassino-esposa">Esposa</option>
                    </select>
                </div>

                <input type="submit" class="wi-15 mg-bt-5" value="Enviar">
            </section>
        </form>
    </main>







</body>

</html>
