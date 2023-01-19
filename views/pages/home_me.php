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
    <?php include "../views/components/nav_me.php" ?>
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
                <img src="/img/slikav2.png">
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
                <h1>O nama</h1>
                <p>Projekat "VET za Zapadni Balkan" ("VET for Western Balkan") teži da doprinese unapređenju i modernizaciji stručnog obrazovanja u četiri partnerske zemlje Zapadnog Balkana: Albaniji, Bosni i Hercegovini, Crnoj Gori i na Kosovu, te da sudjeluje u osnaživanju veze između sistema srednjeg stručnog obrazovanja i tržišta rada.</p>
                <a href="/about">PROČITAJTE VIŠE</a>
            </div>
        </div>
    <?php endif ?>


    
    <?php if ($CONFIG["HOME_SHOW_CONTACT_FORM"]) : ?>
        <hr>
        <div class="form-contact-container">
            <h1>KONTAKTIRAJTE NAS</h1>
            <?php include "../views/components/contact_form_me.php" ?>
        </div>
    <?php endif ?>

    <?php if ($CONFIG["HOME_SHOW_NEWSLETTER_FORM"]) : ?>
        <hr>
        <div class="form-newsletter-container">
            <h1>ZAPRATITE NAŠE NOVINE</h1>
            <?php include "../views/components/newsletter_form_me.php" ?>
        </div>
    <?php endif ?>


    <?php include "../views/components/footer.php" ?>
</body>

</html>