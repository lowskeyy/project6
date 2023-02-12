<?php
if (isset($_POST["submit-login"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    if ($user === "login" && $pass = 123) {
        header("Location: make.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Username / Password Salah!
        </div>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="logst.css">
</head>

<body>
    <div class="login">
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="wrapper shadow">
                    <div class="row">
                        <div class="col">
                            <img src="img/login-img.png" alt="" width="453">
                        </div>
                        <div class="col">
                            <br><br><br><br>
                            <div class="row">
                                <h3 class="title ms-4 position-relative"><b>Six</b>News</h3>
                            </div>
                            <br><br><br>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <input type="text" placeholder="Username" autocomplete="off" class="username position-relative" style="width : 228px;" name="username" required>
                                        <div class="input-group-text" style="background-color: white; border:none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-group">
                                        <input type="password" placeholder="Password" autocomplete="off" class="password" style="width : 228px;" name="password" required>
                                        <div class="input-group-text" style="background-color: white; border:none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mt-2">
                                        <a href="#" class="forgot">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn submit-btn" name="submit-login">LOGIN</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="reg">Don't have an account? <a href="register.php" class="text-decoration-none">Sign up</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>