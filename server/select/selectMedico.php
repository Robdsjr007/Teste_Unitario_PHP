<?php
    use app\libraries\Medico; 
    require '../../class\Medico.php';
    require '../conexao.php';
    $conexao = conectar();
    
    $sql = "SELECT * FROM Medico";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    $listaMedico = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {

        $CRM = $registro['CRM'];
        $nomeMedico = $registro['nome'];
        $telefoneMedico = $registro['telefone'];
        $enderecoMedico = $registro['endereco'];
        $especialidade = $registro['especialidade'];

        $p = new Medico($CRM, $nomeMedico, $telefoneMedico, $enderecoMedico, $especialidade);
    
        array_push($listaMedico, $p);
    }
    
    $lista_json = json_encode($listaMedico);
    
    fecharConexao($conexao);
    
    echo $lista_json;
?>