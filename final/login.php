<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
   

    @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

    if ($db->connect_error) {
        die("Fail" . $db->connect_error);
    }



    if (isUserInDatabase($db, $username, $password)) {
        $_SESSION['username'] = $username;


        header('Location: index.php');
        exit;
    } else {
        echo '<script>';
        echo 'if (confirm("Username/password is wrong. Please try again or create an account.")) {';
        echo '  window.history.back();';
        echo '}';
        echo '</script>';
    }
      
       $db->close();
   


       exit;
   }
   
   
   function isUserInDatabase($db, $username, $password) {
    $sql = "SELECT COUNT(*) FROM users WHERE usernames = ? AND passwords = ?";
    
    // Prepare and execute the SQL query
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    return $count > 0;
}

    exit;

?>