<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-dark" href="#"></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="navbar-brand" href='#'>
                            laane.ee
                        </a>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="PHP_CV_4.php">Avaleht</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tehtud.php?leht=tehtud">Tehtud Tiid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="oskused.php?leht=oskused">Oskused</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="konntakt.php?leht=konntakt">Kontakt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php?leht=admin">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <form action="admin.php?leht=admin" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="tekst">Sisesta fail</label>
                    <input type="file" name="minu_fail" id="minu_fail">
                    <input type="submit" name="sisesta" value="uploadeeri" class="btn btn-primary mt-3"></button>
                </div>
            </form>
            <?php
// ADMINI LEHT EI TOOTA
// TEKSTIFAIL UPLOADIB, AGA ILMA SEESMISE INFOT
// EI TEA KUIDAS PARANDADA
            if(!empty($_FILES['minu_fail']['name'])){
                $sinu_faili_nimi = $_FILES['minu_fail']['name'];
                $ajutine_fail= $_FILES['minu_fail']['tmp_name'];
                    
                $kataloog = 'munad';
                if(move_uploaded_file($ajutine_fail, $kataloog.'/'.$sinu_faili_nimi)){
                    echo 'Faili üleslaadimine oli edukas';	
                    echo $_FILES['minu_fail']['name'];
                } else {
                    echo 'Faili üleslaadimine ebaõnnestus';
                }}
            ?>

            

        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
