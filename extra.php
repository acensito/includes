<?php
    //incluyendo y cambiando contenido en una misma página con GET
    $secciones = array('about', 'header', 'welcome'); 
    $page = ( isset($_GET['page']) ) ? $_GET['page'] : 'welcome';
    if ( in_array($page, $secciones) ) {
        include("$page.php");
    } else {
        include('404.php');
    }
?>