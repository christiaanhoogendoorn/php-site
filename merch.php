<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merch - DE KLEINE OPSTAND</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- HERO SECTION -->
<section class="hero">
    <picture>
        <!-- Mobile portrait -->
        <source media="(max-width: 768px)" srcset="images/merch-portrait.jpg">
        <!-- Desktop landscape -->
        <img src="images/merch-landscape.jpg" alt="Merch Background" class="page-bg-img">
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
        <h1>MERCH</h1>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="main-content">
    <p>Hier vind je alle merch van De Kleine Opstand: T-shirts, hoodies, en meer.</p>
    <p>Bestel online en steun de band!</p>
    <p>Links naar webshop en social media hieronder.</p>
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
