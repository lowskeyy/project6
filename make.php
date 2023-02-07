<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Mulish&family=Sevillana&display=swap');

    body {
        background-color: #CDF0EA;
        font-family: 'Mulish';
    }

    .navbar {
        background-color: #F9F9F9;
    }

    .nav-link:hover {
        color: #CDF0EA;
        text-shadow: 0 0 1px black;
    }

    .nav-link {
        color: black;
        font-weight: bold;
        /* text-shadow: 0px 0px 2px #FAF4B7; */
    }

    .navActive {
        background-color: #FAF4B7;
    }

    .first-right-top {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }

    .second-right-top {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }
</style>

<body>


    <nav class="navbar navbar-expand-lg shadow">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="fw-bold">Six</span>News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mt-0">
                    <li class="nav-item">
                        <a class="nav-link navActive" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-4">

        <div class="row">

            <div class="col-8">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="template/6. news/img/news-800x500-1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                                <a href="#" class="btn btn-warning mb-2">Bisnis</a> 02 February, 2023.
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="template/6. news/img/news-800x500-2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                                <a href="#" class="btn btn-warning mb-2">Bisnis</a> 02 February, 2023.
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="template/6. news/img/news-800x500-3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75">
                                <a href="#" class="btn btn-warning mb-2">Bisnis</a> 02 February, 2023.
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
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

            <div class="col-4">
                <img src="template/6. news/img/news-700x435-1.jpg" alt="" class="first-right-top">
                <img src="template/6. news/img/news-700x435-2.jpg" alt="" class="second-right-top">
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>