

<!DOCTYPE html>
<html lang="en">
	<body>
		<h1>Juego de Bingo</h1>
        <form method="post" action=<?php echo base_url('welcome/bingo_card')?> class="form">
			<button type="submit" >Crear carta Bingo</button>
		</form>
		
        <form method="post" action=<?php echo base_url('welcome/bingo_card')?> class="form">
        <button type="submit" >Pedir Nuevo Numero</button>
        </form>
        
        <button type="submit" >Bingo!</button>

    </body>
</html>



<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($_POST['btnDelete'])) {
	// btnDelete
}
?>