<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Link Css -->
	<link rel="stylesheet" href="style2.css">
	<!-- Link Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <title>Halaman Admin | Slamat Karunia</title>
  </head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center mt-4">Welcome <span>Back!</span></h1>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md-6 mt-2 ps-5">
				<img src="img/admin-img.png" alt="admin" width="100%">
			</div>
			<div class="col-md-6 mt-2 pe-5">
				<form action="login.php" method="POST">
				<div class="mb-3">
					<label for="username" class="form-label text-white fw-bold">Username</label>
					<input type="text" name="username" class="form-control" id="username" autofocus="">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label text-white fw-bold">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				<button type="submit" class="btn btn-danger">Sign In</button>
				</form>
			</div>
		</div>
	</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>