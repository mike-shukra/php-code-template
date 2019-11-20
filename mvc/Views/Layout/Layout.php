<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mikhail Shkuro">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Задачки с корректными данными</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">MVC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/Home">Задачи</a>
                    </li>
                </ul>
            </div>
            <?php 
            if (\App\Session::get('loggedIn') == true) echo'<a class="btn btn-primary" href="/Login/out">Выйти</a>';
            else echo'<a class="btn btn-primary" href="/Login">Войти</a>';
            ?>
        </nav>
    </header>
    <main role="main">

        <?= $body ?>
        <!-- Footer -->
        <footer class="page-footer font-small bg-dark pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-md-left navbar-dark">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-3">
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
                <p>Copyright &copy; Михаил&nbsp;Шкуро 2019</p>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="/scrypt.js"></script> -->
</body>

</html>