<?php
    class Empleado{
        private $sueldo;
        private $sueldoTotal;
        private $nombre;
        public $horas;
        public function __construct($n,$h,$s,$st){
            $this->nombre = $n;
            $this->horas = $h;
            $this->sueldo = $s;
            $this->sueldoTotal = $st;
        }
        public function getNombre($n){
            return $this->nombre;
        }
        public function getHoras($h){
            return $this->horas;
        }
        public function getSueldo($s){
            return $this->sueldo;
        }
        public function getSueldoTotal($st){
            return $this->sueldoTotal;
        }
    }
?>