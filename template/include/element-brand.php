<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>

<div class="brand-container <?php echo $page == '404.php' ? 'pointer-events-none' : '' ?>">
    <div class="brand-nav">
        <ul>
            <li class="brand">
                <a class="link-overlay" href="<?php echo $root; ?>brand-single.php">&nbsp;</a>
                <img class="logo" src="<?php echo $root; ?>assets/img/design/brand-eversense.png" alt="">
            </li>
            <li class="brand">
                <a class="link-overlay" href="<?php echo $root; ?>brand-single.php">&nbsp;</a>
                <img class="logo" src="<?php echo $root; ?>assets/img/design/brand-tros.png" alt="">
            </li>
            <li class="brand">
                <a class="link-overlay" href="<?php echo $root; ?>brand-single.php">&nbsp;</a>
                <img class="logo" src="<?php echo $root; ?>assets/img/design/brand-fineline.png" alt="">
            </li>
            <li class="brand">
                <a class="link-overlay" href="<?php echo $root; ?>brand-single.php">&nbsp;</a>
                <img class="logo" src="<?php echo $root; ?>assets/img/design/brand-dnee.png" alt="">
            </li>
            <li class="brand">
                <a class="link-overlay" href="<?php echo $root; ?>brand-single.php">&nbsp;</a>
                <img class="logo" src="<?php echo $root; ?>assets/img/design/brand-vivite.png" alt="">
            </li>
            <li class="brand">
                <a class="link-overlay" href="<?php echo $root; ?>brand-single.php">&nbsp;</a>
                <img class="logo" src="<?php echo $root; ?>assets/img/design/brand-benice.png" alt="">
            </li>
            <li class="brand">
                <a class="link-overlay" href="<?php echo $root; ?>brand-single.php">&nbsp;</a>
                <img class="logo" src="<?php echo $root; ?>assets/img/design/brand-smart.png" alt="">
            </li>
            <li class="brand">
                <a class="link-overlay" href="<?php echo $root; ?>brand-single.php">&nbsp;</a>
                <img class="logo" src="<?php echo $root; ?>assets/img/design/brand-tomi.png" alt="">
            </li>
        </ul>
    </div>
</div>