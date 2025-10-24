<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="" method="post">
		<select name="slSexo">
			<option>Selecione o seu sexo </option>
			<option value="1">Feminino</option>
			<option value="2">Masculino </option>
		</select>
	<br/>
	<br/>
		<label>Digite sua altura: </label>
		<input type="text" name="Altura">
		<input type="submit" name="btnEnviar" value="Calcular">
	</form>

	<?php  

		$Op = $_POST['slSexo'];
		$alt = $_POST['Altura'];

		if($Op==1){

			$Res = (62.1*$alt)-44.7;
			echo "O peso ideal para sua altura é: $Res";

		}
		else if ($Op==2){
			$Res = (72.7 * $alt)-58;
			echo "O peso ideal para sua altura é: $Res";
		}
		else {

			echo "É preciso selecionar o seu sexo!"; 
		}


	?>


</body>
</html>