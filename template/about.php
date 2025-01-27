<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">
    <section class="sc-about">
        <div class="sc-inner padding-bottom-0">
            <div id="about" class="sc-container container lg about">

                <h1 class="about-heading size-h1 weight-medium c-theme">เกี่ยวกับนีโอ</h1>

                <div class="swiper thumbnail years">
                    <div class="swiper-wrapper">
                        <?php
                        $years = range(2545, 2575);
                        foreach ($years as $year) { ?>
                            <div class="swiper-slide year">
                                <a class="tab size-h4 weight-medium" data-year="<?php echo $year; ?>">
                                    <?php echo $year; ?>
                                </a>
                            </div>
                        <?php }
                        ?>

                    </div>
                </div>

                <div id="about-content" class="content">
                    <div class="swiper thumb">
                        <div class="swiper-wrapper">
                            <?php
                            $years = range(2545, 2575);
                            foreach ($years as $year) { ?>
                                <div class="swiper-slide content-slide">
                                    <div class="content-text fade">
                                        <h2 class="year-heading c-theme weight-medium size-h2"><?php echo $year ?></h2>
                                        <ul class="year-lists invisible-scrollbar">

                                            <?php
                                            $content = array(
                                                'ดำเนินการเปลี่ยนชื่อบริษัทฯ เป็น บริษัท นีโอ คอร์ปอเรท จำกัด และ บริษัท นีโอ แฟคทอรี่ จำกัด',
                                                'คอร์ปอเรท จำกัด ถือหุ้นในบริษัท นีโอ แฟคทอรี่ จำกัด จำนวน 97.14% เพื่อเตรียมความพร้อม ในการเข้าเป็น บริษัทจดทะเบียนในตลาดหลักทรัพย์',
                                                'เริ่มก่อสร้างโรงงานและคลังสินค้าใหม่ที่ รังสิต คลอง13 โดยมีเนื้อที่ 185 ไร่ เพื่อรองรับกำลังการ ผลิตที่จะเติบโต ขึ้นตามยอดขายของบริษัท โดย โรงงานใหม่สามารถผลิต ได้เพิ่มขึ้น 97% จากกำลัง การผลิตเดิม',
                                                'นำ Lean management project มาใช้ในกลุ่ม บริษัทฯ เพื่อลดค่าใช้จ่ายที่ไม่จำเป็น เปลี่ยนระบบ SAP-Database จาก Database Oracle เป็น Database HANA',
                                                'ดำเนินการเปลี่ยนชื่อบริษัทฯ เป็น บริษัท นีโอ คอร์ปอเรท จำกัด และ บริษัท นีโอ แฟคทอรี่ จำกัด',
                                                'คอร์ปอเรท จำกัด ถือหุ้นในบริษัท นีโอ แฟคทอรี่ จำกัด จำนวน 97.14% เพื่อเตรียมความพร้อม ในการเข้าเป็น บริษัทจดทะเบียนในตลาดหลักทรัพย์',
                                                'เริ่มก่อสร้างโรงงานและคลังสินค้าใหม่ที่ รังสิต คลอง13 โดยมีเนื้อที่ 185 ไร่ เพื่อรองรับกำลังการ ผลิตที่จะเติบโต ขึ้นตามยอดขายของบริษัท โดย โรงงานใหม่สามารถผลิต ได้เพิ่มขึ้น 97% จากกำลัง การผลิตเดิม',
                                                'นำ Lean management project มาใช้ในกลุ่ม บริษัทฯ เพื่อลดค่าใช้จ่ายที่ไม่จำเป็น เปลี่ยนระบบ SAP-Database จาก Database Oracle เป็น Database HANA',
                                            );

                                            foreach ($content as $item) { ?>
                                                <li class="year-list">
                                                    <?php echo $item; ?>
                                                </li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                    <div class="content-image fade">
                                        <img src="./assets/img/design/about-image.png" alt="about-image" class="about-image">
                                    </div>
                                </div>
                            <?php }
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