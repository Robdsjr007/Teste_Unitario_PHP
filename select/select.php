<?php
    require '../conexao.php';
    $conexao = conectar();
    
    $sql = "SELECT * FROM tbl_produtos";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {
        $nomeProduto = $registro['nomeProduto'];
        $cv = $registro['cv'];
        echo "Usuário n°: $nomeProduto e sua senha é: $cv";
        echo "<BR>";
    }

    fecharConexao($conexao);
?>