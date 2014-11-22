<div class="row">
	<form role="form" action="index.php?co=dodaj" method="post">
		<div class="form-group">
			<label for="title">Tytuł refleksji</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Wprowadź temat refleksji">
		</div>
		<div class="form-group">
			<label for="reflection">Tekst refleksji</label>
			<textarea class="form-control" name="reflection" id="reflection" placeholder="Wpisz tu Swoją refleksję"></textarea>
		</div>
		<button type="submit" class="btn btn-default">Wyślij</button>
	</form>
</div>
<div class="row">
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Reflection</th>
		</tr>
	</thead>
	<tbody>
		<?php
			include('parameters.php');

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $database);

			// Check connection
			if (!$conn) {
			    die('<div class="alert alert-danger" role="alert">Connection failed: '.mysqli_connect_error().'</div>');
			}
			echo '<div class="alert alert-success" role="alert">Connected successfully</div>';

			$query = "SELECT * FROM refpt;";
			$result = mysqli_query($conn, $query);

			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>
