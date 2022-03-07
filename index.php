<?php
    include "php_partial/liste_h1.php";
    $title = $h1[0];
    require 'html_partial/header.php';
?>
    <main id=projet>
        <div id=carousel>
            <span id="directionLeft" style="cursor: pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </span>
            <a href="data.php" class="left">
                <img class="item" id="left" src="img/Mysql8.png">
            </a>
            <a href="Rpg.php" class ="current" >
                <img class="item" id="current" src="img/cmatrix-clear.png">
            </a>
            <a href="ui-design.php" class ="right">
                <img class="item" id="right" src="img/unity-desktop-animation.webp">
            </a>
            <span id="directionRight" style="cursor: pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </span>
        </div>
    </main>
<?php
    include 'html_partial/footer.php';
?>
