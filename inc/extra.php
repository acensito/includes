<?php
    //incluyendo y cambiando contenido en una misma página con GET
    $secciones = array('about', 'welcome'); 
    $page = ( isset($_GET['page']) ) ? $_GET['page'] : 'welcome';
    if ( in_array($page, $secciones) ) {
        include("./assets/$page.php");
    } else {
        include('404.php');
    }
?>