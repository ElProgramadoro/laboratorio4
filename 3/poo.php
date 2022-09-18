<?php
    class calculo{

        public $PO,$VU,$DA;

        public function Show(){
            $resultado1 = $this->PO;
            $ELPIPE = $this->DA;
            $ELPEPI = 0;
            ?>
            <table class="default">
            <tr>
                <th>Año</th>
                <th>Valor por año</th>
                <th>Valor recuperado</th>
                <br>
            </tr>

            <?php
            for($a=0;$a<=$this->VU;$a++){

                ?>

                <tr>
                    <td><?php echo $a?></td>
                    <td><?php echo $resultado1?></td>
                    <td><?php echo $ELPEPI ?></td>
                    <br>
                </tr>
            
            <?php
                $resultado1 = $this->PO - $this->DA;
                $valorNuevo = $resultado1;
                $this->PO = $valorNuevo;
                $ELPEPI = $ELPEPI + $ELPIPE;
                }
            ?>
            
            <?php

        }
        #sPO de seteo de precio original
        public function sPO($PO){
            $this->PO = $PO;
        }

        #gPO de get de precio original
        public function gPO($PO){
            return $this->PO;
        }

        #sVU de seteo de vida util
        public function sVU($VU){
            $this->VU = $VU;
        }
        
        #gVU de get de vida util
        public function gVU($VU){
            return $this->VU;
        }

        #sDA de seteo de depresiacion anual
        public function sDA($DA){
            $this->DA = $DA;
        }

        #gDA de get de depresiacion anual
        public function gDA($DA){
           return $this->DA;
        }
    }
?>