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


<style>
    input{
        width: 500px;
        height: 30px;
        background-color= #fff;
        font-family: arial;
        font-weight: 400;
        border: none;
    }
    textarea{
        width: 500px;
        height: 240px;
        background-color= #fff;
        resize: none;
        font-family: arial;
        font-weight: 400;
        border: none;
}
    button{
        width: 100px;
        height: 30px;
        background-color: #282828;
        border: none;
        color: #fff;
        font-family: arial;
        font-weight: 400;
        cursor: pointer;
    }
</style>

<body>
	<img src="../assets/1.png">
	
	<div class="jumbotron">
	
<?php
	echo "<form method='POST' action='".setSuggetions($conn)."'>
	     <input type='text' name='nome_autor' maxlength='128'><br><br>
	     <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	     <textarea name='suggestion'></textarea><br>
	     <button type='submit' name='submitSuggestion'>Enviar</button>
	</form>";
?>	
	</div>
</body>
</html>
<?php include("include/footer.html")?>