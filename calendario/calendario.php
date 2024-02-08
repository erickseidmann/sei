<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <meta name="description" content="pagina de registro de aulas">
    <meta name="author" content="Erick Seidmann">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="styles/calendario.css">
    <link rel="stylesheet" href="styles/calendario-large.css">
</head>
<body>
    <!--start of the tag header-->
    <header>
        <!-- aqui vai ficar a imagem-->
        <img src="styles/image/nav6.png" alt="tres logos juntos">
    </header>
    <!--the end of the tag header-->
    <button id="menu"></button><!--hamburguer--> 
    <nav>
        <ul class="navigation">
            <li><a href="#">Home</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Class Records</a></li>
            <li><a href="#">Schedule</a></li>
            <li><a href="#">Trainings</a></li>
            <li><a href="#">Books</a></li>
        </ul>  
    </nav>
    <!--the start of the tag main-->
    <main>
        <h2>Calendario</h2>
        <div style="overflow-x: auto;">
            <div style="max-height: 400px; overflow-y: scroll;">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-title">
                            <tr>
                                <th scope="col">Horário</th>
                                <th scope="col" class="segunda">Segunda-feira</th>
                                <th scope="col">Status</th>
                                <th scope="col">Horário</th>                           
                                <th scope="col" class="terca">Terça-feira</th>
                                <th scope="col">Status</th>
                                <th scope="col">Horário</th>
                                <th scope="col" class="quarta">Quarta-feira</th>
                                <th scope="col">Status</th>
                                <th scope="col">Horário</th>
                                <th scope="col" class="quinta">Quinta-feira</th>
                                <th scope="col">Status</th>
                                <th scope="col">Horário</th>
                                <th scope="col" class="sexta">Sexta-feira</th>
                                <th scope="col">Status</th>
                                <th scope="col">Horário</th>
                                <th scope="col" class="sabado">Sábado</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Defina os horários de início e fim (6h às 22h) com intervalos de 30 minutos
                            $horarios = array_map(function($hora) { return str_pad($hora, 2, "0", STR_PAD_LEFT); }, range(6, 21));
                            $horarios[] = '22';

                            foreach ($horarios as $hora) {
                                // Loop para os 2 intervalos de 30 minutos
                                for ($i = 0; $i < 2; $i++) {
                                    $minutos = str_pad($i * 30, 2, "0", STR_PAD_LEFT);
                                    $horaCompleta = "$hora:$minutos";
                                    echo "<tr>";
                                    echo "<td>$horaCompleta</td>";

                                    // Loop para os dias da semana
                                    $diasSemana = ["segunda", "terca", "quarta", "quinta", "sexta", "sabado"];
                                    foreach ($diasSemana as $dia) {
                                        echo "<td class='$dia'>";
                                        echo "<select name='aluno'><option value=''>Selecione um aluno</option>";
                                        require_once 'config.php';
                                        $sql = 'SELECT nome_completo, email FROM formulario';
                                        $result = $conn->query($sql);
                                        $alunos = array();
                                        while ($row = $result->fetch_assoc()) {
                                            $nomeAluno = $row['nome_completo'];
                                            $emailAluno = $row['email'];
                                            $alunos[$nomeAluno] = $emailAluno;

                                            
                                        }
                                        ksort($alunos);
                                        $contador = 1;
                                        foreach ($alunos as $nomeAluno => $emailAluno) {
                                            echo "<option value='$nomeAluno'>$contador.$nomeAluno</option>";
                                            $contador++;
                                        }
                                        echo "</select>";
                                        echo "</td>";
                                        echo "<td class='statusCell'>"; // Abertura da célula "Status"
                                        echo "<select name='status'>";
                                        echo "<option value='select'>select</option>";
                                        echo "<option value='Confirmada'>Confirmada</option>";
                                        echo "<option value='Reposição'>Reposição</option>";
                                        echo "<option value='Cancelada'>Cancelada</option>";
                                        echo "<option value='Alterou data'>Alterou data</option>";
                                        echo "</select>";
                                        echo "</td>"; // Fechamento da célula "Status"
                                        echo "<td>$horaCompleta</td>";
                                    }
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>   
    <!--the end of the tag main-->
    <!-- the start of the tag footer-->
    <footer>
    </footer>
    <!-- the end of the tag footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/script.js"></script>
    <script>

    </script>
</body>
</html>
