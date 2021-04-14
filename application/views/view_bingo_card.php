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
        <form method="post" action="welcome/bingo_card" class="form">
			<button type="submit" >Crear carta Bingo</button>
		</form>
		
        <form method="post" action="welcome/call_number" class="form">
        <button type="submit" >Pedir Nuevo Numero</button>
        </form>
        
        <button type="submit" >Bingo!</button>

    </body>
</html>

