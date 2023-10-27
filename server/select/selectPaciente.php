<?php
    use app\libraries\Paciente; 
    require '../../class\Paciente.php';
    require '../conexao.php';
    $conexao = conectar();
    
    $sql = "SELECT * FROM Paciente";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    $listaPaciente = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {

        $numeroBeneficiario = $registro['numeroBeneficiario'];
        $nomePaciente = $registro['nome'];
        $enderecoPaciente = $registro['endereco'];
        $telefonePaciente = $registro['telefone'];

        $p = new Paciente($numeroBeneficiario, $nomePaciente, $enderecoPaciente, $telefonePaciente);
    
        array_push($listaPaciente, $p);
    }
    
    $lista_json = json_encode($listaPaciente);
    
    fecharConexao($conexao);
    
    echo $lista_json;
?>