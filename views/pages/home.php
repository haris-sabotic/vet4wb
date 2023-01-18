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
    <div class="home-image">
        <h1>VET for Western</h1>
        <span>Balkans</span>
    </div>

    </div>
    <div class="grid-container">
        <div class="grid">
            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>

            <div class="cell">
                <img src="https://placehold.jp/300x200.png">
            </div>
        </div>
    </div>

    <?php if ($CONFIG["HOME_SHOW_ABOUT_SECTION"]) : ?>
        <hr>
        <div class="section-about">
            <img src="https://placehold.jp/300x300.png" alt="300300">
            <div class="about-us">
                <h1>ABOUT US</h1>
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