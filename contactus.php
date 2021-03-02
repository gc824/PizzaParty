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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">PizzaParty</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="ourstory.html">Our Story</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Connect with Us!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipes.html">Recipes</a>
                </li>
            </ul>

            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Hot out of the Oven</a></li>
                            <li><a class="dropdown-item" href="#">Specialty Pizzas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="form" name="form">
        <?php
        $fullname = '';
        $email = '';
        $subject = '';
        $message = '';
        $mailFrom = '';

    if (isset($_Post['submit-btn'])) {

         if (!empty(trim($_POST['name']))) {
            $fullname = trim($_POST['name']);
        } else {
            echo "<p> Name cannot be blank</p>";
        }

        if (!empty(trim($_POST['subject']))) {
            $subject = trim($_POST['subject']);
        } else {
            echo "<p>Subject cannot be blank</p>";
        }

        if (!empty(trim($_POST['message']))) {
            $message = trim($_POST['message']);
        } else {
            echo "<p>Message cannot be blank</p>";
        }

        if (isset($_POST['submit'])) {
            $fullname = $_POST['name'];
            $subject = $_POST['subject'];
            $mailFrom = $_POST['mail'];
            $message = $_POST['message'];
            $mailTo = "gaganchhabra24@yahoo.com";
            $headers = "From: " . $mailFrom;
            $txt = "You have recieved an email from " . $fullname . ".\n\n" . $message;
            mail($mailTo, $subject, $txt, $headers);
            header("Location: contactus.php?mailsend");
        }
    }
        ?>

        <h1> Connect with Us! </h1></br>
        <p>Send E-mail</p><br/>
        <form class="contact-form" action="contactus.php" method="post">
            <input type="text" name="full name" <?= ($fullname ? 'value="' . $fullname . '"' :  ''); ?> placeholder="Full Name"required><br/>
            <input type="email" name="mail" <?= ($email ? 'value="' . $email . '"' : ''); ?> placeholder="Your Email" required><br/>
            <input type="text" names="subject" <?=($subject ? 'value="' . $subject . '"' : ''); ?> placeholder="Subject" required></br/>
            <textarea name="message" placeholder="Tell us about your experience! Better yet..dont." required><?= ($message ? $message : ''); ?></textarea><br/>
            <input type="submit" name="submit-btn"></br>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<--add checkbox for subscribe for coups
</body>

</html>