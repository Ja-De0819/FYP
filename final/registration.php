<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['newUsername'];
    $password = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    
    $usernamePattern = "/^[a-zA-Z0-9.-]+@[a-zA-Z]+(\.[a-zA-Z]+){0,2}\.[a-zA-Z]{2,3}$/";
    $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d).{7,}$/";

    @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

    if ($db->connect_error) {
        die("Fail" . $db->connect_error);
    }

    if (!preg_match($usernamePattern, $username)) {
        echo '<script>';
        echo 'alert("Your username must be a valid email address. Please enter a different username.");';
        echo 'window.history.back();';
        echo '</script>';
        exit;
    }

    if (!preg_match($passwordPattern, $password)) {
        echo '<script>';
        echo 'alert("You password must be more than 6 characters, including numbers and letters.  Please enter a different password.");';
        echo 'window.history.back();';
        echo '</script>';
        exit;
    }

    if ($password !== $confirmPassword) {
        echo '<script>';
        echo 'alert("Password do not match. Please enter the same password in both fields.");';
        echo 'window.history.back();';
        echo '</script>';
        exit;
    }

    if (isUsernameExists($db, $username)) {
        // Username already exists, show alert and go back to the page
        echo '<script>';
        echo 'alert("Username already exists. Please choose a different username.");';
        echo 'window.history.back();';
        echo '</script>';
    } else {
        // Username is not in use, insert the new user
        insertNewUser($db, $username, $password);

        // Show a success message
        echo '<script>';
        echo 'alert("User registered successfully.");';
        echo 'window.location.href = "login.html";';
        echo '</script>';
    }
       $db->close();
   


       exit;
   }
   
   function isUsernameExists($db, $username) {
    $sql = "SELECT COUNT(*) FROM users WHERE usernames = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    return $count > 0;
}
    function insertNewUser($db, $username, $password) {
        $sql = "INSERT INTO users (usernames, passwords) VALUES (?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->close();
    }


    exit;

?>