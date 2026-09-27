<?php
include 'db.php';
session_start();
?>

<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Home</title>

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
        <nav class="navbar navbar-expand-sm navbar-light bg-light">

            <div class="container">

                <a class="navbar-brand" href="#">
                    Navbar
                </a>

                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">

                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                href="insert.php"
                                aria-current="page"
                            >
                                Insert
                            </a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="update.php"
                            >
                                Update
                            </a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="delete.php"
                            >
                                Delete
                            </a>
                        </li>

                    </ul>

                    <form class="d-flex my-2 my-lg-0">

                        <button
                            class="btn btn-outline-success my-2 my-sm-0"
                            type="submit"
                            formaction="csv.php"
                        >
                            Download
                        </button>

                    </form>

                </div>

            </div>

        </nav>
    </header>

    <main>

        <h2>
            hello <?php echo $_SESSION['username'] ?>
        </h2>

        <a href="Logout.php" class="btn btn-danger">
            Logout
        </a>

    </main>

    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Bundle -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYjWJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"
    ></script>

</body>

</html>

