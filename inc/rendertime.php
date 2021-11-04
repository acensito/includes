<?php
//funcion php que muestra el tiempo que tarda en cargar la página
$end = microtime(true);
$renderized = ($end - $start);
printf("Página renderizada en %.6f segs.", $renderized);
?>