<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Premier projet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/premierePage.php">page d'accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/exercices.php">Exercices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/test.php">Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/notes.php">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/contact.php">Contact</a>
                </li>
                <?php if ($_SESSION["user"]) :
                    if(in_array("ROLE_ADMIN", $_SESSION["user"]["role"])) :
                ?>
                <li class="nav-item">
                    <a class="nav-link active" href="/admin.php">Admin</a>
                </li>
                <?php endif ?>
                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link active" href="/subscribe.php">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active btn btn-success" href="/connexion.php">Connexion</a>
                </li>
                <?php endif ?>
                <li class="nav-item">
                    <a class="nav-link active btn btn-secondary" href="/deconnexion.php">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>