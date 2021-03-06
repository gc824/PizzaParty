<!DOCTYPE html>
<html>

<head>
    <title>PizzaParty-Order form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PizzaParty</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="ourstory.php">Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Connect with Us!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipes.php">Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orderform.php">Order form</a>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="menu.php">Hot out of the Oven</a></li>
                            <li><a class="dropdown-item" href="menu.php">Specialty Pizzas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form method="POST" name="pizza" id="pizza">
        <p><strong>Select the pizza size:</strong><br />
            <input type="radio" value="big" name="size" id="size" checked tabindex="1" />Personal-12"<br />
            <input type="radio" value="medium" name="size" id="size" tabindex="2" />Larger-18"<br />
            <input type="radio" value="small" name="size" id="size" tabindex="3" />Sheet
        </p>
        <p>
            <strong>Select the crust type:</strong><br />
            <select name="crust" id="crust" size="1">
                <option value="deep dish" tabindex="4">Deep Dish</option>
                <option value="hand-tossed" tabindex="5">Hand-Tossed</option>
                <option value="thin &amp; crispy" tabindex="6">Thin &amp; Crispy</option>
            </select>
        </p>
        <p>
            <strong>Select the Toppings:</strong><br />
            <input type="checkbox" name="toppings" id="toppings" value="sausages" tabindex="7" />Sausages<br />
            <input type="checkbox" name="pepper" id="toppings" value="sausages" tabindex="8" />Pepper<br />
            <input type="checkbox" name="mushrooms" id="toppings" value="sausages" tabindex="9" />Mushrooms<br />
        </p>
        <p>
            <strong>Name:</strong><input type="text" name="name" id="name" size="20" tabindex="10" /><br />
            <strong>Phone:</strong><input type="text" name="phone" id="phone" size="20" tabindex="11" /><br />
            <textarea rows="2" cols="30" name="message" id="message" tabindex="12" />Message:</textarea>
        </p>
        <input type="submit" value="Send" name="submit" id="submit" />
        <input type="reset" value="Reset" name="reset" id="reset" />
        </p>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>