<?php
    use app\libraries\Especialidade; 
    require '../../class\Especialidade.php';
    require '../conexao.php';
    $conexao = conectar();
    
    $sql = "SELECT * FROM Especialidade";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    $listaEspecialidade = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {

        $numeroRegistro = $registro['numeroRegistro'];
        $nomeEspecialidade = $registro['nome'];
        $publicoAlvoEspecialidade = $registro['publicoAlvo'];

        $p = new Especialidade($numeroRegistro, $nomeEspecialidade, $publicoAlvoEspecialidade);
    
        array_push($listaEspecialidade, $p);
    }
    
    $lista_json = json_encode($listaEspecialidade);
    
    fecharConexao($conexao);
    
    echo $lista_json;
?>