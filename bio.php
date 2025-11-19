<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio - De Kleine Opstand</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="page-bg" style="background-image: url('bio.jpg');">

    <!-- Banner -->
    <div class="banner">
        <div class="title">De Kleine Opstand</div>

        <div class="links" id="mobileLinks">
            <a href="index.php">Home</a>
            <a href="bio.php">Bio</a>
        </div>

        <div class="hamburger" id="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Page content -->
    <div class="content">
        <h1>About Me</h1>
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
