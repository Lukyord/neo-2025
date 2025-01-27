<div class="swiper-slide rounded">
    <div class="new-product-wrapper">
        <?php if ($slide['type'] === 'vdo') {
        ?>


            <video playsinline muted loop src="" class="vdojs" data-vdo-src="<?php echo $slide['src'] ?>" data-vdo-srcset="" poster="<?php echo $slide['poster'] ?>"></video>

        <?php
        } else {
        ?>
            <img src="<?php echo $slide['src'] ?>" alt="new-product1">
        <?php } ?>
        <div class="new-product-text">
            <h3 class="size-h3 weight-medium"><?php echo $slide['title'] ?></h3>
            <p class="description size-h6"><?php echo $slide['description'] ?></p>
        </div>
    </div>
</div>