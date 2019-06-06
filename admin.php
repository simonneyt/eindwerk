<?php
// toon alle fouten & meldingen ivm php code
error_reporting(E_ALL);

include('database.php');

$sql = "SELECT Id,Naam,Email,Volwassenen,Kinderen FROM tblInschrijvingen";
if (!$result = $mysqli->query($sql)) {
    echo "Sorry, the website is experiencing problems.";
    exit;
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
    <title>Document</title>
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
            <a class="btn btn-primary" href="http://localhost:8080/eindwerk/inschrijfpagina.php#inschrijven">Schrijf je in</a>
        </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Naam</th>
                <th>Email</th>
                <th>Aantal volwassenen</th>
                <th>Aantal kinderen</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // print de gegevens


            while ($inschrijvingen = $result->fetch_assoc()) {
                echo "<tr>\n";
                echo "<td>" . $inschrijvingen['Naam'] . "</td>";
                echo "<td>" . $inschrijvingen['Email'] . "</td>";
                echo "<td>" . $inschrijvingen['Volwassenen'] . "</td>";
                echo "<td>" . $inschrijvingen['Kinderen'] . "</td>";

                echo "</tr>\n";
            }

            ?>
            </tbody>
        </table>


    </div>
</main>
<?php
// een andere pagina in deze pagina steken
include('views/shared/footer.php');
?>
<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>