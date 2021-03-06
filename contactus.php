<?php
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Connect with Us!</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
<<<<<<< HEAD
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">PizzaParty</a>
=======
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">PizzaParty</a>
>>>>>>> master
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="ourstory.php">Our Story</a>
				</li>
<<<<<<< HEAD
=======

>>>>>>> master
				<li class="nav-item">
					<a class="nav-link" href="contactus.php">Connect with Us!</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="recipes.php">Recipes</a>
				</li>
<<<<<<< HEAD
                <li class="nav-item">
					<a class="nav-link" href="orderform.php">Order form</a>
				</li>
			</ul>
=======
				<li class="nav-item">
					<a class="nav-link" href="menu.php">Menu</a>
				</li>
			</ul>

>>>>>>> master
			<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Menu
						</a>
						<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
<<<<<<< HEAD
                        <li><a class="dropdown-item" href="menu.php">Hot out of the Oven</a></li>
							<li><a class="dropdown-item" href="menu.php">Specialty Pizzas</a></li>
=======
							<li><a class="dropdown-item" href="#">Hot out of the Oven</a></li>
							<li><a class="dropdown-item" href="#">Specialty Pizzas</a></li>
>>>>>>> master
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="contact us form" name="form">
		<?php
		$fullName = '';
		$email = '';
		$subject = '';
		$message = '';
		$mailFrom = '';
		$errors = array();


		if (isset($_POST['submit-btn'])) {

			if (!empty(trim($_POST['fullName']))) {
				$fullName = trim($_POST['fullName']);
			} else {
				$errors['fullName'] = 'Enter your name!';
			}

			if (!empty(trim($_POST['subject']))) {
				$subject = trim($_POST['subject']);
			} else {
				$errors['subject'] = 'Subject cannot be blank';
			}

			if (!empty(trim($_POST['message']))) {
				$message = trim($_POST['message']);
			} else {
				$errors['message'] = 'Message cannot be blank';
			}

			if (!empty(trim($_POST['email']))) {
				$email = trim($_POST['email']);
			} else {
				$errors['email'] = 'GIVE US YOUR EMAIL';
			}
		}

		?>
		<h1> Connect with Us! </h1><br />
		<p>Send E-mail</p><br />
		<form class="contact-form" action="contactus.php" method="post">
			<input type="text" name="fullName" <?= ($fullName ? 'value="' . $fullName . '"' :  ''); ?> placeholder="Full Name" required>
			<?= (isset($errors['fullName']) && !empty($errors['fullName']) ? '<span class="text-danger">' . $errors['fullName'] . '</span>' : ''); ?><br />
			<input type="email" name="email" <?= ($email ? 'value="' . $email . '"' : ''); ?> placeholder="Your Email" required>
			<?= (isset($errors['email']) && !empty($errors['email']) ? '<span class="text-danger">' . $errors['email'] . '</span>' : ''); ?><br />
			<input type="text" name="subject" <?= ($subject ? 'value="' . $subject . '"' : ''); ?> placeholder="Subject" required><br />
			<?= (isset($errors['subject']) && !empty($errors['subject']) ? '<span class="text-danger">' . $errors['subject'] . '</span>' : ''); ?><br />
			<textarea name="message" placeholder="Tell us about your experience!" required><?= ($message ? $message : ''); ?></textarea><br />
			<input type="submit" name="submit-btn"><br />
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>