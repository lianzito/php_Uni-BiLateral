<?php
//classes Final não pode ter filho
final class Poupanca extends Conta{
        public function __construct(private int $aniversario = 0, $agencia, $numero, $titular, $saldo){
            parent:: __construct($agencia, $numero, $titular, $saldo);
        }

        public function getAniversario(){
            return $this->aniversario;
        }

        public function setAniversario($aniversario){
           $this->aniversario = $aniversario;
        }

        public function retirar($valor){
            $data_atual = explode("/",date("d/m/Y"));
            if($this->aniversario > $data_atual[0]){
                echo "Você perderá os rendimentos: "; 
            }
                if($this->saldo >= $valor){
                    parent:: retirar($valor);
                    echo "Sua poupança restante é de: R$";
                }else{
                    echo "Saldo Insuficiente na poupança";
                } 
        }
    }
 ?>   