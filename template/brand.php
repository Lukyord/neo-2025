<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main">
    <section>
        <div class="sc-inner padding-bottom-0">
            <div class="sc-container container sm a-center">

                <div class="sc-headline">
                    <h1 class="sc-heading size-h1 weight-medium c-theme">แบรนด์ของเรา</h1>
                </div>

                <div class="sc-brands alignfull overflow-hidden">
                    <div class="swiper auto loop auto-height-m">
                        <div class="swiper-wrapper brand-single">
                            <div class="swiper-slide">
                                <div class="sc-banner">
                                    <a class="sc-link-overlay" href="./brand-single.php">&nbsp;</a>
                                    <!-- NOTE : FUNCTION GROUP(include/function-group.php) -->
                                    <picture class="object-fit">
                                        <source media="(min-width:992px)" srcset="./assets/img/design/brand1-cover.jpg">
                                        <source media="(min-width:0px)" srcset="./assets/img/design/brand1-cover-m.jpg">
                                        <img src="./assets/img/design/brand1-cover.jpg" alt="">
                                    </picture>
                                </div>
                            </div>

                            <?php
                            $product = array(
                                'image' => './assets/img/design/brand1-products.png',
                                'title' => 'Eversense',
                                'description' => 'เสน่ห์ความสดใสและน่าดึงดูดใจของสาว ๆ คือความหอมมมมม.....
                                แค่เพียงได้สัมผัสกลิ่นก็ตกหลุมรักได้ในทันที Eversense (เอเวอร์เซ้นส์)
                                จึงเริ่มต้นส่งต่อเสน่ห์ผ่านผลิตภัณฑ์ความหอมด้วยโคโลญในปีพ.ศ. 2532
                                ซึ่งได้การตอบรับเป็นอย่างดีจากสาว ๆ ติดใจจนขึ้นเป็นอันดับ 1 ในตลาด
                                ผลิตภัณฑ์ความหอม'
                            );
                            include($root . 'include/element-brand-product.php');
                            ?>


                            <div class="swiper-slide">
                                <div class="sc-banner">
                                    <a class="sc-link-overlay" href="./brand-single.php">&nbsp;</a>
                                    <!-- NOTE : FUNCTION GROUP(include/function-group.php) -->
                                    <picture class="object-fit">
                                        <source media="(min-width:992px)" srcset="./assets/img/design/brand2-cover.jpg">
                                        <source media="(min-width:0px)" srcset="./assets/img/design/brand2-cover-m.jpg">
                                        <img src="./assets/img/design/brand2-cover.jpg" alt="">
                                    </picture>
                                </div>
                            </div>

                            <?php
                            $product = array(
                                'image' => './assets/img/design/brand2-products.png',
                                'title' => 'TROS',
                                'description' => 'TROS (ทรอส) ผลิตภัณฑ์ดูแลตัวเองและสร้างเสน่ห์สำหรับผู้ชาย เชื่อว่าทุกคน สามารถ
                                    เท่ในแบบตัวเองได้ แค่เติมความหอมมั่นใจ ก็ทำเอาสาว ๆ ติดหนึบได้ ง่าย ๆ TROS จึง
                                    เริ่มบุกเบิกตลาดผลิตภัณฑ์โคโลญเสริมความมั่นใจสำหรับ ผู้ชายในปี พ.ศ. 2533 และปร
                                    ะสบความสำเร็จเป็นอย่างยิ่งด้วยยอดขาย ครองอันดับ 1 มายาวนานจนถึงปัจจุบัน'
                            );
                            include($root . 'include/element-brand-product.php');
                            ?>

                            <div class="swiper-slide">
                                <div class="sc-banner">
                                    <a class="sc-link-overlay" href="./brand-single.php">&nbsp;</a>
                                    <!-- NOTE : FUNCTION GROUP(include/function-group.php) -->
                                    <picture class="object-fit">
                                        <source media="(min-width:992px)" srcset="./assets/img/design/brand3-cover.jpg">
                                        <source media="(min-width:0px)" srcset="./assets/img/design/brand3-cover-m.jpg">
                                        <img src="./assets/img/design/brand3-cover.jpg" alt="">
                                    </picture>
                                </div>
                            </div>

                            <?php
                            $product = array(
                                'image' => './assets/img/design/brand3-products.png',
                                'title' => 'Fineline',
                                'description' => 'เพราะแฟชั่นคือภาพสะท้อนความเป็นเอกลักษณ์ของคุณ ไฟน์ไลน์ (fineline) แบรนด์ที่พร้
                                    อมสนับสนุนทุกแฟชั่นจึงเป็นมากกว่าผลิตภัณฑ์ดูแลผ้า ด้วยความเข้าใจและต้องการสร้
                                    างแรงบันดาลใจให้ทุกคนเกิดความกล้าที่จะนำเสนอความเป็นตัวตนในแบบฉบับของคุณเองด้ว
                                    ยผลิตภัณฑ์ทั้งซัก ปรับ และรีด'
                            );
                            include($root . 'include/element-brand-product.php');
                            ?>
                        </div>
                        <div class="swiper-button-prev spacing-x" data-style="polygon"><span class="polygon-button prev"></span></div>
                        <div class="swiper-button-next spacing-x" data-style="polygon"><span class="polygon-button next"></span></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>