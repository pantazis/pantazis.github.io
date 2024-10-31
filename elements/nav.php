<?php
// Define the navigation items
/*$navItems = [
    "Search",
    "Publish your product",
    "Buy a product",
    "Login"
];*/

$navItems=[];



?>
<div class="navf"></div>
<nav>
<div class="container">
    <div class="logo">
        <img src="src/images/logo.png" alt="Logo">
    </div>
    <div class="categorys">
        <?php foreach ($navItems as $item) {
    echo "<div>$item</div>";
    }
    ?>

    </div>
    </div>
</nav>