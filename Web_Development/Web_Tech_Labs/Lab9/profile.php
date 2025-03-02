<?php
    include 'includes/connect.php';

    // code to fetch login form details and firing a SELECT query to check if record exists in DB.
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        echo "<script>alert('Both fields are required!'); window.location.href='login.php';</script>";
        exit();
    }
    $query = "SELECT * FROM Users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    // If the record exists in DB, and the credentials match show the profile details or else redirect them back to login page
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        header("Location: profile.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password!'); window.location.href='login.php';</script>";
        exit();
    }
}
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <body>
    <div class="container">
        <h1 class="text-center">Profile</h1>
        <p>First Name: </p>
        <p>Last Name: </p>
        <p>Email: </p>
        <p>Phone: </p>
        <p>Address: </p>
        <!-- Bonus: Add implementation to Edit details and save to Database -->
        <button class="btn btn-primary">Edit</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
    </html>