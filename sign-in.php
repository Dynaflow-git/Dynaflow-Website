<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynaflow International Inc</title>

    <!-- css stylesheet -->
    <link href="style.css/content.css" rel="stylesheet">
    <link href="style.css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css/sign-in.css" rel="stylesheet">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

    <header class="header">
        <a href="#home" class="header__logo">Dynaflow Internation Inc</a>

        <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

        <nav class="nav" id="nav-menu">
            <div class="nav__content bd-grid">
                <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

                <div class="nav__perfil">
                    <div>
                        <a href="index.php" class="nav__name">
                            <img src="./image/icon-header.png" style="height: 110px; width: 225px;">
                        </a>
                    </div>
                </div>
                <div class="nav__menu">
                    <div class="nav__listed">
                        <ul class="nav__list">
                            <li><a href="index.php" class="nav__link">Home</a></li>
                            <li><a href="#web" class="nav__link">Products</a></li>
                            <li><a href="index.php#services" class="nav__link">Services</a></li>
                            <li><a href="index.php#aboutus" class="nav__link">About us</a></li>
                            <li><a href="sign-in.php" class="nav__link">
                                    <img src="./image/log-in.png" alt="Sign_in Icon"
                                        style="height: 18px; width: 20px;" />
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- sign-in/sign-up -->
    <div class="container d-flex justify-content-center align-items-center ">
        <div class="sign-in-registration">
            <p class="fw-bolder">Sign in </p>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <!-- checkbox -->
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    I accept the term & conditions.
                </label>
            </div>

            <a href="./index.html"><button type="button" class="btn btn-dark mt-3">Submit</button></a>
            <p class="fw-light mt-3">Don't have any account? <a href=""><span class="signup">Sign up</span></a></p>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="footer-logo">
                <img src="./image/white signature.png" alt="">
            </div>


            <p class="footer-text">
                <i class="fas fa-map-marker-alt"></i> 906 OMM-Citra Building, San Miguel Avenue, <br>
                Ortigas Center Pasig City, Philippines 1605.
            </p>
            <p class="footer-text">
                <i class="fas fa-phone"></i> +63 920 552 8553
            </p>
            <p class="footer-text">
                <i class="fas fa-envelope"></i> Buyer@dynaflowph.com
            </p>

            <p class="text-muted mt-5">
                © Copyright 2024, Dynaflowph.com
            </p>

            <!-- <div class="card text-center">
                <img class="footer-logo" src="./image/white signature.png" alt="">
                <div class="card-body">
                   
                    <p class="card-text">
                        <i class="fas fa-map-marker-alt"></i> 906 OMM-Citra Building, San Miguel Avenue, <br>
                        Ortigas Center Pasig City, Philippines 1605.
                    </p>
                    <p class="card-text">
                        <i class="fas fa-phone"></i> +63 920 552 8553
                    </p>
                    <p class="card-text">
                        <i class="fas fa-envelope"></i> Buyer@dynaflowph.com
                    </p>
                  
                </div>
                <div class="text-muted">
                    © Copyright 2024, Dynaflowph.com
                </div>
            </div> -->

        </div>
    </footer>


    <!-- up -->
    <script>
    let mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
</body>

</html>