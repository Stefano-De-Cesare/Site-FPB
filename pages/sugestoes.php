<?php include("include/navbar.html");
include("include/database_connect.php");
date_default_timezone_set('America/Brasilia');?>
<!DOCTYPE html>
<html lang="pt">

<header>
	<title>NONAME Brasil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</header>

<head>
  <link rel="stylesheet" href="include/sugestoes_styles.css">
</head>

<body>
	<img src="../assets/1.png">
	
	<div class="jumbotron">
<?php
	echo "<form method='POST' action='".setSuggetions($conn)."'>
        <label for='nome_autor'>Nome:</label>
        <input type='text' id='nome_autor' name='nome_autor' maxlength='128' required><br>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <label for='suggestion'>Sugestão:</label><br>
        <textarea required id='suggestion' name='suggestion'></textarea><br>
        <button type='submit' name='submitSuggestion'>Enviar</button>
	</form><br>";
        getSuggestions($conn);
?>	
	</div>
</body>
</html>
<?php include("include/footer.html")?>