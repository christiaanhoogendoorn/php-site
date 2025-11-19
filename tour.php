<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour - De Kleine Opstand</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="page-bg" style="background-image: url('tour.jpg');">

    <!-- Banner -->
    <div class="banner">
        <div class="title">De Kleine Opstand</div>

        <div class="links" id="mobileLinks">
            <a href="index.php">Home</a>
            <a href="bio.php">Bio</a>
            <a href="tour.php">Tour</a>
        </div>

        <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Page content -->
    <div class="content">
        <h1>Tour De Kleine Opstand</h1>
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
