<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$product_id = $_POST["product_id"];

	$sql = $conn->prepare("delete from produts where p_id=?");
	$sql->bind_param('i', $product_id);

	if ($sql->execute()) {
		header('Location:Home.php');
		exit;
	}
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
	<head>
		<title>Title</title>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS v5.3.8 -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
			crossorigin="anonymous"
		/>
	</head>

	<body>
		<header>
			<!-- place navbar here -->
		</header>
		<main>
			<div class="container">
				<h1>Delete</h1>
				<form action="delete.php" method="post">

				  <div class="mb-3">
						<label for="product_id" class="form-label">Product ID</label>
						<input
							type="number"
							class="form-control"
							id="product_id"
							name="product_id"
							required
						/>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>

		</main>
		<footer>
			<!-- place footer here -->
		</footer>
		<!-- Bootstrap JavaScript Bundle (includes Popper) -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
			crossorigin="anonymous"
		></script>
	</body>
</html>
