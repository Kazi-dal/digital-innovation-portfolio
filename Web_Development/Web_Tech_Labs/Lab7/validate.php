<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DGIN 5100</title>
		<meta name="description" content="Title of Site">
		<meta name="author" content="Author Name">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	</head>

	<body>
		<div class="page">
			<section id="description">
				<h1>Lab 7</h1>	
			</section>
			<div class="content">
				<?php
				
				// The script will need to print the results of the validation on this webpage
				// The registration script receives eight values from index.html: first name, last name, email, password, confirm password, submit
				$firstName = $lastName = $email = $password = $confirmedPassword = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
	                $firstName = $_POST["firstName"];
	                $lastName = $_POST["lastName"];
	                $email = $_POST["email"];
	                $password = $_POST["password"];
	                $confirmedPassword = $_POST["confirm"];
                }
							
				//1.  Create a Flag variable to track the success of the script:
				$isValid = true;

				//2. Validate the first name by first ensuring the field is not empty, if it's not empty then validate the field with RegEx, if it is empty then show a meaningful error message and set your flag variable to FALSE
				if (empty($firstName)) {
	                echo "<p><b>[ERROR!]</b> First name cannot be empty</p>";
	                $isValid = false;
                } else {
	                $pattern = "/^[a-zA-Z]+[ ]{0,1}[a-zA-Z]*$/";
	                if (!preg_match($pattern, $firstName)) {
		                echo "<p><b>[ERROR!]</b> First name can only contain letters and may optionally contain a middle name separated by SPACE</p>";
		                $isValid = false;
	                }
                }

				//3. Validate the last name by first ensuring the field is not empty, if it's not empty then validate the field with RegEx, if it is empty then show a meaningful error message and set your flag variable to FALSE
				if (empty($lastName)) {
	                echo "<p><b>[ERROR!]</b> Last name cannot be empty</p>";
	                $isValid = false;
                } else {
	                $pattern = "/^[a-zA-Z'-]+$/";
	                if (!preg_match($pattern, $lastName)) {
		                echo "<p><b>[ERROR!]</b> Last name can only contain letters, apostrophe and/or hyphen and must be a single word";
		                $isValid = false;
	                }
                }


				//4. Validate the email address by first ensuring the field is not empty, if the field is not empty then validate the email address as a valid email address (HINT: PHP has a built-in function for this, but you can also use RegEx), if it is empty then show a meaningful error message and set your flag variable to FALSE
				if (empty($email)) {
	                echo "<p><b>[ERROR!]</b> Email cannot be empty</p>";
	                $isValid = false;
                } 

				//5. Validate the password by first ensuring the field is not empty, if it's not empty then validate the field with RegEx, if it is empty then show a meaningful error message and set your flag variable to FALSE
				if (empty($password)) {
	                echo "<p><b>[ERROR!]</b> Password cannot be empty</p>";
	                $isValid = false;
                }


				//6. Validate the confirm password by checking that the string in confirm password matches the string in password, if the two fields do not match then show a meaningful error message and set your flag variable to FALSE
				if ($confirmedPassword != $password) {
	                echo "<p><b>[ERROR!]</b> Confirmed password must match the original one</p>";
	                $isValid = false;
                }


				//7. If there were no errors (i.e., your flag variable is TRUE, then print a meaningful success message, and display all the values entered by the user back to them by rendering them on the page
				if ($isValid) {
	                $dbServerName = "db.cs.dal.ca";
                	$dbUserName = "Kazi";
                	$dbPassword = "vwFQPnMW7Up95TR9wTy79NRuk";
                	$dbName = "Kazi";
				}

				?>
			</div>
		</div>
		<footer>
			<p>DGIN 5100 &copy;Copyright Kazi Alimul Alam</p>
		</footer>
		<script src="js/script.js"></script>
	</body>
</html>
