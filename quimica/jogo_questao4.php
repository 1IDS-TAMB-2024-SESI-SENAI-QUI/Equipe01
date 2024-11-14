<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Jogo - Química</title>
	</head>
	<body>
		<form action="" method="POST">
			<p>Questão 4: Qual das seguintes substâncias pode ser classificada como uma base de Arrhenius?</p>
			<input type="radio" name="questao4" id="alternativaA" value="errado">HCl.<br/>
			<input type="radio" name="questao4" id="alternativaB" value="certo">NaOH.<br/>
			<input type="radio" name="questao4" id="alternativaC" value="errado">CH₃COOH.<br/>
			<input type="radio" name="questao4" id="alternativaD" value="errado">NH₄Cl.<br/>
			<br/>
			<button>Responder!</button>
		</form>
		<?php
			if(isset($_POST["questao4"])){
				if($_POST["questao4"] == "certo"){
					echo "<h2>Resposta Correta!</h2>";
					echo "<a href='jogo_questao5.php'><button>Próxima Questão</button></a>";
				}
				else{
					echo "<h2>Resposta Incorreta! Tente Novamente :(</h2>";
				}
			}
		?>
		
	</body>
</html>