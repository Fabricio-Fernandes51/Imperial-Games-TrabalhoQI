<?php

session_start();

include '../model/jogos.class.php';


switch ($_GET['op']) {
    case 'q1':

        $jogos = new jogos;

        if ($jogos->java = $_POST['java'] == 'Java') {
            $jogos = new jogos;
            $jogos->julia = $_POST['julia'];

            $_SESSION['msg'] = '2/5';
            $_SESSION['img'] = 'src="../../img/imagens-quiz/julia.png"';
            $_SESSION['form'] = '
        <form action="../../controller/quiz.controller.php?op=q2" method="POST" class="wi-100 he-100 font-fantasy">
        <article class="pd-lf-45">
            <div class="pd-top-3">
            <input type="radio" name="julia" id="" value="haskell">
            <span>haskell</span>
            </div>
            <div class="pd-top-3">
            <input type="radio" name="julia" id="" value="ocaml">
            <span>ocaml</span>
            </div>
            <div class="pd-top-3">
            <input type="radio" name="julia" id="" value="Julia">
            <span>Julia</span>  
            </div>
            <div class="pd-top-3">
            <input type="radio" name="julia" id="" value="erlang">
            <span>erlang</span>  
            </div>
          </article>  
           <div class="wi-50 pd-lf-45">
          <button class="mg-lf-5 float-cnt mg-top-10 mg-bt-5 wi-15" type="submit">Enviar</button>
      </div>
       </form>
      </section>';
            header("location:../view/resultados/quiz.perguntas.php");
        } else {
            header("location:../view/resultados/quiz.erro.php");
        }
        break;

    case 'q2':


        $jogos = new jogos;

        if ($jogos->julia = $_POST['julia'] == 'Julia') {
            $jogos->kotlin = $_POST['kotlin'];

            $_SESSION['msg'] = '3/5';
            $_SESSION['img'] = 'src="../../img/imagens-quiz/kotlin.png"';
            $_SESSION['form'] = '
        <form action="../../controller/quiz.controller.php?op=q3" method="POST" class="wi-100 he-100 font-fantasy">
        <article class="pd-lf-45 ">
            <div class="pd-top-3">
            <input type="radio" name="kotlin" id="" value="go">
            <span>go</span>
            </div>
            <div class="pd-top-3">
            <input type="radio" name="kotlin" id="" value="Kotlin">
            <span>kotlin</span>
            </div>
            <div class="pd-top-3">
            <input type="radio" name="kotlin" id="" value="swift">
            <span>swift</span>  
            </div>
            <div class="pd-top-3">
            <input type="radio" name="kotlin" id="" value="python">
            <span>python</span>  
            </div>
          </article>   
          <div class="wi-50 pd-lf-45">
          <button class="mg-lf-5 float-cnt mg-top-10 mg-bt-5 wi-15" type="submit">Enviar</button>
      </div>
       </form>
      </section>';
            header("location:../view/resultados/quiz.perguntas.php");
        } else {
            header("location:../view/resultados/quiz.erro.php");
        }

        break;

    case 'q3':


        $jogos = new jogos;

        if ($jogos->java = $_POST['kotlin'] == 'Kotlin') {

            $jogos->python = $_POST['python'];

            $_SESSION['msg'] = '4/5';
            $_SESSION['img'] = 'src="../../img/imagens-quiz/python.png"';
            $_SESSION['form'] = '
            <form action="../../controller/quiz.controller.php?op=q4" method="POST" class="wi-100 he-100 font-fantasy">
            <article class="pd-lf-45">
                <div class="pd-top-3">
                <input type="radio" name="python" id="" value="android">
                <span>android</span>
                </div>
                <div class="pd-top-3">
                <input type="radio" name="python" id="" value="sql">
                <span>sql</span>
                </div>
                <div class="pd-top-3">
                <input type="radio" name="python" id="" value="ruby">
                <span>ruby</span>  
                </div>
                <div class="pd-top-3">
                <input type="radio" name="python" id="" value="Python">
                <span>python</span>  
                </div>
              </article>   
              <div class="wi-50 pd-lf-45">
              <button class="mg-lf-5 float-cnt mg-bt-5 mg-top-10 wi-15" type="submit">Enviar</button>
          </div>
           </form>
          </section>';
            header("location:../view/resultados/quiz.perguntas.php");
        } else {
            header("location:../view/resultados/quiz.erro.php");
        }
        break;

    case 'q4':


        $jogos = new jogos;

        if ($jogos->java = $_POST['python'] == 'Python') {

            $jogos->swift = $_POST['swift'];

            $_SESSION['msg'] = '5/5';
            $_SESSION['img'] = 'src="../../img/imagens-quiz/swift.png"';
            $_SESSION['form'] = '
            <form action="../../controller/quiz.controller.php?op=resultado" method="POST" class="wi-100 he-100 font-fantasy">
            <article class="pd-lf-45">
                <div class="pd-top-3">
                <input type="radio" name="swift" id="" value="go">
                <span>go</span>
                </div>
                <div class="pd-top-3">
                <input type="radio" name="swift" id="" value="Swift">
                <span>swift</span>
                </div>
                <div class="pd-top-3">
                <input type="radio" name="swift" id="" value="kotlin">
                <span>kotlin</span>  
                </div>
                <div class="pd-top-3">
                <input type="radio" name="swift" id="" value="python">
                <span>python</span>  
                </div>
              </article>   
              <div class="wi-50 pd-lf-45">
              <button class="mg-lf-5 float-cnt mg-bt-5 mg-top-10 wi-15" type="submit">Enviar</button>
          </div>
           </form>
          </section>';
            header("location:../view/resultados/quiz.perguntas.php");
        } else {
            header("location:../view/resultados/quiz.erro.php");
        }

        break;
    case 'resultado':
        $jogos = new jogos;

        if ($jogos->java = $_POST['swift'] == 'Swift') {
            header("location:../view/resultados/quiz.acerto.php");
        } else {
            header("location:../view/resultados/quiz.erro.php");
        }
}
