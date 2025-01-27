<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<div class="screen">
    <div class="wrapper">
        <div class="panel-overlay overlay-close"></div>
        <div class="panel-close overlay-close">
            <i class="ic ic-close"></i>
        </div>
        <div class="popup-image">
            <img src="./assets/img/design/index-notice.jpg" alt="Index Notice" draggable="false">
        </div>
    </div>
</div>


<main id="main" class="index-main">

    <section data-section="highlight" class="h-flex">
        <div class="sc-billboard sc-grid-row bg-gray-linear c-white">
            <div class="sc-cover overflow-hidden">
                <div class="swiper default fade autoplay loop">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide contain">
                            <!-- NOTE : FUNCTION GROUP(include/function-group.php) -->
                            <!-- CASE 2 : (D)VIDEO (M)VIDEO -->
                            <div class="wrapper">
                                <figure class="object-fit">
                                    <video playsinline autoplay muted loop src="" class="vdojs" data-vdo-src="./assets/vdo/neo.mp4" data-vdo-srcset="" poster=""></video>
                                </figure>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sc-inner">
                <div class="sc-container container sm a-center" data-row-total="1">
                    <div class="sc-group" data-row="bottom">
                        <div class="sc-headline">
                            <h2 class="sc-heading font-heading size-h2">มุ่งมั่นที่จะเป็นบริษัท FMCG แห่ง นวัตกรรมของเอเชีย ที่ช่วยยกระดับคุณภาพชีวิตที่ดีให้กับผู้บริโภค</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>