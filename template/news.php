<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">

    <section class="sc-news">
        <div class="sc-inner padding-bottom-0">
            <div class="sc-container a-center">
                <h1 class="news-heading size-h1 weight-medium c-theme">ข่าวสารล่าสุด</h1>
                <div class="swiper auto news-swiper insufficient centered centered-m loop">
                    <div class="swiper-wrapper">
                        <?php
                        $news_arr = array(
                            array(
                                'main_image' => "./assets/img/design/news-main-image1.png",
                                'date' => "3 October 2024",
                                "title" => "กลุ่มบริษัท นีโอ จัดกิจกรรม “Community Go Green”",
                                "short_description" => "มุ่งสร้างวิถีสังคมคาร์บอนต่ำ เพื่อการพัฒนา อย่างมั่นคงและยั่งยืน",
                            ),
                            array(
                                'main_image' => "./assets/img/design/news-main-image2.png",
                                'date' => "3 October 2024",
                                "title" => "นีโอ แฟคทอรี่ ลงนามข้อตกลง ความร่วมมือ ร่วมกับ ม.นเรศวร",
                                "short_description" => "มุ่งพัฒนาผลิตภัณฑ์คุณภาพ เพื่อยกระดับ ความสุขแก่ผู้บริโภคคนไทย มุ่งพัฒนาผลิตภัณฑ์คุณภาพ เพื่อยกระดับ ความสุขแก่ผู้บริโภคคนไทย มุ่งพัฒนาผลิตภัณฑ์คุณภาพ เพื่อยกระดับ ความสุขแก่ผู้บริโภคคนไทย",
                            ),
                            array(
                                'main_image' => "./assets/img/design/news-main-image3.png",
                                'date' => "3 October 2024",
                                "title" => "รับกระแสการเปลี่ยนแปลงการดำเนินธุรกิจในโลกใหม่ ณิศรา ถกลศรี",
                                "short_description" => "รองประธานเจ้าหน้าที่บริหารสายปฏิบัติการ ผู้บริหารไฟแรงแห่ง นีโอ คอร์ปอเรท",
                            ),
                            array(
                                'main_image' => "./assets/img/design/news-main-image1.png",
                                'date' => "3 October 2024",
                                "title" => "กลุ่มบริษัท นีโอ จัดกิจกรรม “Community Go Green”",
                                "short_description" => "มุ่งสร้างวิถีสังคมคาร์บอนต่ำ เพื่อการพัฒนา อย่างมั่นคงและยั่งยืน",
                            ),
                            array(
                                'main_image' => "./assets/img/design/news-main-image2.png",
                                'date' => "3 October 2024",
                                "title" => "นีโอ แฟคทอรี่ ลงนามข้อตกลง ความร่วมมือ ร่วมกับ ม.นเรศวร",
                                "short_description" => "มุ่งพัฒนาผลิตภัณฑ์คุณภาพ เพื่อยกระดับ ความสุขแก่ผู้บริโภคคนไทย",
                            ),
                            array(
                                'main_image' => "./assets/img/design/news-main-image3.png",
                                'date' => "3 October 2024",
                                "title" => "รับกระแสการเปลี่ยนแปลงการดำเนินธุรกิจในโลกใหม่ ณิศรา ถกลศรี",
                                "short_description" => "รองประธานเจ้าหน้าที่บริหารสายปฏิบัติการ ผู้บริหารไฟแรงแห่ง นีโอ คอร์ปอเรท",
                            ),
                        );
                        foreach ($news_arr as $news) {
                            include($root . 'include/element-news-card.php');
                        } ?>

                    </div>
                    <div class="swiper-button-prev spacing-x" data-style="polygon"><span class="polygon-button prev"></span></div>
                    <div class="swiper-button-next spacing-x" data-style="polygon"><span class="polygon-button next"></span></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>