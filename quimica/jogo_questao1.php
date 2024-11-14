<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Jogo - Química</title>
	</head>
	<body>
		<form action="" method="POST">
			<p>Questão 1: Qual das seguintes opções descreve corretamente um ácido?</p>
			<input type="radio" name="questao1" id="alternativaA" value="errado">Uma substância que aceita prótons em uma reação química.<br/>
			<input type="radio" name="questao1" id="alternativaB" value="errado">Uma substância que tem um pH superior a 7.<br/>
			<input type="radio" name="questao1" id="alternativaC" value="certo">Uma substância que libera íons hidrogênio (H⁺) quando dissolvida em água.<br/>
			<input type="radio" name="questao1" id="alternativaD" value="errado">Uma substância que se combina com bases para formar sais e água.<br/>
			<br/>
			<button>Responder!</button>
		</form>
		<?php
			if(isset($_POST["questao1"])){
				if($_POST["questao1"] == "certo"){
					echo "<h2>Resposta Correta!</h2>";
					echo "<a href='jogo_questao2.php'><button>Próxima Questão</button></a>";
				}
				else{
					echo "<h2>Resposta Incorreta! Tente Novamente :(</h2>";
				}
			}
		?>
		
	</body>
</html>