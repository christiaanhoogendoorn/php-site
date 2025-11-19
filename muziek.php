<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merch - DE KLEINE OPSTAND</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="page-bg">
    <picture>
        <!-- Mobile portrait -->
        <source media="(max-width: 768px)" srcset="images/muziek-portrait.jpg">
        <!-- Default desktop landscape -->
        <img src="images/muziek-landscape.jpg" alt="Muziek Background" class="page-bg-img">
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
        <h1>MUZIEK</h1>
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
