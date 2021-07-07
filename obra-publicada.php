
<?php 

require 'includes/functions.php';

includeTemplate('header.html',false);

?>
    <div id="profesional" class="internas">
    <div class="menu-diagonal">
        <?php 
            includeTemplate('menu.php',true);
            includeTemplate('menu-lateral.php',false);
        ?>
    </div>
        <div class="contenedor">
           <div class="layout right ">
                <div class="enlaces">
                    <a href="academico.php">Acádemico</a>
                    <a class="underline" href="profesional.php">Profesional</a>
                </div>
                <div id="Obra" class="columna contenido-interno tabcontent">
                    <div class="titulos-intermedios">
                    <h3>
                        Algunos libros y revistas donde se ha publicado y comentado su obra
                    </h3>
                </div>
                <div class="columnas ">
                    <div class="linea-del-tiempo">
                        <div class="proyecto-anio">
                            <h4>2017</h4>
                            <p>
                            Obra de participación <i> EL JUEGO DE LA SUSTENTABILIDAD</i>, 2º Foro Internacional de Desarrollo Sustentable, Edificio W, UAM A.  
                            </p>
                            <img src="build/img/obra/libro_sn.png" alt="libro">
                        </div>
                    </div>
                    <div class="linea-del-tiempo">
                        <div class="proyecto-anio">
                            <h4>2008</h4>
                            <p>
                                <i>Cuetzpalin ROJO</i>, instalación y video streaming en la Casa de la Primera Imprenta dentro de los Espacios en Acción, Depto. de Evaluación del Diseño, UAM-A.
                            </p>
                            <img src="build/img/obra/revista_diseño_mas.jpg" alt="diseno">
                        </div>
                    </div>
                    <div class="linea-del-tiempo">
                        <div class="proyecto-anio">
                            <h4>2007</h4>
                            <p>
                            <i>Nuestro negro espejo humeante</i>, performance dentro del Congreso Internacional El Cuerpo Descifrado, org. Varios UAM, UNAM, Instituto de investigaciones Filológicas, Oct.07
                            </p>
                        </div>
                    </div>
                    <div class="linea-del-tiempo">
                        <div class="proyecto-anio">
                            <h4>2005</h4>
                            <p>
                            En el II Congreso Internacional de Artes, Ciencias y Humanidades, El Cuerpo Descifrado, participó con la obra  <i>“Cercenados y mutilados”</i>, Performance-Instalación en el Jardín de San Jerónimo, y registro de la acción en Celda Contemporánea, Universidad del Claustro de Sor Juana, Co-organizado UAM, UAP, Fund. Centro Histórico, Cahctas, Casa Vecina, México, DF.
                            </p>
                        </div>
                    </div>
                    <div class="linea-del-tiempo">
                        <div class="proyecto-anio">
                            <h4>2004</h4>
                            <p>
                            Obra de arte acción (performance) e instalación artística <i>“Cercenados, seres que sufren…”</i> en el marco del Foro Nacional de Arboricultura en la Facultad de Estudios Superiores Iztacala, UNAM, en las áreas verdes del campus, el 24 de mayo de 2004, UNAM, UAM Asociación Nacional de Arboricultura A.C.
                            </p>
                        </div>
                    </div>
                    <div class="linea-del-tiempo">
                        <div class="proyecto-anio">
                            <h4>1979</h4>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Asperiores, tempora pariatur ipsa quidem, accusantium quaerat quisquam 
                                <br><br> sit aliquid tenetur dicta commodi provident doloribus in 
                                perspiciatis iure quod aliquam nemo aspernatur.
                            </p>
                            <div class="coleccion-imagenes">
                            <img src="build/img/obra/auro.jpg" alt="auro">
                            <img src="build/img/obra/auro1.jpg" alt="auro">
                            <img src="build/img/obra/auro4.jpg" alt="auro">
                            </div>
                        </div>
                    </div>

                    <div class="linea-del-tiempo">
                        <div class="proyecto-anio">
                            <h4>1993</h4>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Asperiores, tempora pariatur ipsa quidem, accusantium quaerat quisquam 
                                <br><br> sit aliquid tenetur dicta commodi provident doloribus in 
                                perspiciatis iure quod aliquam nemo aspernatur.
                            </p>
                        </div>
                    </div>
                    <div class="linea-del-tiempo">
                        <div class="proyecto-anio">
                            <h4>1985</h4>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Asperiores, tempora pariatur ipsa quidem, accusantium quaerat quisquam 
                                <br><br> sit aliquid tenetur dicta commodi provident doloribus in 
                                perspiciatis iure quod aliquam nemo aspernatur.
                            </p>
                        </div>
                    </div>
                </div>
                </div>

            </div> 
        </div>

        <footer>
            <div id="contacto" class="footer-interno">
                    <p>
                        Todos los derechos pertenecen al Matro. Mauricio Benito Guerrero Alarcón
                        <br>
                        Sitio por <a href="#">BK Studio</a>
                </p>
            </div>
        </footer> 
    </div>
    <script src="build/js/bundle.js"></script>
</body>
</html>
