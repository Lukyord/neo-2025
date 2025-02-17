<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">
    <section id="news-single" class="sc-news-single">
        <div class="sc-inner padding-bottom-0">
            <div class="sc-container news-single">

                <div class="header">
                    <div class="date size-lg c-theme">3 October 2024</div>
                    <h1 class="news-title c-theme weight-bold size-h3">กลุ่มบริษัท นีโอ จัดกิจกรรม “Community Go Green”</h1>
                    <div class="news-socials">
                        <!-- Facebook -->
                        <a href="#" class="social-icon facebook">

                        </a>
                        <!-- Twitter -->
                        <a href="#" class="social-icon twitter">

                        </a>
                    </div>

                </div>

                <div class="separator"></div>

                <div class="news-content">
                    <div class="news-gallery">
                        <div class="swiper thumb autoplay loop">
                            <div class="swiper-wrapper">
                                <?php
                                $image_src_arr = array(
                                    "./assets/img/design/news-main-image1.png",
                                    "./assets/img/design/news-main-image2.png",
                                    "./assets/img/design/news-main-image3.png",
                                    "./assets/img/design/news-main-image1.png",
                                    "./assets/img/design/news-main-image2.png",
                                    "./assets/img/design/news-main-image3.png",
                                );
                                foreach ($image_src_arr as $image_src) { ?>
                                    <div class="swiper-slide news-main-image">
                                        <img src="<?php echo $image_src ?>" alt="news-main-image" class="main-image">
                                    </div>
                                <?php }
                                ?>
                            </div>
                            <div class="swiper-button-prev spacing-x prev-button" data-style="polygon"><span class="polygon-button prev"></span></div>
                            <div class="swiper-button-next spacing-x next-button" data-style="polygon"><span class="polygon-button next"></span></div>
                        </div>

                        <div class="swiper thumbnail">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($image_src_arr as $image_src) { ?>

                                    <div class="swiper-slide news-gallery">
                                        <div class="thumbnail-image-wrapper">
                                            <img src="<?php echo $image_src ?>" alt="news-thumbnail-image" class="thumbnail-image">
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>

                        </div>
                    </div>
                    <div class="entry-content-wrapper">
                        <div class="entry-content">
                            <p>ก่อตั้งขึ้นในปี พ.ศ. 2532 ภายใต้ชื่อ บริษัท ไบโอ คอนซูเมอร์ จำกัด โดยมีปณิธานที่จะผลิตและจัดจำหน่าย สินค้าอุปโภค ที่มีคุณภาพที่ดี บรรจุภัณฑ์ทันสมัยและสะดวกในการใช้ ในราคาที่เหมาะสมให้แก่ผู้บริโภค มีการขยายไลน์สินค้าที่ผลิตและจัดจำหน่าย ทั้งจากการสร้างสรรค์แบรนด์ใหม่ ๆ และเพิ่มประเภทของสินค้า ในแต่ละแบรนด์ เพื่อให้ครอบคลุมกับความต้องการของผู้บริโภคและเหมาะสมกับ Lifestyle ในทุกช่วงอายุ</p>
                            <p>ทั้งนี้ บริษัทฯ ยังให้ความสำคัญกับคุณภาพสินค้าและจุดขายที่แตกต่างจากคู่แข่ง อีกทั้งยังจัดตั้ง R&D Center โดยระดมผู้เชี่ยวชาญในแต่ละส่วนงาน รวมทั้งจับมือกับคู่ค้าระดับโลก พัฒนาผลิตภัณฑ์ที่มี นวัตกรรม เพื่อตอบโจทย์ผู้บริโภคให้ดีที่สุด และยกระดับมาตรฐานการผลิตระดับสูง โดยคำนึงถึงการพัฒนา อย่างยั่งยืน ตามเจตนารมณ์ตั้งแต่ก่อตั้งบริษัทฯ จนถึงปัจจุบัน เพื่อส่งต่อผลิตภัณฑ์คุณภาพที่สามารถ ตอบสนองความต้องการของผู้บริโภคซึ่งมีการเปลี่ยนแปลงตลอดเวลา</p>
                            <p>ก่อตั้งขึ้นในปี พ.ศ. 2532 ภายใต้ชื่อ บริษัท ไบโอ คอนซูเมอร์ จำกัด โดยมีปณิธานที่จะผลิตและจัดจำหน่าย สินค้าอุปโภค ที่มีคุณภาพที่ดี บรรจุภัณฑ์ทันสมัยและสะดวกในการใช้ ในราคาที่เหมาะสมให้แก่ผู้บริโภค มีการขยายไลน์สินค้าที่ผลิตและจัดจำหน่าย ทั้งจากการสร้างสรรค์แบรนด์ใหม่ ๆ และเพิ่มประเภทของสินค้า ในแต่ละแบรนด์ เพื่อให้ครอบคลุมกับความต้องการของผู้บริโภคและเหมาะสมกับ Lifestyle ในทุกช่วงอายุ</p>
                            <p>ทั้งนี้ บริษัทฯ ยังให้ความสำคัญกับคุณภาพสินค้าและจุดขายที่แตกต่างจากคู่แข่ง อีกทั้งยังจัดตั้ง R&D Center โดยระดมผู้เชี่ยวชาญในแต่ละส่วนงาน รวมทั้งจับมือกับคู่ค้าระดับโลก พัฒนาผลิตภัณฑ์ที่มี นวัตกรรม เพื่อตอบโจทย์ผู้บริโภคให้ดีที่สุด และยกระดับมาตรฐานการผลิตระดับสูง โดยคำนึงถึงการพัฒนา อย่างยั่งยืน ตามเจตนารมณ์ตั้งแต่ก่อตั้งบริษัทฯ จนถึงปัจจุบัน เพื่อส่งต่อผลิตภัณฑ์คุณภาพที่สามารถ ตอบสนองความต้องการของผู้บริโภคซึ่งมีการเปลี่ยนแปลงตลอดเวลา</p>
                            <p>ก่อตั้งขึ้นในปี พ.ศ. 2532 ภายใต้ชื่อ บริษัท ไบโอ คอนซูเมอร์ จำกัด โดยมีปณิธานที่จะผลิตและจัดจำหน่าย สินค้าอุปโภค ที่มีคุณภาพที่ดี บรรจุภัณฑ์ทันสมัยและสะดวกในการใช้ ในราคาที่เหมาะสมให้แก่ผู้บริโภค มีการขยายไลน์สินค้าที่ผลิตและจัดจำหน่าย ทั้งจากการสร้างสรรค์แบรนด์ใหม่ ๆ และเพิ่มประเภทของสินค้า ในแต่ละแบรนด์ เพื่อให้ครอบคลุมกับความต้องการของผู้บริโภคและเหมาะสมกับ Lifestyle ในทุกช่วงอายุ</p>
                            <p>ทั้งนี้ บริษัทฯ ยังให้ความสำคัญกับคุณภาพสินค้าและจุดขายที่แตกต่างจากคู่แข่ง อีกทั้งยังจัดตั้ง R&D Center โดยระดมผู้เชี่ยวชาญในแต่ละส่วนงาน รวมทั้งจับมือกับคู่ค้าระดับโลก พัฒนาผลิตภัณฑ์ที่มี นวัตกรรม เพื่อตอบโจทย์ผู้บริโภคให้ดีที่สุด และยกระดับมาตรฐานการผลิตระดับสูง โดยคำนึงถึงการพัฒนา อย่างยั่งยืน ตามเจตนารมณ์ตั้งแต่ก่อตั้งบริษัทฯ จนถึงปัจจุบัน เพื่อส่งต่อผลิตภัณฑ์คุณภาพที่สามารถ ตอบสนองความต้องการของผู้บริโภคซึ่งมีการเปลี่ยนแปลงตลอดเวลา</p>
                        </div>
                    </div>
                </div>


                <div class="news-button-footer">
                    <div class="separator"></div>
                    <div class="white-gradient">&nbsp;</div>
                    <div class="buttons">
                        <a class="back" href="./news.php">
                            <span class="back-icon"></span>
                            กลับ
                        </a>
                        <a class="explore next-news" href="#"><span class="polygon"><span class="arrow"></span></span>อ่านข่าวถัดไป</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>

<?php include($root . "footer.php"); ?>