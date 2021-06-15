<?php

require 'app.php';

function includeTemplate(string $nombre, bool $profesional = false){
    include TEMPLATES_URL . "/${nombre}";
}