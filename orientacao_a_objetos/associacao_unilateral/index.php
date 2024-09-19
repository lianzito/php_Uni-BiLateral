<?php
   require_once "produto.class.php";
   require_once "fornecedor.class.php";

   $fornecedor = new Fornecedor("Faber Castel", "Faber Castel", "11.111.111/001-21", "(11)91248-1243"); 

   $produto = new Produto("Régua T", "Régua de engenharia 60cm", 36.90, 1000, $fornecedor);

   echo"<pre>";
   var_dump($produto);
   echo"</pre>";

?>