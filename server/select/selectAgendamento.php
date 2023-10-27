<?php
    use app\libraries\Agendamento; 
    require '../../class\Agendamento.php';
    require '../conexao.php';
    $conexao = conectar();
    
    $sql = "SELECT * FROM Agendamento";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar Agendamentor");

    // quantos itens existem na tabela 
    $lin = mysqli_num_rows($res);

    // número de linhas encontradas
    echo "$lin registros encontrados";
    echo "<BR>";
    echo "<BR>";
    
    $listaAgendamento = [];
    // Apresentar os registros
    while ($registro = mysqli_fetch_array($res)) {
        $numeroAgendamento = $registro ['numeroAgendamento'];
        $data = $registro ['data'];
        $hora= $registro ['hora'];
        $gravidade = $registro ['gravidade'];

        $p = new Agendamento($numeroAgendamento, $data, $hora, $gravidade );
    
        array_push($listaAgendamento, $p);
    }
    
    $lista_json = json_encode($listaAgendamento);
    
    fecharConexao($conexao);
    
    echo $lista_json;

?>