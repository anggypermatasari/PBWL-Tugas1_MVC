<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">

	<title>Tugas_1 | PBWL Project10</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">

	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>

</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/user.png" class="brand">
			<div class="user"><?php echo $_SESSION['user_full_name']; ?></div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/Pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/pelanggan.png" alt=""> Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/Golongan">
						<img class="icon" src="<?php echo AST; ?>/img/menu.png" alt=""> Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/person.png" alt=""> Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/dashboard/logout">
						<img class="icon" src="<?php echo AST; ?>/img/logout.png" alt=""> Logout
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
			Copyright &copy; 2022 - <?php echo date('Y'); ?>. Designed by Dian Putri Kinanti
		</footer>
	</main>

	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>

</body>

</html>