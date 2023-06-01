<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Apotek | Project UTS</title>

	<link rel="shortcut icon" href="<?php echo AST; ?>/img/pharmacy.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/pharmacy.png" class="brand">
			<div class="user">Apotek <br> Muhammad Juarsyah</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/dashboard.png" alt=""> Beranda
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/jenisobat">
						<img class="icon" src="<?php echo AST; ?>/img/book.png" alt=""> Data Jenis Obat
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/obat">
						<img class="icon" src="<?php echo AST; ?>/img/medicine.png" alt=""> Data Obat
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/users.png" alt=""> Data Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/transaksi">
						<img class="icon" src="<?php echo AST; ?>/img/invoice.png" alt=""> Data Transaksi
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Muhammad Juarsyah
		</footer>
	</main>

</body>

</html>