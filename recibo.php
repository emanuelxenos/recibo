<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Recibo JJ informática</title>
	<style type="text/css">
		#interface{
			border:1px solid black;
			width: 900px;
			margin:auto;
			display: block;
			text-align: center;
		}
		.dados{
			border-bottom: 1px dashed black;
			color: blue;
		}
		.direita{
			text-align: right;
			margin-right: 20px;
		}
		#rodape{
			margin-left: 600px;
		}
		.esquerda{
			text-align: left;
			margin-left: 20px;
			font-style: italic;
			font-size: 10pt;
		}
		button,a{
			background-color: lightblue;
			padding: 5px;
			border-radius: 10px;
			text-decoration: none;
			
		}
		h1{
			margin-left: 250px;
			text-transform: uppercase;
		}
		@media print{
			button{
				display: none;
			}
			a{
				display: none;
			}
			@page{
				size: auto;
				margin: 5mm;
			}
		}
	</style>
	<script type="text/javascript">
		var arrayMes = new Array(12);
			arrayMes[0] = "Janeiro";
			arrayMes[1] = "Fevereiro";
			arrayMes[2] = "Março";
			arrayMes[3] = "Abril";
			arrayMes[4] = "Maio";
			arrayMes[5] = "Junho";
			arrayMes[6] = "Julho";
			arrayMes[7] = "Agosto";
			arrayMes[8] = "Setembro";
			arrayMes[9] = "Outubro";
			arrayMes[10] = "Novembro";
			arrayMes[11] = "Dezembro";

			function getMesExtenso(mes){
   				 return this.arrayMes[mes];
			}
			function roda(){
			var dataAtual = new Date();
			var dia = dataAtual.getDate();
    		var diaSemana = dataAtual.getDay();
    		var mes = getMesExtenso(dataAtual.getMonth());
    		var ano = dataAtual.getFullYear();
    		var dataCompleta = dia +" de "+ mes +" "+ ano;
    		document.getElementById("data").innerHTML = dataCompleta;
    	}
	</script>
</head>
<body onload="roda();">
	<?php
		$valor =$_REQUEST['valor'];
		$extenso =$_REQUEST['extenso'];
		$referente =$_REQUEST['referente'];
		$nomepag =$_REQUEST['nomepag'];
		$cpf =$_REQUEST['cpf'];
		$pagamento =$_REQUEST['pagamento'];
	?>
	<div id="interface">
		<table>
			<tr><td><img src="img/Logo JJ.jpg"></td><td><h1>Recibo<h1></td></tr>
		  
		</table>
		<p class="direita">Recibo R$ <span>***<?php echo $valor;?>***</span></p>
		<p>Recebi(emos) de <span class="dados"><?php echo $nomepag;?></span> -CPF/CNPJ Nº  
			<span class="dados"><?php echo $cpf;?></span>, a importância supra<br/>
			de:<span class="dados">***(<?php echo $extenso;?>)***</span> - referente a:
			<span class="dados"><?php echo $referente;?></span>.
		</p>
		<p>
			E, para maior clareza firmo o presente recibo para que produza efeitos, dando plena, <br/>rasa e irrevogável quitação, pelo valor recebido.
		</p>
		<p>Pagamento efetuado em <span><?php echo $pagamento;?></span></p>
		<p class="direita">Carnaíba - PE <span id="data">12 de Maio de 2018</span></p>
		<p class="direita">JJ Informática - <span>Junior Santos</span><br/>
			CPF/CNPJ Nº <span>29.477.897/0001-20</span><br/>
			FONE:(87)9.9928-1254
		</p>
		<p class="esquerda">Desenvolvedor de Sistemas: Emanuel Xenos</p>
	</div><br/>
	<div id="rodape">
	<button onclick="window.print();">Imprimir</button>
	<a href="index.php">Voltar</a>
	</div>
</body>
</html>