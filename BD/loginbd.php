<title>login</title>
<?php

$host ="127.0.0.1";
$user = "root";
$Password = "";
$DB =  "lucas";

$mysqli = new mysqli($host, $user, $Password, $DB);

if (!$mysqli) {
	echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL."<br>";

$NomeComp = $_REQUEST ['Nome']; 
$SenhaComP = $_REQUEST ['Senha'];

$Login = "SELECT * FROM `usuarios` WHERE Nome = \"$NomeComp\"";

$conn = $mysqli -> query($Login) or die ($mysqli->error);

while ($dado = $conn ->fetch_array()) {
	$login = $dado['Nome'];
	$senha = $dado['Senha'];
	$id = $dado['id'];
	
}


if($login!= null && $senha != null){
	if ($login == $NomeComp && $senha == $SenhaComP) {
		header("location:?pg=inicial");
	}else{
		header("location:../index.php");
	}
}else{
	header("location:../index.php");
}


mysqli_close($mysqli);

?>