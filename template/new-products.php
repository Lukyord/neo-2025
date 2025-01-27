<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">
    <section>
        <div class="sc-inner padding-bottom-0">
            <div class="sc-container new-products">
                <h1 class="size-h1 weight-medium c-theme a-center">ผลิตภัณฑ์ใหม่ล่าสุดของเรา</h1>

                <div class="sc-new-product">
                    <div class="swiper auto loop centered">
                        <div class="swiper-wrapper">
                            <?php $slide_arr = array(
                                array(
                                    'src' => './assets/img/design/new-product1.png',
                                    'title' => 'Be Nice Natural',
                                    'description' => 'Be Nice Natural 98% Natural Skin Treatment Shower gel',
                                ),
                                array(
                                    'type' => 'vdo',
                                    'src' => './assets/vdo/new-product2.mov',
                                    'poster' => './assets/img/design/new-product2.png',
                                    'title' => 'Be Nice Natural',
                                    'description' => 'Be Nice Natural 98% Natural Skin Treatment Shower gel',
                                ),
                                array(
                                    'src' => './assets/img/design/new-product3.png',
                                    'title' => 'Be Nice Natural',
                                    'description' => 'Be Nice Natural 98% Natural Skin Treatment Shower gel',
                                ),
                            );

                            foreach ($slide_arr as $slide) :
                                include($root . 'include/element-new-product-slide.php');
                            endforeach;
                            ?>
                        </div>
                        <div class="swiper-button-prev spacing-x prev-button" data-style="polygon"><span class="polygon-button prev"></span></div>
                        <div class="swiper-button-next spacing-x next-button" data-style="polygon"><span class="polygon-button next"></span></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>