<!doctype html>
<html>
     <head>
     </head>
     <body>
	 
	 
	 <?php 
	 $sprawdzanie;
	 $ocena= 42;
	 if($ocena < 40)
		 {
			echo "Ocena jest negatywna!";
		 }
	 elseif($ocena >= 40 && $ocena <=54)
		 {
			 echo "Ocena jest równa= 2!";
		 }
	 elseif($ocena >= 55 && $ocena <=69)
		 {
			 echo "Ocena jest równa= 3!";
		 }
	 elseif($ocena >= 70 && $ocena <=84)
		 {
			 echo "Ocena jest równa= 4!";
		 }
	 elseif($ocena >= 85 && $ocena <=94)
		 {
			 echo "Ocena jest równa= 5!";
		 }
	 elseif($ocena >= 95 && $ocena  <=100)
		 {
			 echo "Ocena jest równa= 6! Gratulacje!";
		 } 

	 ?>
	 	 <hr>
	<?php

	$ksiazki="Witkiewicz";
	
	switch($ksiazki)
    {
        case "Witkiewicz":
            echo "Wybrałeś książkę: Historia jutra 3";
            break;
			
		case "Wichter":
            echo "Wybrałeś książkę: Informatyka dla zielonych";
            break;
			
		case "Sterling":
            echo "Wybrałeś książkę: WF jak dbac o zdrowa sylwetka";
            break;
			
		case "Ocharczuk":
            echo "Wybrałeś książkę: Polski twist";
            break;
	}
	 
	?>
     </body>
</html>