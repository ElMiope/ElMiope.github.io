<?php
    include_once("class.php");
    $n=$_POST['nombre'];
    $h=$_POST['horas'];
    $s=$_POST['sueldo'];
    $st=$_POST['sueldoTotal'];
    $empleado=new Empleado($n,$h,$s,$st);
    echo("El empleado ".$empleado->getNombre($n)." trabajó ".$empleado->getHoras($h)." esta semana. cobra un sueldo de ".$empleado->getSueldo($s)." por hora, y cobra ".$empleado->getSueldoTotal($st));
?>