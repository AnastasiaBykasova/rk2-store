<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Future Furniture</title>
</head>
	<body>
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="FF navigation bar">
			<div class="container">
				<img src="images/logo.png">
				<a class="navbar-brand" href="index.html">Future Furniture<span></span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFF" aria-controls="navbarsFF" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarsFF">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Главная</a>
						</li>
						<li><a class="nav-link" href="products_list.php">Магазин</a></li>
						<li><a class="nav-link" href="#">О нас</a></li>
						<li><a class="nav-link" href="#">Сервисы</a></li>
					</ul>
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="auth.php"><img src="images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>	
		</nav>
		<div class="product-section">
			<div class="container">
			<div class="container-login-form">
        <form class="login_form" method="post" name="login_form">
            <h1>Authorization</h1>
            <div class="elements-login">
                <p>Login: <input type="text" name="log-name"placeholder="Enter login" size="18"/></p>
                <p>Password: <input type="password" name="pass-name"placeholder="Enter password" size="18"/></p>
                <p>Remember me <input type="checkbox"></p>
                <p><div class="buttons"><input type="reset"><input type="submit"></div></p>
            </div>
        </form>
        </div>
		</div>
		
		<footer class="footer-section">
			<div class="container relative">

				<div class="row g-5 mb-5">
				<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Future Furniture<span></span></a></div>
						<p class="mb-4">Мы предлагаем решения, улучшающие внешний вид и функциональность вашего интерьера.</p>
						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">О нас</a></li>
									<li><a href="#">Сервисы</a></li>
									<li><a href="#">Наш блог</a></li>
									<li><a href="#">Связаться с нами</a></li>
								</ul>
							</div>

							
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved</a> 
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		
	</body>

</html>
