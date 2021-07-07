
<?php
    /* Leer URL, Si es exposiciones añadir show al dropdown ..etc*/
    $url = "$_SERVER[REQUEST_URI]";

        $profesional = strpos($url,'profesional');
        $obra = strpos($url,'obra');
        $proyectos = strpos($url,'proyectos');

    ?>
<div class="contenedor">
    <div class="columna navegador-rapido">
        <div class="navegacion-lateral ">
            <a href="profesional.php" class="">
                <h3>Expocisiones</h3>
            </a>
            <div <?php echo $profesional !== false ?  'class="dropdown"' : 'class="hidden"'?> >
                <a href="#" class="acordeon tablinks ancla"> Individual </a>
                    <div class="hidden individual">
                        <a class="activo ancla" href="#individual">
                        <span ></span>
                        Actualidad - 2000
                        </a>
                        <a href="#milnovecientos" class="ancla">
                        <span></span>
                        1999 -1978
                        </a>
                    </div>
                <a href="#" class="acordeon tablinks"> Colectivo</a>
                    <div class="hidden colectivo">
                        <a class="activo ancla"  href="#Colectivas">
                            <span ></span>
                            Otros
                        </a>
                        <a  href="#solidarte" class="ancla">
                            <span></span>
                            Solidarte
                        </a>
                        <a  href="#correo" class="ancla">
                            <span></span>
                            Arte Correo
                        </a>
                        <a  href="#marco" class="ancla">
                            <span></span>
                            Grupo Marco
                        </a>
                        <a  href="#fax" class="ancla">
                            <span></span>
                            Arte Fax
                        </a>
                        <a  href="#tetraedro" class="ancla">
                            <span></span>
                            Grupo Tetraedro
                        </a>
                    </div>
            </div>
        </div>
        <div class="navegacion-lateral ">
            <a href="obra-publicada.php" class="acordeon tablinks">
                <h3>Obra publicada</h3>
            </a>
            <div <?php echo $obra !== false ?  'class="dropdown obra"' : 'class="hidden"'?> >
                <a class="activo ancla obra"  href="#Colectivas">
                    <span ></span>
                    Actualidad - 2011
                </a>
                <a  href="#solidarte" class="ancla">
                    <span></span>
                    2010 - 1990
                </a>
                <a  href="#correo" class="ancla">
                    <span></span>
                    1989 - 1976
                </a>
            </div>
        </div>
        <div class="navegacion-lateral ">
            <a  href="proyectos.php" class="acordeon tablinks">
                <h3>Proyectos</h3>
            </a>
            <div <?php echo $proyectos !== false ?  'class="dropdown"' : 'class="hidden"'?> >
                <a class="activo"  href="#">
                <span ></span>
                    Arte Correo
                </a>
                <a href="#">
                <span></span>
                    Arte Fax
                </a>
                <a href="#">
                <span></span>
                    Expocisiones
                </a>
                <a href="#">
                <span></span>
                    Instalación y Performance
                </a>
                <a href="#">
                <span></span>
                    Actividades en grupo
                </a>
                <a href="#">
                <span></span>
                    Proyectos en proceso
                </a>
            </div>
        </div>
        <div class="navegacion-lateral ">
            <a href="#">
                <h3>Contacto</h3>
            </a>
        </div> 
    </div>         
</div>
