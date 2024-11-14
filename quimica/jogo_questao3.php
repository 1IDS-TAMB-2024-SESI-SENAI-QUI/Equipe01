<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Jogo - Química</title>
	</head>
	<body>
		<form action="" method="POST">
			<p>Questão 3: Qual das opções a seguir é uma característica típica de uma base em solução aquosa? </p>
			<input type="radio" name="questao3" id="alternativaA" value="errado">Tem sabor ácido.<br/>
			<input type="radio" name="questao3" id="alternativaB" value="errado">Libera íons H⁺ em solução. <br/>
			<input type="radio" name="questao3" id="alternativaC" value="certo">Libera íons OH⁻ em solução.<br/>
			<input type="radio" name="questao3" id="alternativaD" value="errado">Reage com metais liberando gás hidrogênio.<br/>
			<br/>
			<button>Responder!</button>
		</form>
		<?php
			if(isset($_POST["questao3"])){
				if($_POST["questao3"] == "certo"){
					echo "<h2>Resposta Correta!</h2>";
					echo "<a href='jogo_questao4.php'><button>Próxima Questão</button></a>";
				}
				else{
					echo "<h2>Resposta Incorreta! Tente Novamente :(</h2>";
				}
			}
		?>
		
	</body>
</html>