<?php
    use app\libraries\Consulta; 
    require '../../class\Consulta.php';
    require '../conexao.php';
    $conexao = conectar();
    
    $sql = "SELECT * FROM Consulta";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";

    $listaConsulta = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {

        $numeroConsulta = $registro['numeroConsulta'].
        $data = $registro['data'];
        $hora = $registro['hora'];
        $agendamento = $registro['agendamento'];
        $medico = $registro['medico'];
        $paciente = $registro['paciente'];

        $p = new Consulta($numeroConsulta, $data, $hora, $agendamento, $medico, $paciente);
    
        array_push($listaConsulta, $p);
    }
    
    $lista_json = json_encode($listaConsulta);
    
    fecharConexao($conexao);
    
    echo $lista_json;
?>