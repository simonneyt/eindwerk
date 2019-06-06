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
    <!-- W3schools -->
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="css/screen.css">
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
    <header class="jumbotron">
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
    </header>

    <!-- Vergelijken -->
    <section class="row" id="app-demo">
        <a name="VERGELIJKEN"></a>
        <h2>Onze app</h2>
        <!-- Boven foto -->
        <div class="w3-content w3-display-container">
            <!--1ste Slide -->
            <div class="w3-display-container mySlides row">
                <a class="w3-btn-floating w3-hover-dark-grey w3-display-left"
                                              onclick="plusDivs(-1)">&#10094;</a>
                    <div class="iphone col-md-6"><img class="img-responsive" src="images/iphone7Home.png"
                                                alt="iphone">
                   
                    </div>
                    <article class="Text col-md-6">
                        <div class="body">
                        <h3>HOME</h3>
                            <p>Op onze home pagina kunt u kiezen uit 4 categorieen. Scan, Overzicht, Filmpjes en map 
                            u kunt natuurlijk ook deze via de menu knop kiezen. Ook is er een taalkeuze bestaande uit
                            Nederlands of Frans.</p>
                            </div>
                    </article>
                    <a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a>
            </div>
            <!--2de Slide -->
            <div class="w3-display-container mySlides row">
                <a class="w3-btn-floating w3-hover-dark-grey w3-display-left"
                            onclick="plusDivs(-1)">&#10094;</a>
                    <div class="iphone col-md-6"><img class="img-responsive" src="images/iphone7Scan.png"
                                                      alt="iphone">
                        
                    </div>
                    <article class="Text col-md-6">
                        <div class="body">
                        <h3>SCAN</h3>
                        <p>Op deze pagina kunt u QR-codes scannen die verspreidt zijn in ons gebouw. Om zo een filmpje en 
                            uitleg te krijgen over de programma's.</p>
                        </div>
                    </article>
                    <a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a>
                

            </div>
            <!--3de Slide -->
            <div class="w3-display-container mySlides row">
                <a class="w3-btn-floating w3-hover-dark-grey w3-display-left"
                            onclick="plusDivs(-1)">&#10094;</a>
                    <div class="iphone col-md-6"><img class="img-responsive" src="images/iphone7Overzicht.png"
                                                      alt="iphone">
                        
                    </div>
                    <article class="Text col-md-6">
                        <div class="body">
                        <h3>OVERZICHT</h3>
                        <p>Op onze overzicht pagina heeft u een overzicht van al onze zenders. Als u op 1 van de 
                            zenders klikt komt u terecht bij al de programma's die behoren tot deze zender.</p>
                        </div>
                    </article>
                    <a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a>
                

            </div>
            <!--4de Slide -->
            <div class="w3-display-container mySlides row">
                <a class="w3-btn-floating w3-hover-dark-grey w3-display-left"
                            onclick="plusDivs(-1)">&#10094;</a>
                    <div class="iphone col-md-6"><img class="img-responsive" src="images/iphone7Filmpjes.png"
                                                      alt="iphone">
                        
                    </div>
                    <article class="Text col-md-6">
                        <div class="body">
                        <h3>FILMPJES</h3>
                        <p>Hier vind u een overzicht van al de filmpjes die u kunt vinden door heel ons gebouw. De filmpjes
                            die u al heeft ingescant kunt u herbekijken, deze die u nog niet in gescant heeft wordt 
                            u herleid naar de zender waar deze zich bevinden.</p>
                        </div>
                    </article>
                    <a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a>
                

            </div>
            <!--5de Slide -->
            <div class="w3-display-container mySlides row">
                <a class="w3-btn-floating w3-hover-dark-grey w3-display-left"
                            onclick="plusDivs(-1)">&#10094;</a>
                    <div class="iphone col-md-6"><img class="img-responsive" src="images/iphone7Map.png"
                                                      alt="iphone">
                        
                    </div>
                    <article class="Text col-md-6">
                        <div class="body">
                        <h3>MAP</h3>
                        <p>Een plattegrond kaart van ons gebouw en een legenda waar welke zender terug te vinden is.</p>
                        </div>
                    </article>
                    <a class="w3-btn-floating w3-hover-dark-grey w3-display-right" onclick="plusDivs(1)">&#10095;</a>
                

            </div>
        </div>
    </section>


</main>
<?php
// een andere pagina in deze pagina steken
include('views/shared/footer.php');
?>
<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>