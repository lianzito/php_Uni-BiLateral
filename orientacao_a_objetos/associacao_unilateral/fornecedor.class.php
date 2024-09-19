<?php
   class Fornecedor {
       public function __construct(private string $razaoSocial = "", private string $nomeFantasia = "", private string $cnpj = "", private string $telefone = ""){}

       public function getRazaoSocial(){
           return $this->razaoSocial;
       }

       public function getNomeFantasia(){
        return $this->nomeFantasia;
       }

       public function getCnpj(){
        return $this->cnpj;
       }

       public function getTelefone(){
        return $this->telefone; 
       }
   }

?>