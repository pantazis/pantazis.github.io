<?php
$menuItems = [
    "About",
    "Privacy Policy",
    "Cookies Policy",
    "Terms of Use",
    "Contact"
];
?>
<div class="footerf"></div>
<footer>
    <div class="container flexf">
            <div class="gridf" style="grid-template-columns: repeat(<?php echo count($menuItems); ?>, auto);">
                <?php foreach ($menuItems as $item) { ?>
                    <div><?php echo htmlspecialchars($item); ?></div>
                <?php } ?>
            </div>
    </div>
</footer>