<?php


$servidor = "127.0.0.1"; 
$user = "root";
$pass = ""; 
$bd = "infoenglish"; 

$mysqli; 

    function abrirConexao(){

        global $servidor,$user,$pass,$bd,$mysqli; 

        $mysqli = new mysqli($servidor,$user,$pass,$bd); 

        if($mysqli->connect_errno){ 
            die("Não foi possivel conectar com o banco de dados!");

        }
        else{
            
        }

    }

     function fecharConexao(){
        
        global $mysqli;
        $mysqli->close();

    }

    


?>