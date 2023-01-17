<?php include "../config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet4WB</title>
    <link rel="shortcut icon" href="img/vet4wb_logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <?php include "../views/components/nav.php" ?>

    <div class="grid-container">
        <div class="grid">
            <div class="cell">
                <img src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/2422294/pexels-photo-2422294.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/3184396/pexels-photo-3184396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/2422294/pexels-photo-2422294.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/3184396/pexels-photo-3184396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/3184396/pexels-photo-3184396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>

            <div class="cell">
                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            </div>
        </div>
    </div>

    <?php if ($CONFIG["HOME_SHOW_ABOUT_SECTION"]) : ?>
        <hr>
        <div class="section-about">
            <h1>About</h1>
            <div class="summary">
                <p>The “VET for Western Balkans” project aims to contribute to the improvement and modernization of VET systems in four
                    partners in the Western Balkans: Albania, Bosnia and Herzegovina, Montenegro and Kosovo, and reinforcement of the
                    links between VET and labour market.</p>
                <a href="/about">Read more</a>
            </div>
        </div>
    <?php endif ?>


    <?php if ($CONFIG["HOME_SHOW_CONTACT_FORM"]) : ?>
        <hr>
        <div class="form-contact-container">
            <h1>CONTACT US</h1>
            <?php include "../views/components/contact_form.php" ?>
        </div>
    <?php endif ?>

    <?php if ($CONFIG["HOME_SHOW_NEWSLETTER_FORM"]) : ?>
        <hr>
        <div class="form-newsletter-container">
            <h1>JOIN OUR NEWSLETTER</h1>
            <?php include "../views/components/newsletter_form.php" ?>
        </div>
    <?php endif ?>


    <?php include "../views/components/footer.php" ?>
</body>

</html>