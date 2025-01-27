<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">
    <section id="sc-contact">
        <div class="sc-inner padding-bottom-0">
            <div id="contact" class="sc-container contact">
                <h1 class="size-h1 weight-medium c-theme a-center">ติดต่อเรา</h1>
                <div class="swiper auto insufficient">
                    <div class="swiper-wrapper">
                        <?php
                        $contact_arr = array(
                            array(
                                'image' => "./assets/img/design/contact1.png",
                                'name' => 'บริษัท นีโอ คอร์ปอเรท จำกัด (มหาชน) สำนักงานใหญ่',
                                'address' => "888 ซอยสุขุมวิท 54 แขวงพระโขนงใต้ เขตพระโขนง กรุงเทพมหานคร 10260",
                                "tel" => "+66 2017 8900",
                                "email" => "customerservices@neo-corporate.com",
                                "operating_time" => "เวลาทำการ จันทร์ – ศุกร์ (08:00 – 17:00 น.)",
                                "facebook_link" => "#",
                                "youtube_link" => "#",
                                "google_map_link" => "#",
                            ),
                            array(
                                'image' => "./assets/img/design/contact2.png",
                                'name' => "บริษัท นีโอ แฟคทอรี่ จำกัด",
                                'address' => "168 หมู่ที่ 5 ตำบลบึงคอไห อำเภอลำลูกกา จังหวัดปทุมธานี 12150",
                                "tel" => "+66 2014 9999",
                                "operating_time" => "เวลาทำการ จันทร์ – ศุกร์ (08:30 – 17:30)",
                                "facebook_link" => "#",
                                "youtube_link" => "#",
                                "google_map_link" => "#",
                            ),
                        );
                        foreach ($contact_arr as $contact) {
                            include($root . 'include/element-contact-card.php');
                        } ?>

                    </div>
                    <div class="swiper-button-prev spacing-x prev-button" data-style="polygon"><span class="polygon-button prev"></span></div>
                    <div class="swiper-button-next spacing-x next-button" data-style="polygon"><span class="polygon-button next"></span></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>