<?php

$title = 'Accueil';
$description = 'Page d\'accueil';

ob_start();

?>

<img alt="" src="public/img/.jpg">

<div class="home">
	<h1>Bienvenue sur le Portfolio Estiam</h1><br>
    <p></p><br>
	
    <h1></h1><br>
    <p></p>
	  <h1></h1><br>
    <p>
        
  	</p>
</div>







<?php

$content = ob_get_clean();
include __DIR__ . "/../template.php";
?>
