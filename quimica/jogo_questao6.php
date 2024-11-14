<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Jogo - Química</title>
	</head>
	<body>
		<form action="" method="POST">
			<p>Questão 6: Qual dos seguintes sais é comumente usado como conservante alimentar e também é o principal ingrediente do sal de mesa?</p>
			<input type="radio" name="questao6" id="alternativaA" value="errado"> Bicarbonato de sódio (NaHCO₃).  <br/>
			<input type="radio" name="questao6" id="alternativaB" value="certo">Cloreto de sódio (NaCl). <br/>
			<input type="radio" name="questao6" id="alternativaC" value="errado">Sulfato de sódio (Na₂SO₄).  <br/>
			<input type="radio" name="questao6" id="alternativaD" value="errado">Nitrato de sódio (NaNO₃).<br/>
			<br/>
			<button>Responder!</button>
		</form>
		<?php
			if(isset($_POST["questao6"])){
				if($_POST["questao6"] == "certo"){
					echo "<h2>Resposta Correta! Quiz Finalizado! </h2>";
					echo "<h4> Você acertou 6/6 questões! </h4>";
					echo "<a href=''><button> Retornar à página inicial do site </button></a>";
				}
				else{
					echo "<h2>Resposta Incorreta! Tente Novamente :(</h2>";
				}
			}
		?>
		
	</body>
</html>