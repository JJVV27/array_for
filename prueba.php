
<?php

$categorias = array("Nacionales" ,"Regional " ,"Deportes" , "Internacionales"  );
foreach ($categorias as $categoria) {

	echo $categoria;
	echo "<br/>";
	
}


for ($i=0; $i < 10 ; $i++) { 
	echo '<input type="text" id="'.$i.'" value="">';
	echo "<br/>";
	echo "<br/>";
}
?>