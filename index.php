<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <script src="assets/vendor/jquery/jquery-3.7.1.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" >

</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">UptoWork</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Features</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Pricing</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Dropdown link
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
			</li>
		</ul>
		</div>
	</div>
	</nav>
	<h2>Die akkreditierte Dienstleistungen, die anbieten.</h2>
	<table border="1" class="text-center">
		<tr class=" ">
			<th>Erste Gruppe</th>
			<th>Zweite Gruppe</th>
		</tr>
		<tr>
			<td>
			<img src="assets/images/faheem.png" width="100px"/>
			<ul>
				<li>Faheem</li>
				<li>Versteht schnell und weiss viel.</li>
			</ul>
			</td>
			<td>
			<img src="assets/images/sportsman.png" width="100px"/>
			<ul>
				<li>Sportler</li>
				<li>Er kennt sich mit seinem Körper gut aus.</li>
			</ul>
			</td>
		</tr>
		<tr>
			<td>
			<img  src="assets/images/coder.png" width="100px"/>
			<ul>
				<li>Programmier</li>
				<li>Er vieles Automatisieren</li>
			</ul>
			</td>
			<td>
			<img  src="assets/images/chemist.png" width="100px"/>
			<ul>
				<li>Chemist</li>
				<li>Er kennt sich mit Chemie so aus, wie keine andere. </li>
			</ul>
			</td>
		</tr>
	</table>
	<form>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="mb-3 form-check">
			<input type="checkbox text-right" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>