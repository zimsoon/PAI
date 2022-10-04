<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ToJestTakieProste</title>
</head>
<body>
<form action="./zadanie.php" method="POST">Login:
	<input type="text"name="Login"/>
	Hasło:
	<input type="text"name="Haslo"/>
	<input type="submit"name="Zaloguj"/>
	<p><input type="checkbox" name="Haslo_pamiec" value="save" />Zapamiętaj mnie</p>
<form/>
<br>
  <?php
	 if(isset($_POST['Login'])){
    echo "Cześć " . htmlspecialchars($_POST['Login']) . "! ";
	}else{
		echo "Cześć nieznajomy.";
}
   ?>
</body>
</html>
