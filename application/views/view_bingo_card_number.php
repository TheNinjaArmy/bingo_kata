<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (isset($_POST['btn_generate_card'])) {
	// print_card($bingo_card);
	
}
?>

<!DOCTYPE html>
<html lang="en">
	<body>
        <h1>Juego de Bingo</h1>
        <form method="post" action="welcome/bingo_card" >
			<input type="submit" name="btn_generate_card"  value="Crear carta Bingo"/>
		</form>
		
		<form method="post" action="welcome/call_number" >
			<input type="submit" name="call_number"  value="Pedir nuevo número"/>
		</form>

		<input type="submit" name="call_bingo" value="Bingo!"/>

    </body>
</html>


			