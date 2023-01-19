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
    <link rel="stylesheet" href="css/about.css">
</head>

<body>
    <?php include "../views/components/nav_me.php" ?>

    <div class="horizontal-section">
        <h1>O nama</h1>
        <div class="body">
            <p>
            Projekat "VET za Zapadni Balkan" ("VET for Western Balkan") teži da doprinese unapređenju i modernizaciji stručnog obrazovanja u četiri partnerske zemlje Zapadnog Balkana: Albaniji, Bosni i Hercegovini, Crnoj Gori i na Kosovu, te da sudjeluje u osnaživanju veze između sistema srednjeg stručnog obrazovanja i tržišta rada.
            </p>
        </div>
    </div>

    <hr>

    <div class="horizontal-section">
        <h1>Ciljne Grupe</h1>
        <div class="body">
            <ul>
                <li>Balkanski partneri - učesnici projekta</li>
                <li>Sve zainteresovane strane uključene u sistem stručnog obrazovanja u partnerskim zemljama</li>
                <li>Poslodavci (posebno lokalni i regionalni), kompanije, osnovne škole, učenici i roditelji, kao i resorna ministarstva partnerskih zemalja</li>
            </ul>
        </div>
    </div>

    <hr>

    <div class="horizontal-section">
        <h1>Očekivani rezultati</h1>
        <div class="body">
            <ul>
                <li>Programi razmjene između zemalja članica ERASMUS+ programa i zemalja Zapadnog Balkana</li>
                <li>Unapređenje znanja, tehničkih i pedagoških vještina nastavnog kadra u sistemu stručnog obrazovanja</li>
                <li>Unapređenje znanja rukovodećeg kadra stručnih škola</li>
                <li>Unapređenje transferzalnih, generičkih i posebnih tematskih kompetencija učenika</li>
            </ul>
        </div>
    </div>

    <hr>

    <div class="section-our-activities">
        <h1>Naše aktivnosti</h1>

        <div class="body">
            <p>Sve projektne aktivnosti kao npr. mobilnosti, obuke, sastanci, kampanje, formiranje radnih grupa, razvoj planova i programa, uvođenje novih stručnih programa, pedagoško i didaktičko unapređenje, razvoj obrazovnog materijala, itd. planirane su i implementirane kroz međusobnu saradnju partnera koji vrlo spremno dijele svoja iskustva i mrežu saradnika jedni sa drugima. </p>

            <div class="photo">
                <a href="#">
                    <img src="https://i0.wp.com/vet4wb.com/wp-content/uploads/2022/07/Training-in-Denmark_1.png?w=657&ssl=1">
                </a>
                <p>Mobilnost - Praksa učenika u Danskoj</p>
            </div>
        </div>
    </div>

    <hr>

    <div class="section-partners">
        <h1>Naši partneri</h1>

        <div class="partners">
            <?php
            $partners = json_decode(file_get_contents("partners_me.json"));

            $i = 0;
            foreach ($partners as $partner) {
                $img_url = $partner->{"img_url"};

                echo "
                    <div class=\"partner\" onclick=\"partnerClicked($i, 'partners_me.json')\">
                        <img src=\"$img_url\">
                    </div>
                    \n";

                $i += 1;
            }
            ?>

            <script src="js/partners.js"></script>
        </div>
    </div>

    <hr>

    <div class="form-newsletter-container">
        <h1>ZAPRATITE NAŠE NOVINE</h1>
        <?php include "../views/components/newsletter_form_me.php" ?>
    </div>

    <div class="partner-dialog">
        <div class="background" onclick="partnerDialogBackgroundClicked()"></div>
        <div class="content">
            <h1 id="partner-name">[PARTNER NAME]</h1>
            <div class="img-container">
                <img id="partner-img" src="https://i0.wp.com/vet4wb.com/wp-content/uploads/2021/09/VEE1061.png?w=1200&ssl=1">
            </div>
            <hr>
            <p><strong>Država:</strong> <span id="partner-country">[Country]</span></p>
            <p><strong>Osoba za kontakt:</strong> <span id="partner-contact-person">[Contact person]</span></p>
            <p><strong>Email:</strong> <span id="partner-email">[Email]</span></p>
            <hr>
            <p id="partner-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab impedit dolor velit esse libero
                alias perspiciatis, voluptate culpa modi voluptatem id pariatur hic tenetur adipisci ipsa officiis repudiandae! Eum,
                recusandae!</p>
        </div>
    </div>

    <?php include "../views/components/footer.php" ?>
</body>

</html>