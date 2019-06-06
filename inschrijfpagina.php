<?php
// toon alle fouten & meldingen ivm php code
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('database.php');

    print_r($_POST);
// maak een statement en bind de variabelen
    $stmt = $mysqli->prepare("INSERT INTO tblInschrijvingen (Naam, Email, Volwassenen, Kinderen) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $naam, $email, $volwassenen, $kinderen);
// geef de variabelen een waarde
    $naam = $_POST['name'];
    $email = $_POST['email'];
    $volwassenen = $_POST['volwassenen'];
    $kinderen = $_POST['kinderen'];
// ook dit filteren we best eerst, zien we later

// voer het statement uit
    $stmt->execute();

}
?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="css/screen.css?v=2">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <title>Inschrijven</title>
</head>
<body>
<header>
    <?php
    // een andere pagina in deze pagina steken
    include('views/shared/nav.php');
    ?>
</header>
<main>
    <div class="jumbotron">
        <div class="col-md-5 line">
            <hr>
        </div>
        <div class="col-md-2 logo"><img src="./images/medialaan.png"></div>
        <div class="col-md-5 line">
            <hr>
        </div>
        <div class="info">
            <h3>MEDIALAAN OPENDEURDAG</h3>
           <a class="btn btn-primary" href="#inschrijven">Schrijf je in</a>
        </div>
    </div>
    <div class="container-full">
        <div class="container">
            <div class="row">
                <!-- Eerste kolom-->
                <div class="col-md-4">
                    <i class="fa fa-info fa-5x" aria-hidden="true"></i>
                    <h2>Wat</h2>
                    <p>Zoals ieder jaar nodigen wijn onze trouwe kijkers uit op onze opendeurdag. Een unieke kans om alle Tv zenders te bezoeken
                    en jullie favoriete acteurs/actrices te ontmoeten. Voor de kinderen voorzien we leuke activiteiten.Een dag om niet te missen, tot zo.</p>
                </div>
                <!-- Tweede kolom-->
                <div class="col-md-4">
                    <i class="fa fa-calendar-o fa-5x" aria-hidden="true"></i>
                    <h2>Wanneer</h2>
                    <p>Zaterdag 3 juni bij medialaan 5, heel de dag.</p>
                </div>
                <!-- Derde kolom-->
                <div class="col-md-4">
                    <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>
                    <h2>Onze app</h2>
                    <p>Dit jaar werken wij met een app, waardoor jullie zelf alles kunnen ontdekken op eigen tempo, voor meer info <br><a id="infoapp" href="infopagina.php">klik hier.</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div class="container">
            <h2>Promotiefilmpje</h2> <!--https://www.youtube.com/embed/x1ZNK2Q5cKw-->
            <div class="video-container">
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/T7R_j2FH8Yk"  frameborder="0"
                    allowfullscreen></iframe>
                </div>
        </div>
    </div>
    <div class="jumbotron vertical-center">
        <div class="container">
            <h2 id="inschrijven">Schrijf je nu in!</h2>
            <div class="col-md-6">
                <form method="post" action="#" class="form">
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Naam"
                               value="Type hier uw naam">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                               value="Email">
                    </div>

                    <div class="form-inline">
                        <div class="col-md-6">
                            <h4>Volwassenen</h4>
                            <select class="form-control" name="volwassenen">
                                <?php
                                // een lus om de opties 1 tem 31 weer te geven
                                for ($i = 1; $i <= 10; $i++) {
                                    // wanneer de dag gelijk is aan onze gebruiker ($user), dan willen we de selected property weergeven
                                    if ($volwassenen['volwassenen'] == $i) {
                                        echo "<option value='$i' selected>$i</option>";
                                    } else {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <h4>Kinderen</h4>
                            <select class="form-control" name="kinderen">
                                <?php
                                // een lus om alle jaren tot 2013 te overlopen
                                for ($i = 1; $i <= 10; $i++) {
                                    //wanneer we het jaar tegen komen dat overeenkomt met onze gebruiker, dan willen we de selected property weergeven
                                    // nog een andere manier om hetzelfde of vorige te bereiken
                                    // de concatenatie gebeurt door een punt, de nieuwe regel maakt hier geen verschil
                                    if ($kinderen['kinderen'] == $i) {
                                        echo "<option value='$i' selected>$i</option>";
                                    } else {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">inschrijven</button>
                    </div>
            </div>


            </form>
            <div class="col-md-6 video-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2515.5203492987857!2d4.394978716087456!3d50.914090679542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c2bdd5a7d4bb%3A0x2f4ac0dd886c9eac!2sMedialaan%2C+1800+Vilvoorde!5e0!3m2!1snl!2sbe!4v1494403157476"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</main>
<?php
// een andere pagina in deze pagina steken
include('views/shared/footer.php');
?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>