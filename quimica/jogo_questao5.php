<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Jogo - Química</title>
	</head>
	<body>
		<form action="" method="POST">
			<p>Questão 5: Sobre os sais, assinale a alternativa correta:</p>
			<input type="radio" name="questao5" id="alternativaA" value="errado">O bicarbonato de sódio (NaHCO₃) é um sal que pode ser formado pela reação de um ácido forte e uma base forte.<br/>
			<input type="radio" name="questao5" id="alternativaB" value="errado">O nitrato de potássio (KNO₃) é um sal solúvel em água, mas não pode ser utilizado como fertilizante.<br/>
			<input type="radio" name="questao5" id="alternativaC" value="certo">O sulfato de sódio (Na₂SO₄) é um sal que, ao ser dissolvido em água, libera íons que conduzem eletricidade.<br/>
			<input type="radio" name="questao5" id="alternativaD" value="errado">Os sais nunca se formam em reações de neutralização.<br/>
			<br/>
			<button>Responder!</button>
		</form>
		<?php
			if(isset($_POST["questao5"])){
				if($_POST["questao5"] == "certo"){
					echo "<h2>Resposta Correta!</h2>";
					echo "<a href='jogo_questao6.php'><button>Próxima Questão</button></a>";
				}
				else{
					echo "<h2>Resposta Incorreta! Tente Novamente :(</h2>";
				}
			}
		?>
		
	</body>
</html>