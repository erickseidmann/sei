
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Criar pagina com abas</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Pagina com Abas</h1>
			</div>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Controle Geral</a></li>
				<li role="presentation"><a href="#week1" aria-controls="week1" role="tab" data-toggle="tab"  >WEEK 1</a></li>
				<li role="presentation"><a href="#week2" aria-controls="week2" role="tab" data-toggle="tab">WEEK 2</a></li>
				<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Configurações</a></li>
				<li role="presentation"><a href="#detalhes" aria-controls="detalhes" role="tab" data-toggle="tab">Detalhes</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">





				<div role="tabpanel" class="tab-pane active" id="home"><!-- inicio controle geral-->
					

							<h1>controle geral </h1>



				</div><!-- fim controle geral -->




				<div role="tabpanel" class="tab-pane" id="week1"><!-- inicio week 1-->
						<h1> Week 1 </h1>

						<h1 id="titulo1">Título Dinâmico</h1>
						<div> 
						<button  id="alterarBotao1" >Alterar Data</button>

						<button class="protectedButton" id="teste" >botão teste</button>
						</div>

						<b>

						</b>
						<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSXD6wtVcHrPh1CeJ6aaHRvIg7VubvE3ZO2k67FJzk3ODFclPTfZoe8AsyIgpY1zrOLEgw7-KcVBqyh/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" width="800" height="800"></iframe>


				</div><!-- fim week 1-->




				<div role="tabpanel" class="tab-pane" id="week2"> <!-- inicio week 2-->
					<h1> Week 2 </h1>

					<h1 id="titulo2">Título Dinâmico</h1>
					<button  id="alterarBotao2" >Alterar Data</button>

						
				</div><!-- fim week 2-->




				<div role="tabpanel" class="tab-pane" id="settings">
					Nunc commodo nisi magna, eget aliquam ex imperdiet sed. Sed sed aliquam leo. Pellentesque interdum vulputate libero, vitae elementum ex. Phasellus non neque ultrices, tristique tellus non, aliquam ante. Integer tincidunt nunc id turpis porttitor, vel elementum tellus lacinia. Cras vestibulum maximus diam id lacinia. Praesent ut eros eu massa viverra porta. Pellentesque ac libero quis orci viverra dapibus et id massa. Nunc ultricies massa at ultricies viverra. Sed congue, dolor sed efficitur tincidunt, turpis ante pellentesque mauris, ut vestibulum dui erat sed leo.
				</div>
				<div role="tabpanel" class="tab-pane" id="detalhes">
					Donec tempus iaculis ex at feugiat. Fusce sit amet erat et sem scelerisque convallis in vel purus. Suspendisse sed enim consectetur, convallis velit eget, finibus sapien. Integer vel nisl eros. Nullam vehicula dictum arcu a iaculis. In hac habitasse platea dictumst. Mauris eu metus ac tellus dictum condimentum.
				</div>
			  </div>

			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>