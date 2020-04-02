<header>
    <div class="banner-content">

            <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
            <h1><a class="banner-link" href="index.php">Story of Legends</a></h1>
    <!--            <img class="fou" src="img/fou.png" alt="fou">-->
    <!--            <span class="roman"></span>-->

    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="esport.php">Esport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jeux.php">Jeux</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['id'])): ?>
                    <li><a href="fonction/logout.php" class="nav-link">Log out</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li>
                        <div class="btn-nav"><a class="btn btn-primary btn-small navbar-btn" href="signup.php">Sign up!</a>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>


    </nav>
</header>