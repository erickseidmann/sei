<?php
include 'conexao.php'; // Arquivo de conexão

// Recebe os dados enviados pelo AJAX
$professorId = $_POST['professorId'];
$rowData = json_decode($_POST['rowData'], true); // Converte a string JSON de volta para um array associativo

// Prepara a declaração SQL para inserção
$sql = "INSERT INTO agenda (professor_id, hora, dia_semana, status, app, observacoes) 
        VALUES (?, ?, ?, ?, ?, ?)";

// Prepara e executa a declaração para cada linha de dados
$stmt = $conn->prepare($sql);
foreach ($rowData as $row) {
    $stmt->bind_param("isssss", $professorId, $row['hora'], $row['diaSemana'], $row['status'], $row['app'], $row['observacoes']);
    $stmt->execute();
}

// Verifica se a inserção foi bem-sucedida
if ($stmt->affected_rows > 0) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar os dados: " . $conn->error;
}

// Fecha a declaração e a conexão
$stmt->close();
$conn->close();
?>
