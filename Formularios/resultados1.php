<?php
    echo 'Profesor: '.$_GET['profesores'].'<br>';
    echo 'Horas: '.$_GET['horas'].'<br>';
    if /*(isset($_GET['asignatura']))*/(!empty($_GET['asignatura']))
        echo 'Asignatura: '.$_GET['asignatura'].'<br>';
    else 
        echo '*Asignatura vacía*<br>';
    echo 'Informacion: '.$_GET['info'].'<br><br>';

    echo var_dump($_GET);
    echo '<br><br>';
    echo print_r($_GET);
?>