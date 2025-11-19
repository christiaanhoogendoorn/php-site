<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows - DE KLEINE OPSTAND</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- HERO SECTION -->
<section class="hero">
    <picture>
        <!-- Mobile portrait -->
        <source media="(max-width: 768px)" srcset="images/shows-portrait.jpg">
        <!-- Desktop landscape -->
        <img src="images/shows-landscape.jpg" alt="Shows Background" class="page-bg-img">
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
        <h1>SHOWS</h1>
    </div>
</section>

<!-- MAIN CONTENT -->
<section class="main-content">
    <p>Bekijk hier alle aankomende shows van De Kleine Opstand.</p>
    <p>Data, locaties en ticketlinks vind je hieronder.</p>
    <p>Volg ons op social media voor live updates!</p>
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
