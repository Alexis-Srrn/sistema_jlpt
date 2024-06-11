<?php
include("encabezados.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Ejercicio 5</title>
  </head>
  <body>


    <div class="container-content">
        <article class="">

          <h1>Quiz Ejercicio 5</h1>

          <p>En su día a día Rhodofe está ocupada haciendo, y no haciendo actividades específicas. Sus amigos Alicia y Takeshi se acercan de vez en cuando para cerciorarse de lo que en realidad hace, por lo que ella tiene que aprender a dominar el uso de los verbos tanto en positivo, como en negativo.</p>
          <p>Nota: Para ayudar mejor a Rhodofe recuerda la direncia de [うん] y [ううん], pues con ello sabrás si la oración es o no negativa.</p>



          <p class="leccion">Vocabulario:</p>

          <ul>
              <li>  <b>ロドフェ</b> - La forma de escribir Rhodofe en Katakana</li>
              <li>うん - sí</li>
              <li>ううん - no</li>
              <li>  する -hacer</li>
              <li>  しゃべる - hablar; charlar</li>
              <li>  見る【みる】 - ver</li>
              <li>  来る【くる】 - llegar</li>
              <li>  行く【いく】 - ir</li>
              <li>  帰る 【かえる】 - volver a casa</li>
              <li>  食べる 【たべる】 - comer</li>
              <li>  飲む 【のむ】 - beber</li>
              <li>  買う 【かう】 - comprar</li>
              <li>  売る 【うる】 - vender</li>
              <li>  切る 【きる】 - cortar</li>
              <li>  入る 【はいる】 - entrar</li>
              <li>  出る 【でる】 - salir</li>
              <li>  持つ 【もつ】 - tener, llevar</li>
              <li>  待つ 【まつ】 - esperar</li>
              <li>  書く【かく】 - escribir</li>
              <li>  読む 【よむ】 - leer</li>
              <li>  歩く 【あるく】 - andar</li>
              <li>  走る 【はしる】 - correr</li>
              <li>  遊ぶ 【あそぶ】 - jugar</li>
          </ul><br><br>

          <p>Ahora selecciona la respuesta que creas correcta aquí abajo y luego haz click en «Verificar respuestas».</p>
          <p>Recuerda: Las preguntas correctas se marcarán en azul y las erróneas en rojo. Puedes intentarlo cuantas veces quieras o, si es necesario, volver a consultar la lección.</p>
          <p>**********</p>
          <br>


          <section>

          <form name="quizForm" onsubmit="return verificarRespuestas()">



            <p id="Pregunta1">1: ¿Escribiendo una carta?</p>
            <p>アリス）手紙 を 書く の？</p>
            <p>ロドフェ）ううん, 手紙 を______。</p> </br>
            <input type="radio" name="p1" value="-">a. 書く。 </br>
            <input type="radio" name="p1" value="x">b. 書かない。 </br>
            <input type="radio" name="p1" value="-">c. 遊ぶ。</br>
            <input type="radio" name="p1" value="-">d. 遊ばない。</br>

            <p id="Pregunta2">2. ¿Leyendo una revista?</p>
            <p>アリス）雑誌 を 読む の？</p>
            <p>ロドフェ）うん, 雑誌 を ______。</p></br>

            <input type="radio" name="p2" value="-">a. 見ない。 </br>
            <input type="radio" name="p2" value="-">b. 読まない。 </br>
            <input type="radio" name="p2" value="-">c. 見る。</br>
            <input type="radio" name="p2" value="x">d. 読む。 </br>


            <p id="Pregunta3">3. ¿Jugar con un gato?</p>
            <p>アリス）猫 と 遊ぶ の？</p>
            <p>ロドフェ）　うん, 猫 と_____。 たのしい！</p></br>
            <input type="radio" name="p3" value="x">a. 遊ぶ。</br>
            <input type="radio" name="p3" value="-">b. 遊ばない。</br>
            <input type="radio" name="p3" value="-">c. 歩く。</br>
            <input type="radio" name="p3" value="-">d. 歩かない。</br>


            <p id="Pregunta4">4. ¿Comer arroz?</p>
            <p>武）ごはん を 食べる か？</p>
            <p>ロドフェ） ううん, ごはん を _____。</p>
            </br>
            <input type="radio" name="p4" value="-">a. 食べる。 </br>
            <input type="radio" name="p4" value="-">b. 見る。 </br>
            <input type="radio" name="p4" value="x">c. 食べない。</br>
            <input type="radio" name="p4" value="-">d. 見ない。 </br>


            <p id="Pregunta5">5. ¿Comprando una bebida?</p>
            <p>武）飲み物 を 買う か？</p>
            <p>ロドフェ）うん, 飲み物 を_____。コーヒーです。</p>
            <input type="radio" name="p5" value="-">a. 食べる。 </br>
            <input type="radio" name="p5" value="x">b. 買う。</br>
            <input type="radio" name="p4" value="-">c. 食べない。</br>
            <input type="radio" name="p5" value="-">d. 買わない。</br>


            <p id="Pregunta6">6. ¿Estudiar (literal, hacer estudio)?</p>
            <p>武）勉強 を する の？</p>
            <p>ロドフェ）ううん,　勉強 を________。</p></br>
            <input type="radio" name="p6" value="-">a. する。 </br>
            <input type="radio" name="p6" value="-">b. 買う。</br>
            <input type="radio" name="p6" value="x">c. しない。</br>
            <input type="radio" name="p6" value="-">d. 買わない。</br>


            <p id="Pregunta7">7.  ¿Llevar libros?</p>
            <p>武）本 を 持つ か？</p></br>
            <p>ロドフェ）ううん, 本 を______。新聞 です。 </p>
            <input type="radio" name="p7" value="-">a. 来る。 </br>
            <input type="radio" name="p7" value="-">b. 持つ。 </br>
            <input type="radio" name="p7" value="-">c. 来ない。</br>
            <input type="radio" name="p7" value="x">d. 持たない。</br>



            <p id="Pregunta8">8. ¿Ver la televisión?</p>
            <p>アリス）テレビ を の 見る？</p>
            <p>ロドフェ）ううん, 　テレビ を______。宿題 を する</p>
            </br>
            <input type="radio" name="p8" value="-">a. 遊ぶ。 </br>
            <input type="radio" name="p8" value="-">b. 見る。 </br>
            <input type="radio" name="p8" value="-">c. 遊ばない。</br>
            <input type="radio" name="p8" value="x">d. 見ない。</br>




            <input type="submit" value="Verificar respuestas">
          </form>
          <div id="resultado"></div>
          </section>
            <br><br>
            <p>Poco a poco tenemos más herramientas para comprender ideas. En la siguiente lección agregaremos un pequeño escalón más: Los verbos en pasado.</p>
            <p>Recuerda que puedes volver a hacer el cuestionario hasta lograr las respuestas correctas o regresar a la lección.
            Cuando estés listo te invitamos a continuar con la lección 6.</p>


          <a href="../leccion_5.php"><input type="button" value="Regresemos a la leccion 5"></a>
          <a href="lista-ejercicios.php"><input type="button" value="Lista de ejercicios"></a>
          <a href="../leccion_6.php"><input type="button" value="¡Lección 6!"></a>

          </article>

        <div class="container-aside">
          <aside>
              <img src="../../../img/ajatt/jisho.png" alt="">
              <h2>Diccionario Online</h2>
              <p>Jisho es un excelente diccionario que te ayudará mucho a lo largo de tu estudio.
                No solo encontrarás cualquier palabra, sino que muestra oraciones de ejemplo, el kanji que se usa en su escritura
                 y la forma correcta de escribirlo. También puedes buscar una palabra por el número
                  de radicales, lo cual facilita la consulta como ninguna otra página.
              </p>
              <a href="https://jisho.org/" target="_blank"><button>Ir a Jisho.org</button> </a>
          </aside>

          <aside>
              <img src="../../../img/ajatt/todai.png" alt="">
              <h2>El periódico en tu celular</h2>
              <p>La universidad de Todai nos ofrece esta divertida aplicación para móviles.
                Se actualiza a diario con noticias reales y puedes consultar la traducción de los artículos,
                todos pensados para alguien que está aprendiendo. También ofrece un simulador
                del examen de certificación del idioma, conocido como JLPT.
              </p>
              <a href="https://play.google.com/store/apps/details?id=mobi.eup.jpnews&hl=es_MX&gl=US" target="_blank"><button>Descarga Todai</button> </a>
          </aside>

          <aside>
              <img src="../../../img/ajatt/animelon.png" alt="">
              <h2>¿Te gusta la animación japonesa?</h2>
              <p>Es bien sabido que la gran mayoría de estudiantes del idioma son fanáticos de las animaciones
                conocidas como <b>«Anime».</b> Si es tu caso, Animelon es para ti. Disfruta de todo tipo de series subtituladas
                 en su idioma original (kana y kanji), puedes consultar la gramática frase a frase y tienes la
                 facilidad de copiarlas para crear tus propias tarjetas de estudio.
                Aprende mientras disfrutas de lo que más te gusta.
              </p>
              <a href="https://animelon.com/" target="_blank"><button>Visita Animelon</button> </a>
          </aside>


        </div>

    </div>


    <div class="container-footer">
        <footer>
          <div class="logo-footer">
              <img src="../../../img/logo-ajatt.png" alt="">
          </div>

          <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
          </div>

          <hr>
          <h4>@ 2021 Alexis Serrano Guirao Buap -- Ninguna imagen aquí mostrada es de autoría propia</h4>

        </footer>
    </div>
<script src="../../../js/script-main.js"></script>
<script src="../../../js/script-ejercicio.js"></script>
  </body>
</html>
