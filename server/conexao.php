<?php
    // parâmetros
    conectar();

    function conectar(){
        $host = 'localhost';
        $usuario = 'root';
        $senha = '';
        $bd = 'bd_clinica';

        // realizar a conexão 
        $conection = mysqli_connect($host, $usuario, $senha, $bd);
        return $conection;
    }

    if ($conection->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    } else {
        echo "conexão bem sucedida!";
    }
 
    function fecharConexao($conexao){
        mysqli_close($conexao);
    }
  
    

?>