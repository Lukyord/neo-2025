<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">
    <section class="sc-career">
        <div class="sc-inner padding-bottom-0">
            <div id="career" class="sc-container container xl career">


                <h1 class="a-center size-h1 weight-medium c-theme">ร่วมงานกับเรา</h1>

                <div class="swiper thumbnail career-tabs">
                    <div class="swiper-wrapper">
                        <?php
                        $career_tabs = array(
                            "Happy Workplace",
                            "ECO Friendly",
                            "ค่านิยมองค์กร"
                        );
                        foreach ($career_tabs as $index => $career_tab) { ?>
                            <div class="swiper-slide">
                                <a class="tab size-h4 weight-medium">
                                    <?php echo $career_tab ?>
                                </a>
                            </div>
                        <?php }
                        ?>

                    </div>
                </div>

                <div class="career-content">
                    <div class=" swiper thumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper auto fade-effect gallery autoplay loop">
                                    <div class="swiper-wrapper">
                                        <?php $workplace_image_arr = array(
                                            './assets/img/design/workplace1.png',
                                            './assets/img/design/workplace2.png',
                                            './assets/img/design/workplace3.png',
                                            './assets/img/design/workplace4.png',
                                            './assets/img/design/workplace5.png',
                                            './assets/img/design/workplace6.png',
                                        );
                                        foreach ($workplace_image_arr as $workplace_image) { ?>
                                            <div class="swiper-slide fit">
                                                <img src="<?php echo $workplace_image ?>" alt="workplace-image">
                                            </div>

                                        <?php } ?>
                                    </div>
                                    <div class="swiper-button-prev spacing-x prev-button" data-style="polygon"><span class="polygon-button prev"></span></div>
                                    <div class="swiper-button-next spacing-x next-button" data-style="polygon"><span class="polygon-button next"></span></div>
                                </div>
                                <div class="content">
                                    <p>บรรยากาศแห่งความสุขพร้อมสิ่งอำนวยความสะดวก ภายใน <span class="c-theme">#บ้านหลังที่สอง</span> ที่จะช่วยให้เกิด Work-Life Balance มีทั้ง โค-เวิร์กกิ้ง สเปซ ซึ่งผู้ร่วมงานสามารถใช้ พื้นที่ได้ทุกเมื่อ ช่วงเวลาก่อนและหลังทำงาน สามารถสร้างเสริมสุขภาพร่างกายให้แข็งแรง ได้ที่ห้องฟิตเนส หรือลู่วิ่งบริเวณสนามหญ้า พร้อมสูดอากาศจากธรรมชาติ </p>
                                    <p>นอกจากนี้ ภายในบริษัทฯ ยังจัดให้มีแคนทีน และร้านกาแฟ เพื่ออำนวยความสะดวก สำหรับผู้ร่วมงาน รวมทั้งมีการ นำผลผลิตจากพืชผักที่ปลูกบนชั้นดาดฟ้ามาปรุงเป็น
                                        เมนูพิเศษอีกด้วย</p>

                                    <a class="explore" href="./career-apply-form.php"><span class="polygon"><span class="arrow"></span></span>สนใจร่วมงานคลิก</a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="swiper auto fade-effect gallery autoplay loop">
                                    <div class="swiper-wrapper">
                                        <?php $workplace_image_arr = array(
                                            './assets/img/design/eco1.png',
                                            './assets/img/design/eco2.png',

                                        );
                                        foreach ($workplace_image_arr as $workplace_image) { ?>
                                            <div class="swiper-slide fit">
                                                <img src="<?php echo $workplace_image ?>" alt="eco-image">
                                            </div>

                                        <?php } ?>
                                    </div>
                                    <div class="swiper-button-prev spacing-x prev-button" data-style="polygon"><span class="polygon-button prev"></span></div>
                                    <div class="swiper-button-next spacing-x next-button" data-style="polygon"><span class="polygon-button next"></span></div>
                                </div>
                                <div class="content">
                                    <div class="eco-paragraph">
                                        <h3 class="size-h5 weight-medium c-black">Minimal Water Waste</h3>
                                        <p>การลดปริมาณน้ำเสียในกระบวนการผลิตให้มีน้อยที่สุด คืนสู่สภาพแวดล้อมอย่างดีที่สุด ด้วยระบบบำบัดน้ำเสียที่มีมาตรฐานสูง​</p>
                                    </div>
                                    <div class="eco-paragraph">
                                        <h3 class="size-h5 weight-medium c-black">Energy Saving</h3>
                                        <p>ดำเนินการติดตั้งระบบ Solar cell และระบบ Inverter กับ Motor ที่มีกำลังขับสูง ในการควบคุมรอบการทำงาน เพื่อลดการใช้พลังงานและเวลาการทำงานของเครื่องยนต์ เครืองจักรต่าง ๆ​​</p>
                                    </div>
                                    <div>
                                        <h3 class="size-h5 weight-medium c-black">ระบบอาคารคัดแยกขยะที่ทันสมัย</h3>
                                    </div>

                                    <a class="explore" href="./career-apply-form.php"><span class="polygon"><span class="arrow"></span></span>สนใจร่วมงานคลิก</a>
                                </div>
                            </div>

                            <div class="swiper-slide value">
                                <img src="./assets/img/design/value.png" alt="value-image">
                                <a class="explore" href="./career-apply-form.php"><span class="polygon"><span class="arrow"></span></span>สนใจร่วมงานคลิก</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="career-cta">
                    <div class="white-gradient"></div>
                    <a class="explore" href="./career-apply-form.php"><span class="polygon"><span class="arrow"></span></span>สนใจร่วมงานคลิก</a>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>