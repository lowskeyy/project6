<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="utast.css">
    <title>Home</title>
</head>

<body>

    <!-- Navbar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a class="navbar-brand fs-1" href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="125" viewBox="0 0 160 125">
                        <image width="160" height="125" xlink:href="data:img/png;base64,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" />
                    </svg><span class="fw-bold fs-1">SIX</span>NEWS</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <div class="collapse navbar-collapse navbarNav" id="navbarNav">
                <ul class="navbar-nav mt-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-sun-fill theme-icon-active" data-theme-icon-active="bi-sun-fill"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item d-flex align-items-center" role="button" data-bs-theme-value="light">
                                    <i class="bi bi-sun-fill me-2 opacity-50" data-theme-icon="bi-sun-fill"></i>
                                    Light
                                </button>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" role="button" data-bs-theme-value="dark">
                                    <i class="bi bi-moon-fill me-2 opacity-50" data-theme-icon="bi-moon-fill"></i>
                                    Dark
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section -->
    <!-- <div class="hero" id="home">
        <main class="content">
            <h1>Mari <br> Membaca <span>Berita</span> <br> Terupdate.</h1>
            <p>Lorem ipsum dolor sit amet <br> consectetur adipisicing elit. Eligendi ullam <br> dolor autem doloremque, dicta omnis?</p>
            <a href="#" class="btn btn-outline-secondary bg-warning">Baca</a>
        </main>
    </div> -->
    <!-- Hero Section End -->

    <!-- Carousel -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/kertas.jpg" class="d-block w-100" alt="img/kertas.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/kertas.jpg" class="d-block w-100" alt="img/kertas.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/kertas.jpg" class="d-block w-100" alt="img/kertas.jpg">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>