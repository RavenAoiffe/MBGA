<?php  
  $url =  $_SERVER['REQUEST_URI'];

  if(strpos($url, "profesional") !== false) {
      $menu = true;
      $internas = true;
  }
  else{
    $menu = false;
    $internas = false;
  }
  /*var_dump("<pre>");
  var_dump($var);
  var_dump("</pre>");*/
?>
<nav>
        <div class="contenedor navegador">
        <div class="logo-nombre <?php echo $internas===true? 'row-flex' : '' ?>">
            <img src="build/img/logos/logo_svg.svg" alt="logo">
            <h2>Mauricio Guerrero</h2>
        </div>
        <div class="menu-movil">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="enlaces">
            <a href="#">Académico</a>
            
            <a href="profesional.php" <?php echo $menu===true? 'class="underline"' : '' ?>>Profesional</a> 
        </div>
    </div>
</nav>