<?php

    class Conexao {
        public function connectDB(){
            try{
                $Con= new PDO("mysql:host=localhost; dbname=crud-php", "root", "");
                return $Con;
            }catch (PDOException $Erro){
                return $Erro->getMessage();
            }
        }
    }