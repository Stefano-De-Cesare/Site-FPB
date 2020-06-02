<?php 
$servername = "localhost";
$username = "u791180568_iFKEt";
$password = "QIGsPgksxU";
$database = "u791180568_DIta6";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
    
function setSuggetions($conn){
    if(isset($_POST['submitSuggestion'])){
        $nomeAutor = $_POST['nome_autor'];
        $date = $_POST['date'];
        $suggestionText = $_POST['suggestion'];
        strip_tags($suggestionText, "<iframe>");

        $sqlCode = "INSERT INTO sugestoes (nome_autor, date, message) VALUES ('$nomeAutor', '$date', '$suggestionText')";
        $result = $conn->query($sqlCode);
    }
}
function getSuggestions($conn){
    $sqlCode = "SELECT * FROM sugestoes ORDER BY date DESC";
    $result = $conn->query($sqlCode);
    while($row = $result->fetch_assoc()){
        echo "<div class='suggestionLabel'>";
            echo "<div class='suggestion_nomeAtor'>".$row['nome_autor']."</div>";
            echo "<div class='suggestion_date'><small>".$row['date']."</small></div>";
            echo "<div class='suggestion_message'><hr>".$row['message']."</div>";
        echo "</div><br>";
    }
}