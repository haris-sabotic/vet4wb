<?php include "../config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet4WB</title>

    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/about.css">
</head>

<body>
    <?php include "../views/components/nav.php" ?>

    <div class="horizontal-section">
        <h1>About</h1>
        <div class="body">
            <p>
                The “VET for Western Balkans” project aims to contribute to the improvement and modernization of VET
                systems in four
                partners in the Western Balkans: Albania, Bosnia and Herzegovina, Montenegro and Kosovo, and
                reinforcement of the
                links between VET and labour market.
            </p>
        </div>
    </div>

    <hr>

    <div class="horizontal-section">
        <h1>Target Group</h1>
        <div class="body">
            <ul>
                <li>The Balkan partners involved in the project</li>
                <li>Other VET providers in the countries concerned</li>
                <li>Businesses (especially local and regional), business organizations, primary schools, their pupils,
                    and parents, and relevant ministries in the countries concerned</li>
            </ul>
        </div>
    </div>

    <hr>

    <div class="horizontal-section">
        <h1>Expected Outcomes</h1>
        <div class="body">
            <ul>
                <li>Exchange programmes between Erasmus+ Programme Countries and the Western Balkans</li>
                <li>The knowledge, technical and pedagogical skills of VET teachers to be improved</li>
                <li>The knowledge of VET managerial staff to be improved</li>
                <li>The transversal, generic and subject specific skills of learners to be enhanced</li>
            </ul>
        </div>
    </div>

    <hr>

    <div class="section-our-activities">
        <h1>Our Activities</h1>

        <div class="body">
            <p>All project activities: mobilities, trainings, meetings, events, campaigns, establishment of joint task
                forces, curriculum development, new strategies, action plans, introduction of new VET programs, development
                of pedagogy and didactics, development of material etc., are planned and implemented in cooperation among
                the partners, who willingly will share their experiences and networks with each other.</p>

            <div class="photo">
                <a href="#">
                    <img src="https://i0.wp.com/vet4wb.com/wp-content/uploads/2022/07/Training-in-Denmark_1.png?w=657&ssl=1">
                </a>
                <p>Mobility - Student training in Denmark</p>
            </div>
        </div>
    </div>

    <hr>

    <div class="section-partners">
        <h1>Our Partners</h1>

        <div class="partners">
            <?php
            $partners = json_decode(file_get_contents("partners.json"));

            $i = 0;
            foreach ($partners as $partner) {
                $img_url = $partner->{"img_url"};

                echo "
                    <div class=\"partner\" onclick=\"partnerClicked($i)\">
                        <img src=\"$img_url\">
                    </div>
                    \n";

                $i += 1;
            }
            ?>

            <script src="js/partners.js"></script>
        </div>
    </div>

    <div class="partner-dialog">
        <div class="background" onclick="partnerDialogBackgroundClicked()"></div>
        <div class="content">
            <h1 id="partner-name">[PARTNER NAME]</h1>
            <div class="img-container">
                <img id="partner-img" src="https://i0.wp.com/vet4wb.com/wp-content/uploads/2021/09/VEE1061.png?w=1200&ssl=1">
            </div>
            <hr>
            <p><strong>Country:</strong> <span id="partner-country">[Country]</span></p>
            <p><strong>Contact person:</strong> <span id="partner-contact-person">[Contact person]</span></p>
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