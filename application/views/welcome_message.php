

<!DOCTYPE html>
<html lang="en">
	<body>
		<h1>Juego de Bingo</h1>
        <form method="post" action=<?php echo base_url('welcome/bingo_card')?> class="form">
			<button type="submit" >Crear carta Bingo</button>
			<!-- este boton llama al metodo bingo_card del controlador Welcome -->
		</form>
		
        <form method="post" action=<?php echo base_url('welcome/bingo_card')?> class="form">
			<button type="submit" >Pedir Nuevo Numero</button>
			<!-- este boton llama al metodo call_number del controlador Welcome -->
        </form>
        
		<button type="submit" >Bingo!</button> 
		<!-- este boton revisa que la tarjeta bingo tenga todos los numero llamados hasta ahora -->

    </body>
</html>



<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($_POST['btnDelete'])) {
	// btnDelete
}
?>