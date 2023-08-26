<!DOCTYPE html>

<html>
	<head>
		<title>Recibos JL</title>
		<link rel="stylesheet" type="text/css" href="css/recibos.css"/>
	</head>
	<body style="background-color:#c0c0c0;">
	
	<center><h1>RECIBO DE PAGAMENTO</h1></center>
	<form action="recibo.php" method="post">
		<center><table>
			<tr>
				<td>Valor:</td>
				<td><input type="text" name="valor" size="20"> <br /></td>
			</tr>
			<tr>
				<td>Valor por extenso:</td>
				<td><input type="text" name="extenso" size="40"> <br /></td>
			</tr>
			<tr>
				<td>Referente:</td>
				<td><input type="text" name="referente" size="40"> <br /></td>
			</tr>
			<tr>
				<td>Nome do Pagador:</td>
				<td><input type="text" name="nomepag" size="40"> <br /></td>
			</tr>
			<tr>
				<td>CPF/ CNPJ do pagador:</td>
				<td><input type="text" name="cpf" size="40"> <br /></td>
			</tr>
			<tr>
				<td>Tipo de pagamento:</td>
				<td><input type="text" name="pagamento" size="40"> <br /></td>
			</tr>
		</table></center>
	  <center><input type ="submit" value="Gerar Recibo"/>
	  </form>
	</body>
</html>