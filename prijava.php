<link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">
<link href="./styles/prijava/prijava.css" rel="stylesheet" type="text/css" />
<script src="./scripts/accessibility.js"></script>
<div class='layout'>
	<div class='container'>
		<h2 class="title">Prijava</h2>
		<form action='prijava_action.php'method='POST' >
			<input type="text" required placeholder="Korisničko ime" name="username">
			<input type="password" required placeholder="Lozinka" name="password">
			<input type="submit" name="submit" value="Prijava">
		</form>
		<p><?php echo isset($_GET['error']) ? $_GET['error'] : ""; ?></p>
	</div>
</div>;
