<?php
    require_once "conta.class.php";
    require_once "poupanca.class.php";
    require_once "corrente.class.php";

    //Corrente
    $corrente = new Corrente(1000.00, "123-2", "12345-6", "Marcelo da Silva", 5000.00);

    echo "{$corrente->getTitular()}<br>";
    $corrente->retirar(3000);

    echo "{$corrente->getSaldo()}<br>";

    //Poupança
    $poupanca = new Poupanca(1, "432-1", "6543-2", "Bruno Lallo", 10000.00);
    $poupanca->retirar(1000.00);
    
    echo "{$poupanca->getSaldo()}<br>";

    /*$conta = new Conta();
    echo "<pre>";
    var_dump($corrente);
    echo "</pre>";*/
?>