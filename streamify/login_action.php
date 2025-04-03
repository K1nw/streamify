<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "streamify"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
           
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {


                
                
                header("Location: index.php");
                exit();
            } else {
                
                echo "Usuário ou senha inválidos!";
            }
        } else {
            
            echo "Usuário ou senha inválidos!";
        }
    } else {
        
        echo "Por favor, preencha todos os campos.";
    }
}

$conn->close();
?>
