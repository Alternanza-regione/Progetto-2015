<html>
	<head>
		<title>Sito Visualizzazione Attività Consiglio Regionale Toscana</title>
		<link href="grafica.css" media="all" rel="Stylesheet" type="text/css" />
	</head>
	<body>
		<h1>  Attività Consiglio Regionale Toscana</h1>
		
		<br />
	<?php if(!isset($_POST['invio'])) { ?>
	<div id="login">
		<form action="" method="post">
			Username : <input type="text" name="username" > <br />
			<br/>
			Password :  <input type="password" name="password" > <br />
			<br/>
			     <input type="hidden" name="username" value="<?php $_POST['username'] ?>">
				 <input type="hidden" name="password" value="<?php $_POST['password'] ?>">
			<input type="submit" name="invio" value="OK">
		</form>
	<?php } ?>
	<div/>
	</body>
</html>
