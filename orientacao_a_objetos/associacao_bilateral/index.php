<?php
    // um produto, quais fornecedores fornecem
    require_once "produto.class.php";
    require_once "fornecedor.class.php";

    $produto1 = new Produto("Caderno capa dura", "Caderno capa dura 12 matérias", 24.90, 1000);
    $produto2 = new Produto("Caderno capa mole", "Caderno capa mole 10 matérias", 18.90, 1000);

    $fornecedor = new Fornecedor("Tilibra", "Tilibra", "11.111.111/001-23", "(14)99028922", array($produto1, $produto2));

    $produto3 = new Produto("Agenda", "Agenda 2024", 29.90, 200);
    $fornecedor->setProduto($produto3);

    //echo"<pre>";
    //var_dump($fornecedor);
    //echo"</pre>";

    echo "<h3>Fornecedor</h3>";
    echo "Razão Social: {$fornecedor->getRazaoSocial()}<br>";
    echo "Nome Fantasia: {$fornecedor->getNomeFantasia()}<br>";
    echo "CNPJ: {$fornecedor->getCnpj()}<br>";
    echo "Telefone: {$fornecedor->getTelefone()}<br>";

    echo "<h4>Produtos</h4>";

    foreach($fornecedor->getProduto() as $produto){
        echo "Nome: {$produto->getNome()}<br>";
        echo "Descrição: {$produto->getDescricao()}<br>";
        echo "Preço: ". number_format($produto->getPreco(), 2, ", ", ".",) . "<br>";
        echo "Estoque: {$produto->getEstoque()}<br><br>";
    }

    // um produto, quais fornecedorees o fornece

    $fornecedor1 = new Fornecedor("Pilot", "Pilot", "22.222.222/0001-22", "(11)092143709");
    $fornecedor2 = new Fornecedor("Faber Castel", "Faber Castel", "33.333.333/0001-33", "(11)439214903");

    $produto4 = new Produto("Borracha", "Borracha que não borra", 5.90, 2000, array($fornecedor1, $fornecedor2));
    
    echo "<h3>Produto</h3>";
    echo "Nome: {$produto4->getNome()}<br>";
    echo "Descrição: {$produto4->getDescricao()}<br>";
    echo "Preço: ". number_format($produto4->getPreco(), 2, ", ", ".",) . "<br>";
    echo "Estoque: {$produto4->getEstoque()}<br><br>";

    echo "<h4>Fornecedores do Produto</h4>";

    foreach ($produto4->getFornecedor() as $objeto){
        echo "Razão Social: {$objeto->getRazaoSocial()}<br>";
        echo "Nome Fantasia: {$objeto->getNomeFantasia()}<br>";
        echo "CNPJ: {$objeto->getCnpj()}<br>";
        echo "Telefone: {$objeto->getTelefone()}<br><br>";
    }
?>