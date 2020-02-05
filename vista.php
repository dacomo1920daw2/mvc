<!DOCTYPE htm>
<html>
	<body>
	<ul>
		<?php
			require "model.php";
			require "controlador.php";
			$usuaris = new dadesUsuaris();
			foreach ($usuaris->obtencioDades() as $u) {
				echo "<li>" . $u['cognoms'] . "</li>";
			}
		?>
	</ul>
	</body>
</html>
