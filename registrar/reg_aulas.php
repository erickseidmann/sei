<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar / Register</title>
    <meta name="description" content="pagina de registro de aulas">
    <meta name="author" content="Erick Seidmann">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="styles/registrar.css">
    <link rel="stylesheet" href="styles/registrar-large.css">
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
        <h2>New Class Registrations</h2>

        <div class="button-group" id="button-group"> <!-- div do botao de grupo-->
            <button>Group Classes</button>
        </div><!-- fim do botao de aula em grupo-->

        
        <div class="button-private" id="button-private"><!-- div do botao de aula particular-->
            <button>Private Classes</button>
        </div><!--fim do bot'ao de aula particular -->

        <section class="grup" id="group"><!--aqui começa o formulario para a aula em grupo-->

            <h2>Grupo / Group </h2>

            <form id ="form-group" action="processar-registros.php" method="post"><!-- aqui começa o form do -group classes-->

                <div ><!--div info-aluno-->

                    <h3 >Informaçoes dos alunos / Student information </h3>

                    <div ><!--aluno um -->
                    <div class="name-one"><!--Div nome do aluno-->
                    <select name="aluno" id="aluno" class="form-select bg-light" onchange="buscarEmail(0)" required>
                        <option value="">Selecione um aluno</option>
                            <?php
                            require_once "config.php";

                            // Supondo que $conn seja a conexão com o banco de dados
                            $sql = "SELECT nome_completo, email FROM formulario";
                            $result = $conn->query($sql);

                            $alunos = array();

                            while ($row = $result->fetch_assoc()) {
                                $nomeAluno = $row['nome_completo'];
                                $emailAluno = $row['email'];
                                $alunos[$nomeAluno] = $emailAluno;
                            }
                        
                            // Ordenar o array de nomes
                            ksort($alunos);
                        
                            // Exibir os nomes na opção
                            $contador = 1;
                            foreach ($alunos as $nomeAluno => $emailAluno) {
                                echo "<option value='$nomeAluno'>$contador. $nomeAluno</option>";
                                $contador++;
                            }
                            ?>

                            
                    </select>
                    
                    </div><!-- FIM Div nome do aluno-->

                    <div class="col-md-4 ">
                    <label for="email">Email:</label>
                    <p></p>
                    <input type="email" name="email" id="email" class="form-control bg-light" readonly >
                    <br><br>
                    </div>


                    <div><!--Div info info-status -->
                        <label for="info-status">Status</label>
                        <select name="info-status" id="info-status-um" class="form-select bg-light">
                            <option selected>Selecione...</option>
                            <option value="compareceu">Compareceu / showed up</option>
                            <option value="nao-compareceu">Não compareceu /  Didn't attend</option>
                            <option value="cancelou">Cancelou / Canceled</option>
                            <option value="demonstrativa">Demonstrativa / Demonstrative</option>
                        </select>
                    </div><!--Div info info-status-->
                    </div><!--fim aluno um-->


                    <div ><!--aluno dois -->
                        <div class="name one"><!--Div nome do aluno-->
                          <label for="name-dois">Nome / Name:</label>
                          <input type="text" id="namedois" />
                        </div><!-- FIM Div nome do aluno-->
    
                        <div class="email one"><!--Div email do aluno-->
                          <label for="mail-dois">E-mail:</label>
                          <input type="email" id="maildois" />
                        </div><!--fim Div email do aluno-->
    
                        <div><!--Div info info-status -->
                            <label for="info-status">Status</label>
                            <select name="info-status" id="info-status-dois" class="form-select bg-light">
                                <option selected>Selecione...</option>
                                <option value="compareceu">Compareceu / showed up</option>
                                <option value="nao-compareceu">Não compareceu /  Didn't attend</option>
                                <option value="cancelou">Cancelou / Canceled</option>
                                <option value="demonstrativa">Demonstrativa / Demonstrative</option>
                            </select>
                        </div><!--Div info info-status-->
                        </div><!--fim aluno dois-->

                        
                    <div ><!--aluno tres -->
                        <div class="name one"><!--Div nome do aluno-->
                          <label for="name-tres">Nome / Name:</label>
                          <input type="text" id="nametres" />
                        </div><!-- FIM Div nome do aluno-->
    
                        <div class="email one"><!--Div email do aluno-->
                          <label for="mail-tres">E-mail:</label>
                          <input type="email" id="mailtres" />
                        </div><!--fim Div email do aluno-->
    
                        <div><!--Div info info-status -->
                            <label for="info-status">Status</label>
                            <select name="info-status" id="info-status-tres" class="form-select bg-light">
                                <option selected>Selecione...</option>
                                <option value="compareceu">Compareceu / showed up</option>
                                <option value="nao-compareceu">Não compareceu /  Didn't attend</option>
                                <option value="cancelou">Cancelou / Canceled</option>
                                <option value="demonstrativa">Demonstrativa / Demonstrative</option>
                            </select>
                        </div><!--Div info info-status-->
                        </div><!--fim aluno tres-->

                        
                    <div ><!--aluno quatro -->
                        <div class="name one"><!--Div nome do aluno-->
                          <label for="name-quatro">Nome / Name:</label>
                          <input type="text" id="namequatro" />
                        </div><!-- FIM Div nome do aluno-->
    
                        <div class="email one"><!--Div email do aluno-->
                          <label for="mail-quatro">E-mail:</label>
                          <input type="email" id="mailquatro" />
                        </div><!--fim Div email do aluno-->
    
                        <div><!--Div info info-status -->
                            <label for="info-status">Status</label>
                            <select name="info-status" id="info-status-quatro" class="form-select bg-light">
                                <option selected>Selecione...</option>
                                <option value="compareceu">Compareceu / showed up</option>
                                <option value="nao-compareceu">Não compareceu /  Didn't attend</option>
                                <option value="cancelou">Cancelou / Canceled</option>
                                <option value="demonstrativa">Demonstrativa / Demonstrative</option>
                            </select>
                        </div><!--Div info info-status-->
                        </div><!--fim aluno quatro-->

                        <div ><!--aluno cinco -->
                            <div class="name one"><!--Div nome do aluno-->
                              <label for="name-cinco">Nome / Name:</label>
                              <input type="text" id="namecinco" />
                            </div><!-- FIM Div nome do aluno-->
        
                            <div class="email one"><!--Div email do aluno-->
                              <label for="mail-cinco">E-mail:</label>
                              <input type="email" id="mailcinco" />
                            </div><!--fim Div email do aluno-->
        
                            <div><!--Div info info-status -->
                                <label for="info-status">Status</label>
                                <select name="info-status" id="info-status-cinco" class="form-select bg-light">
                                    <option selected>Selecione...</option>
                                    <option value="compareceu">Compareceu / showed up</option>
                                    <option value="nao-compareceu">Não compareceu /  Didn't attend</option>
                                    <option value="cancelou">Cancelou / Canceled</option>
                                    <option value="demonstrativa">Demonstrativa / Demonstrative</option>
                                </select>
                            </div><!--Div info info-status-->
                            </div><!--fim aluno cinco-->

                </div><!--FIM div info-aluno-->

                <div ><!--DIV INFO-AULA-->

                    <h3 >Informaçoes sobre a aula/ Class information </h3>
                    
                    <div class="teacher"><!--Div nome do aluno-->
                        <label for="teacher">Professor(a) / Teacher:</label>
                        <input type="text" id="teacher-group" />
                    </div><!-- FIM Div nome do aluno-->


                    <div class="tempo-aula"><!--Div tempo de aula  -->
                        <label for="tempo-aula">Tempo da aula / Class time</label>
                        <select name="tempo-aula" id="tempo-group" class="form-select bg-light">
                            <option selected>Selecione...</option>
                            <option value="30min">00:30 min</option>
                            <option value="45min">00:45 min</option>
                            <option value="60min">1:00 hr</option>
                            <option value="90min">1:30 hr/min</option>
                            <option value="120min">2:00 hr</option>
                        </select>
                    </div><!-- FIM Div tempo de aula-->

                    <div class="tipo-curso" ><!--Div curso  -->
                        <label for="tipo-curso">Curso / Course</label>
                        <select name="tipo-curso" id="tipo-group" class="form-select bg-light">
                            <option selected>Selecione...</option>
                            <option value="ingles">Inglês / English</option>
                            <option value="espanhol">Espanhol / Spanish</option>
                            <option value="programacao">Programação / Programming</option>
                        </select>
                    </div><!-- FIM Div curso-->


                    <div class="tipo-aula" ><!--Div tipo-aula  -->
                        <label for="tipo-aula">Aula / Class</label>
                        <select name="tipo-aula" id="aula-group" class="form-select bg-light">
                            <option selected>Selecione...</option>
                            <option value="book">Book / talk </option>
                            <option value="free">Free talk</option>
                            <option value="review">Subject Review</option>
                        </select>
                    </div><!-- FIM Div tipo-aula-->


                    <div  class="page"><!--Div pagina-->
                        <label for="page">Ultima Pagina / Last page:</label>
                        <input type="number" id="page-group" />
                    </div><!-- FIM Div pagina-->

                    <div class="atividade"><!--Div atividade-->
                        <label for="atividade">Ultima Atividade / Last activity:</label>
                        <input type="text" id="page-group-number" />
                    </div><!-- FIM Div atividade-->

                    <div  class="homework"><!--Div atividade-->
                        <label for="homework">Homework:</label>
                        <input type="text" id="Homework-group" />
                    </div><!-- FIM Div atividade-->

                    <div  class="free-talk"><!--Div free talk-->
                        <label for="free-talk">Assunto do Free Talk / Free Talk subject:</label>
                        <input type="text" id="free-group" />
                    </div><!-- FIM Div free talk-->

                    <div  class="free-talk-link"><!--Div free talk link-->
                        <label for="free-talk-link">Free Talk link / Free Talk link:</label>
                        <input type="text" id="link-group" />
                    </div><!-- FIM Div free talk link-->

                    <div ><!--Div  obs-->
                        <label for="obs">OBS sobre a aula / NOTE about the class:</label>
                        <textarea id="obs-group"></textarea>
                    </div><!--FIM Div  obs-->
                    
                    <div ><!--Div  INFO PARENTS-->
                        <label for="info">INFO PARENTS / INFO PARA OS PAIS:</label>
                        <textarea id="info-group"></textarea>
                    </div><!--FIM INFO PARENTS-->
                
                </div> <!--FIM DIV INFO-AULA-->

                <div>
                  <label for="msg">Mensagem:</label>
                  <textarea id="msg-group"></textarea>
                </div>

                <div class="button">
                  <button type="submit">Registrar Aula</button>
                </div>
              </form><!-- aqui termina o form do Group classes-->
            
        </section><!--aqui termina o formulario para aula em grupo-->

        
        <section class="private" id="private"><!--aqui começa o formulario para a aulas particulares-->

            <h2>Particular / Private </h2>

            <form id ="form-private" action="processar-registros.php" method="post"><!-- aqui começa o form private classes-->

                <div ><!--div info-aluno-->
                    <h3 >Informaçoes dos alunos / Student information </h3>
                    <div class="name"><!--Div nome do aluno-->
                      <label for="name">Nome / Name:</label>
                      <input type="text" id="name-private" />
                    </div><!-- FIM Div nome do aluno-->

                    <div class="email-private"><!--Div email do aluno-->
                      <label for="mail">E-mail:</label>
                      <input type="email" id="mail-private" />
                    </div><!--fim Div email do aluno-->

                    <div><!--Div info info-status -->
                        <label for="info-status">Status</label>
                        <select name="info-status" id="info-status" class="form-select bg-light">
                            <option selected>Selecione...</option>
                            <option value="compareceu">Compareceu / showed up</option>
                            <option value="nao-compareceu">Não compareceu /  Didn't attend</option>
                            <option value="cancelou">Cancelou / Canceled</option>
                            <option value="demonstrativa">Demonstrativa / Demonstrative</option>
                        </select>
                    </div><!--Div info info-status-->

                </div><!--FIM div info-aluno-->

                <div ><!--DIV INFO-AULA-->

                    <h3 >Informaçoes sobre a aula/ Class information </h3>
                    
                    <div class="teacher"><!--Div nome do aluno-->
                        <label for="teacher">Professor(a) / Teacher:</label>
                        <input type="text" id="teacher-private" />
                    </div><!-- FIM Div nome do aluno-->


                    <div  class="tempo-aula"><!--Div tempo de aula  -->
                        <label for="tempo-aula">Tempo da aula / Class time</label>
                        <select name="tempo-aula" id="tempo-aula" class="form-select bg-light">
                            <option selected>Selecione...</option>
                            <option value="30min">00:30 min</option>
                            <option value="45min">00:45 min</option>
                            <option value="60min">1:00 hr</option>
                            <option value="90min">1:30 hr/min</option>
                            <option value="120min">2:00 hr</option>
                        </select>
                    </div><!-- FIM Div tempo de aula-->

                    <div class="tipo-curso" ><!--Div curso  -->
                        <label for="tipo-curso">Curso / Course</label>
                        <select name="tipo-curso" id="tipo-curso" class="form-select bg-light">
                            <option selected>Selecione...</option>
                            <option value="ingles">Inglês / English</option>
                            <option value="espanhol">Espanhol / Spanish</option>
                            <option value="programacao">Programação / Programming</option>
                        </select>
                    </div><!-- FIM Div curso-->


                    <div class="tipo-aula" ><!--Div tipo-aula  -->
                        <label for="tipo-aula">Aula / Class</label>
                        <select name="tipo-aula" id="tipo-aula" class="form-select bg-light">
                            <option selected>Selecione...</option>
                            <option value="book">Book / talk </option>
                            <option value="free">Free talk</option>
                            <option value="review">Subject Review</option>
                        </select>
                    </div><!-- FIM Div tipo-aula-->


                    <div  class="page"><!--Div pagina-->
                        <label for="page">Ultima Pagina / Last page:</label>
                        <input type="number" id="page" />
                    </div><!-- FIM Div pagina-->

                    <div  class="atividade"><!--Div atividade-->
                        <label for="atividade">Ultima Atividade / Last activity:</label>
                        <input type="text" id="atividade" />
                    </div><!-- FIM Div atividade-->

                    <div class="homework"><!--Div atividade-->
                        <label for="homework">Homework:</label>
                        <input type="text" id="homework" />
                    </div><!-- FIM Div atividade-->

                    <div  class="free-talk"><!--Div free talk-->
                        <label for="free-talk">Assunto do Free Talk / Free Talk subject:</label>
                        <input type="text" id="free" />
                    </div><!-- FIM Div free talk-->

                    <div class="free-talk-link"><!--Div free talk link-->
                        <label for="free-talk-link">Free Talk link / Free Talk link:</label>
                        <input type="text" id="free-link" />
                    </div><!-- FIM Div free talk link-->

                    <div ><!--Div  obs-->
                        <label for="obs">OBS sobre a aula / NOTE about the class:</label>
                        <textarea id="obs"></textarea>
                    </div><!--FIM Div  obs-->
                    
                    <div ><!--Div  INFO PARENTS-->
                        <label for="obs">INFO PARENTS / INFO PARA OS PAIS:</label>
                        <textarea id="info"></textarea>
                    </div><!--FIM INFO PARENTS-->
                
                </div> <!--FIM DIV INFO-AULA-->

                <div>
                  <label for="msg">Mensagem:</label>
                  <textarea id="msg"></textarea>
                </div>

                <div class="button">
                  <button type="submit">Registrar aula</button>
                </div>
              </form><!-- aqui termina o form do private classes-->

        </section><!--aqui termina o formulario para aulas particulares-->



    </main>   
    <!--the end of the tag main-->
    <!-- the start of the tag footer-->
    <footer>
    </footer>
     <!-- the end of the tag footer-->
     <script src="scripts/getDate.js"></script>  
</body>
</html>