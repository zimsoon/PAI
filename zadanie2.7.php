<!DOCTYPE html>
    <head>
        <title>Zadanie2</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./zadanie2.7.php" method="POST">
        Tekst <input type="text" name="tekst" />
        <input type="submit" name="klik" />
		<br><br></form>
	<form action="./zadanie2.7.php" method="POST">
		Liczba <input type="string" name="liczba" />
        <input type="submit" name="klik2" />
    </form>
        <?php
		$liczbowe = array(1, 2, 3);
		$tekstowe = array('linijka', 'długopis', 'kartka');
		
		 if(isset($_POST['klik'])){
			 if(isset($_POST['tekst'])){
				array_push($tekstowe,($_POST['tekst']));
		foreach('tekst' as $item){
			echo $_POST['$item'];
		}
			 }
		 }
        ?>
		
    </body>
</html>
