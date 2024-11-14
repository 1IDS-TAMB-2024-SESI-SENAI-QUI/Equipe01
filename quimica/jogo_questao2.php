<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Jogo - Química</title>
	</head>
	<body>
		<form action="" method="POST">
			<p>Questão 2: Qual das substâncias a seguir é um exemplo de ácido encontrado em frutas cítricas, como limão e laranja? </p>
			<input type="radio" name="questao2" id="alternativaA" value="errado">Ácido nítrico (HNO₃).<br/>
			<input type="radio" name="questao2" id="alternativaB" value="errado">Ácido sulfúrico (H₂SO₄).<br/>
			<input type="radio" name="questao2" id="alternativaC" value="errado">Ácido clorídrico (HCl).<br/>
			<input type="radio" name="questao2" id="alternativaD" value="certo">Ácido cítrico (C₆H₈O₇).<br/>
			<br/>
			<button>Responder!</button>
		</form>
		<?php
			if(isset($_POST["questao2"])){
				if($_POST["questao2"] == "certo"){
					echo "<h2>Resposta Correta!</h2>";
					echo "<a href='jogo_questao3.php'><button>Próxima Questão</button></a>";
				}
				else{
					echo "<h2>Resposta Incorreta! Tente Novamente :(</h2>";
				}
			}
		?>
		
	</body>
</html>