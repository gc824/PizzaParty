<!DOCTYPE html>
<html>

<head>
	<title>PizzaParty</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
	<h1>Our Story</h1>
	<p>The Pizza Party story is really the story about America, from Naples to New York City to Buffalo, NY. In 1938 at
		the age of 12 and 15 Giovanni and Carlo Pardini left their home in Naples, Italy to achieve the American dream.
		<br />
	<p>After a short stay at Ellis Island. Their name was shortened to <i>"Pardi"</i>, they lived in New York City until
		leaving for Buffalo in 1950. The brothers opened <em>"Pizzeria di Pardi"</em> on Grant street in Buffalo's west
		side. In 1986 we expanded to 8 locations in western NY and Pizzeria di Pardi became <b>Pizza Party! </b> Today
		we have three locations serving up the classic pizza & wings Buffalo is known for our original location as well
		as our Hertel Avenue and UB locations.</p>

	<div class="row">
		<div class="col-sm-3">
			<div class="card h-100">
				<img class="card-img-top" src="img/Pizza.jpg" alt="Pizza Pie">
				<div class="card-body h-100">
					<h1 class="card-title"><b>HOT out of the Oven</b></h1>
					<table>
						<thead>
							<th>Fresh Baked Pizza</th>
							<th>Personal-12"</th>
							<th>Large-18"</th>
						</thead>
						<tbody>
							<tr>
								<td>Cheese</td>
								<td>$12.00</td>
								<td>$18.00</td>
							</tr>
							<tr>
								<td>Cheese with One Topping</td>
								<td>$14.00</td>
								<td>$20.00</td>
							</tr>
							<tr>
								<td>Extra Cheese</td>
								<td>$3.00</td>
								<td>$4.00</td>
							</tr>
							<tr>
								<td>Beef it up</td>
								<td>$4.00</td>
								<td>$6.00</td>
							</tr>
						</tbody>
					</table>
					<p><b>Choice of Toppings:</b> Black Olives, Broccoli, Fresh Onions, Green Olives, Mushrooms, Italian Sausage,
						Buffalo Chicken, Pepperoni, Ham.</p>
				</div>
				<div class="card-footer">
					<a href="menu.php" class="btn btn-primary">Menu</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card h-100">
				<img class="card-img-top" src="img/Pizza.jpg" alt="Pizza Pie">
				<div class="card-body">
					<h1><b>Specialty Pizzas</b></h1>
					<h4 class="card-title"><b>Flyers</b> $16.50</h4>
					<p>Slices of pepperoni pizza are called flyers, because of the way they are often tossed around like Frisbees
						with Fresh mozzarella and Fresh Basil.</p>
				</div>
				<div class="card-footer">
					<a href="menu.php" class="btn btn-primary">Menu</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card h-100">
				<img class="card-img-top" src="img/Pizza.jpg" alt="Pizza Pie">
				<div class="card-body">
					<h1><b>Specialty Pizzas</b></h1>
					<h4 class="card-title"><b>Grandma's Pizza</b> $12.50</h4>
					<p>Grandma pizza is a distinct pizza that originates from Long Island, New York. It is a thin, square pizza with
						Cheese, Tomatoes, and Fresh Basil</p>
				</div>
				<div class="card-footer">
					<a href="menu.php" class="btn btn-primary">Menu</a>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card h-100">
				<img class="card-img-top" src="img/Pizza.jpg" alt="Pizza Pie">
				<div class="card-body">
					<h1 class="card-title"><b>House Special</b></h1>
					<h4><b>Becca</b>$25.00</h4>
					<p>I love when it's Hot Bread in the oven</p>
					<hr />
					<h4><b>Chris</b>$20.00</h4>
					<p>Pepperoni, Bacon & Peppers.</p>
					<hr />
					<h4><b>Gagan</b>$14.00</h4>
					<p>Thin crust with Extra Cheese and side of Marinara sauce.</p>
					<hr />
				</div>
				<div class="card-footer">
					<a href="menu.php" class="btn btn-primary">Menu</a>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>