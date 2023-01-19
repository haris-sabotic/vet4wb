<nav>
    <div class="left">
        <a href="https://vet4wb.com/" class="logo"><img src="img/vet4wb_logo.png" alt="logo"></a>
        <select name="select-language" id="select-language" onchange="languageSelected(this.value)">
            <option value="en">English</option>
            <option value="me">Montenegrin</option>
        </select>
    </div>

    <div class="burger" id="burger">
        <div></div>
        <div></div>
        <div></div>
    </div>


    <div class="links" id="links">
        <?php
        $navLinks = [
            "HOME" => "/",
            "NEWS" => "#",
            "ABOUT" => "/about",
            "CONTACT" => "/contact",
        ];

        foreach ($navLinks as $title => $link) {
            echo "<a ";
            if ($link == "/" . basename($_SERVER["REQUEST_URI"], ".php"))
                echo "class=\"highlighted\"";
            echo " href = \"$link\">$title</a>";
        }
        ?>
    </div>

    <script src="js/nav.js"></script>
</nav>