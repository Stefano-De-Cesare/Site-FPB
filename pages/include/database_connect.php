<?php 
$servername = "localhost";
$username = "id11952728_shiroserveradmin";
$password = "t9vmr&7h)w=Gw>\b";
$database = "id11952728_dbsugestoes";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
    
function setSuggetions($conn){
    if(isset($_POST['submitSuggestion'])){
        $nomeAutor = $_POST['nome_autor'];
        $date = $_POST['date'];
        $suggestionText = $_POST['suggestion'];
        
        $sqlCode = "INSERT INTO sugestoes (nome_autor, date, message) VALUES ('$nomeAutor', '$date', '$suggestionPost')"
        $result = $conn->query($sqlCode);
    }
}