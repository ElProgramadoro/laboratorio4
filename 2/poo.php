<?php

    class trabajo{
#h=f y s=m
        public $f;
        public $m;

        public function Show(){
            $cantidad = $this->f+ $this->m;
        $pm= ($this->m/$cantidad)*100;
        $pf= ($this->f/$cantidad)*100;
        return 
        
        "<table class='table table-light table-striped'>
        <tr>
            <th>Niñas</th>
            <th>Niños</th>
        </tr>
        <tr>
            <th><h2>" .round($pf, 2) ."%</h2></th>
            <th><h2>" .round($pm, 2) ."%</h2></th>
        </tr>
        </table>";
        }        

        #sh de seteo de niñas
        public function sf($f){
            $this->f = $f;
        }

        #gh de get de horas
        public function gf($f){
            return $this->f;
        }

        #ss de seteo de salario
        public function sm($m){
            $this->m = $m;
        }
        
        #gs de get de salario
        public function gm($m){
            return $this->m;
        }

    }

?>