<?php

    class trabajo{

        public $h;
        public $s;

        public function Show(){
            $salariobruto = $this -> h * $this -> s;
            $descuento = 0.2;
            $desc = $descuento * $salariobruto;
            $salarioneto = $salariobruto - $desc;
            return "<h2> Horas trajadas: ". $this->h ."</h2>". "<h2> tienen un valor de ". $this->s . " $ </h2>" ."Salario bruto: ".$salariobruto. "$ y el salario neto: ". $salarioneto. "$";
        }        

        #sh de seteo de horas
        public function sh($h){
            $this->h = $h;
        }

        #gh de get de horas
        public function gh($h){
            return $this->h;
        }

        #ss de seteo de salario
        public function ss($s){
            $this->s = $s;
        }
        
        #gs de get de salario
        public function gs($s){
            return $this->s;
        }

    }

?>