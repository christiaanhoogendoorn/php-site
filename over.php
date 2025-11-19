<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over - DE KLEINE OPSTAND</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="page-bg">
    <picture>
        <!-- Mobile portrait -->
        <source media="(max-width: 768px)" srcset="images/over-portrait.jpg">
        <!-- Default desktop landscape -->
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

    <!-- Page content -->
    <div class="content">
            <h1>OVER</h1>
            <p>De Kleine Opstand; drie man sterk. </p>
            <p>Waar Woes en Vinnie in bands als Kinderen Tegen Kinderen, Razzmatazz, R*A*D en Casper speelden, maakte Marco meters als rapper en theatermaker.  </p>
            <p> En hoewel in De Kleine Opstand uit al die bronnen wordt geput, blijft de basis een goeie pot punk.  </p>
        
        </div>

</div>

<script>
const hamburger = document.getElementById('hamburger');
const links = document.getElementById('mobileLinks');

hamburger.addEventListener('click', () => {
    links.classList.toggle('active');
});
</script>

</body>
</html>
