<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $brand = $_POST["brand"];
    $description = $_POST["description"];

     $sql=$conn->prepare("insert into produts(p_name, category, price, quantity, brand, description) VALUES (?, ?, ?, ?, ?, ?)");
     $sql->bind_param('ssssss', $name, $category, $price, $quantity, $brand, $description);

   if ( $sql -> execute()) {
        header('Location:Home.php');
    }}
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
                <h1>Insert</h1>
                <form action="insert.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input
                            type="text"
                            class="form-control"
                            id="category"
                            name="category"
                            required
                        />
                    </div>

                       <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input
                            type="number"
                            class="form-control"
                            id="price"
                            name="price"
                            required
                        />
                    </div>

                       <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input
                            type="number"
                            class="form-control"
                            id="quantity"
                            name="quantity"
                            required
                        />
                    </div>
                    
                    <div class="mb-3">
                        <label for="category" class="form-label">Brand</label>
                        <input
                            type="text"
                            class="form-control"
                            id="brand"
                            name="brand"
                            required
                        />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input
                            type="text"
                            class="form-control"
                            id="description"
                            name="description"
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
