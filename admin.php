<!doctype html>
<html lang="en">
    <head>
        <title>Admin</title>
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

            <form action="admin.php?leht=admin" method="get">
                <div class="form-group">
                    <!-- teksti sisestamiseks -->
                    <label for="tekst">Sisesta tekst</label>
                    <input type="text" name="pealkiri" id="pealkiri">
                    <input type="text" name="alapealkiri" id="alapealkiri">
                    <input type="text" name="sisu" id="sisu">
                    <input type="submit" name="sisestatekst" value="pane tekst" class="btn btn-primary mt-3"></button>
                </div>
            </form>

            <!-- pildid 1 -->
            <form action="admin.php?leht=admin" method="post">
                <select name="pildid">
                    <option value="">Vali pilt</option>
                    <?php 
                        $kataloog = 'pildid';
                        $asukoht=opendir($kataloog);
                        while($rida = readdir($asukoht)){
                            if($rida!='.' && $rida!='..'){
                                echo "<option value='$rida'>$rida</option>\n";
                            }
                        }
                    ?>
                </select>
                <input type="submit" value="sisesta">
            </form>

            <!-- pildid 2 -->
            <form action="admin.php?leht=admin" method="post">
                <select name="pildid2">
                    <option value="">Vali pilt</option>
                    <?php 
                        $kataloog = 'pildid';
                        $asukoht=opendir($kataloog);
                        while($rida = readdir($asukoht)){
                            if($rida!='.' && $rida!='..'){
                                echo "<option value='$rida'>$rida</option>\n";
                            }
                        }
                    ?>
                </select>
                <input type="submit" value="sisesta2">
            </form>

            <!-- reset tekstifail -->
            <form action="admin.php?leht=admin" method="post">
                <input type="submit" name="reset" value="reset">
            </form>
        <!-- paneme pildi asukohad ja teksti tekstid.txt faili -->
        <?php
            if(isset($_GET['sisestatekst'])){
                $pealkiri = $_GET['pealkiri'];
                $alapealkiri = $_GET['alapealkiri'];
                $sisu = $_GET['sisu'];
                $tekst = $pealkiri."\n".$alapealkiri."\n".$sisu;
                file_put_contents('tekstid.txt', $tekst.PHP_EOL, FILE_APPEND);
                file_put_contents('tekstid.txt', $tekst.PHP_EOL, FILE_APPEND);
            }
            if(!empty($_POST['pildid'])){
                $pilt = $_POST['pildid'];
                $pilt = 'pildid/'.$pilt;
                file_put_contents('tekstid.txt', $pilt.PHP_EOL, FILE_APPEND);
            }
            if(!empty($_POST['pildid2'])){
                $pilt = $_POST['pildid2'];
                $pilt = 'pildid/'.$pilt;
                file_put_contents('tekstid.txt', $pilt.PHP_EOL, FILE_APPEND);
            }
            if(isset($_POST['reset'])){
                file_put_contents('tekstid.txt', '');
            }
        ?>

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
