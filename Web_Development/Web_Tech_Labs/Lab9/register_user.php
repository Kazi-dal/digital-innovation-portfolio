<?php
    include 'includes/connect.php';
    
 
    // You need to implement validation first.
    // Validation code goes here
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = htmlspecialchars(trim($_POST['username']));
        $password = htmlspecialchars(trim($_POST['password']));
        $email = htmlspecialchars(trim($_POST['email']));
    
        if (empty($username) || empty($password) || empty($email)) {
            echo "<script>alert('All fields are required!'); window.location.href='register.php';</script>";
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email address!'); window.location.href='register.php';</script>";
            exit();
        }
 
    //After validation is successfull, hash the password and save details in DB
    try {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
 
    // Fire the query to save data in DB.
    $query = "INSERT INTO Users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':email', $email);
 
    
    // If the Insert action is succcessful, redirect the user to Login page. or else alert an error and redirect back to register page.
     // Execute query
     if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
        exit();
    } else {
        throw new Exception("Failed to insert user into database.");
    }
} catch (Exception $e) {
    echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href='register.php';</script>";
    exit();
}
}
 
?>

