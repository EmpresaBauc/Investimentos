<!DOCTYPE html>
<html>
<head>
	<title>Importacao</title>
</head>
<body>
	<h1>Upload do arquivo</h1>

	<select 
	<form method="POST" action="save_planilha.php" enctype="multipart/form-data">
		<label>Arquivo</label>
		<input type="file" name="arquivo"><br><br>
		<input type="submit" value="enviar">
	</form>
</body>
</html>