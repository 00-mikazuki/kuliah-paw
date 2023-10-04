<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengiriman Form</title>
	<style type="text/css">
		body {
			background-color: #9999ff;
			font-family: arial;
		}
		section {
			background-color: white;
			border: 1px solid black;
			width: 97vw;
			margin: 5px auto;
			padding: 25px 10px 70px;
		}
		fieldset {
			background-color: #ddddff;
		}
		td:nth-child(1) {
			width: 180px;
			text-align: right;
			vertical-align: text-top;
			padding-right: 15px;
		}
		td:nth-child(2) {
			width: 250px;
		}
		input[type="text"], input[type="password"], input[type="email"] {
			width: 250px;
		}
		textarea {
			width: 180px;
			height: 50px;
		}
		select {
			width: 190px;
		}

	</style>
</head>
<body>
	<section>
		<h1>Register</h1>

		<form action="processData_form.php" method="POST">
			<?php
				require 'validate.php';
				$surname_pattern = "/^[a-zA-Z'-]+$/"; // format surname (alfabet)
				$email_pattern = "/^[\w\.-]{2,}@([\w-]{2,}\.)+[\w-]{2,}$/"; 
				$password_pattern = "/^[\w\!?.-]{8,}$/";
				$address_pattern = "/^[\w\/.-]{2,}$/";
				$gender_pattern = "/^(male|female)/";

				$errors = array();
				if(isset($_POST['submit'])) {
					validateName($errors, $_POST, 'surname', $surname_pattern);
					validateName($errors, $_POST, 'email', $email_pattern);
					validateName($errors, $_POST, 'password', $password_pattern);
					validateName($errors, $_POST, 'address', $address_pattern);
					validateName($errors, $_POST, 'gender', $gender_pattern);

					if ($errors) { 
						echo '<h1>Invalid, correct the following errors:</h1>';
						foreach ($errors as $field => $error)
							echo "$field $error</br>";
						// tampilkan kembali form
						include 'form.php';
					} else 
						echo 'Form submitted successfully with no errors';
				} else 
					// tampilkan kembali form
					include 'form.php'; 
				
				?>
		</form>
	</section>
</body>
</html>