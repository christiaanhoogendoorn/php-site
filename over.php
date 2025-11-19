<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over - DE KLEINE OPSTAND</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- HERO SECTION -->
<section class="hero">
    <picture>
        <!-- Mobile portrait -->
        <source media="(max-width: 768px)" srcset="images/over-portrait.jpg">
        <!-- Desktop landscape -->
        <img src="images/over-landscape.jpg" alt="Over Background" class="page-bg-img">
    </picture>

    <!-- Banner -->
    <div class="banner">
        <a href="index.php" class="title">DE KLEINE OPSTAND</a> 

        <div class="links" id="mobileLinks">
            <a href="over.php">OVER</a>
            <a href="muziek.php">MUZIEK</a>
            <a href="shows.php">SHOWS</a>
            <a href="merch.php">MERCH</a>
        </div>

        <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="hero-content">
        <h1>OVER</h1>
    </div>
</section>


<!-- MAIN CONTENT -->
<section class="main-content">
    <p>De Kleine Opstand; drie man sterk.</p>
    <p>Waar Woes en Vinnie in bands als Kinderen Tegen Kinderen, Razzmatazz, R*A*D en Casper speelden, maakte Marco meters als rapper en theatermaker.</p>
    <p>En hoewel in De Kleine Opstand uit al die bronnen wordt geput, blijft de basis een goeie pot punk.</p>
</section>


<!-- FOOTER -->
<footer class="footer">
    <div class="footer-nav">
        <a href="over.php">OVER</a>
        <a href="muziek.php">MUZIEK</a>
        <a href="shows.php">SHOWS</a>
        <a href="merch.php">MERCH</a>
    </div>

    <div class="footer-social">
        <a href="https://instagram.com" target="_blank">Instagram</a>
        <a href="https://open.spotify.com" target="_blank">Spotify</a>
        <a href="https://tidal.com" target="_blank">Tidal</a>
    </div>
</footer>


<!-- HAMBURGER MENU SCRIPT -->
<script>
const hamburger = document.getElementById('hamburger');
const links = document.getElementById('mobileLinks');

hamburger.addEventListener('click', () => {
    links.classList.toggle('active');
});
</script>

</body>
</html>
