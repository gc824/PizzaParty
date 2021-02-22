<!DOCTYPE html>
<html>
<head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Connect with Us!</title>
</head>
<body>
    <main>
        <h1> Connect with Us! </h1></br>
        <p>Send E-mail</p>
        <form class = "contact-form" action= "contactus.php" method="post">
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="mail" placeholder="Your Email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name= "message" placeholder="Message"></textarea>
            <button type="submit" name="submit">Send Mail</button>
        </form>

</body>
</html>