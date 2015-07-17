<html>
	<head>
		<title> Minha Segunda Página</title>
		<meta charset = "UTF-8"/>
	</head>
	<body>
		<h1> Este é um grande cabeçalho</h1>
		<h3> E este aqui é um pequeno cabeçalho </h3>

		<p>Aqui eu coloquei um parágrafo com algum texto aleatório,
		e a seguir<br> vou inserir um formulário dentro de uma tabela.
		Além disso, aqui vai um<br> link:
		<a href="http://icomp.ufam.edu.br/david/"> http://icomp.ufam.edu.br/david/</a>.
		</p>

		<form id="formulario" method="GET" action="imprimir2.php">
			<table border="0">
				<tr>
					<td>Seu nome:</td>
					<td> <input type="text" name="nome" id="nome" /></td>
				</tr>
				<tr>
					<td>Seu sexo:</td>
				<td>
					<select name="sexo" id="sexo">
					<option value="1">Masculino</option>
					<option value="2">Feminino</option>
					</select>
				</td>
				</tr>
				<tr>
					<td>Seus<br>comentários:</td>
					<td>
						<textarea name="mensagem" rows="15" cols="50"></textarea> <br>
						<input type="submit" name="submit" value="Enviar" /></td>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
