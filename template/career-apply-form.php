<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main">
    <section class="sc-career-apply">
        <div class="sc-inner padding-bottom-0">
            <div id="career-apply" class="sc-container container xl career-apply">

                <h1 class="a-center weight-medium c-theme">ร่วมงานกับนีโอฯ</h1>

                <div class="apply-form alignfull-device-sm">
                    <div class="swiper-container animate fadeIn">
                        <div class="swiper auto gallery fade-effect autoplay loop">
                            <div class="swiper-wrapper">
                                <?php $workplace_image_arr = array(
                                    './assets/img/design/career-apply1.png',
                                    './assets/img/design/career-apply2.png',
                                    './assets/img/design/career-apply3.png',
                                    './assets/img/design/career-apply4.png',
                                    './assets/img/design/career-apply5.png',
                                    './assets/img/design/career-apply6.png',
                                );
                                foreach ($workplace_image_arr as $workplace_image) { ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $workplace_image ?>" alt="workplace-image">
                                    </div>

                                <?php } ?>
                            </div>
                            <div class="swiper-button-prev spacing-x prev-button" data-style="polygon"><span class="polygon-button prev"></span></div>
                            <div class="swiper-button-next spacing-x next-button" data-style="polygon"><span class="polygon-button next"></span></div>
                        </div>
                    </div>



                    <form>
                        <div class="fields animate fadeIn">
                            <div class="field">
                                <div class="input">
                                    <label class="label anim fixed">ชื่อ</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="field">
                                <div class="input">
                                    <label class="label anim fixed">นามสกุล</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="tel-and-email">
                                <div class="field">
                                    <div class="input">
                                        <label class="label anim fixed">เบอร์โทรศัพท์</label>
                                        <input type="number">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="input">
                                        <label class="label anim fixed">อีเมล์</label>
                                        <input type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="input">
                                    <label class="label anim fixed">เลือกตำแหน่งงานที่สนใจ</label>

                                    <div class="select">
                                        <select class="select2" require>
                                            <option value=""></option>
                                            <option value="Option1">Option1</option>
                                            <option value="Option2">Option2</option>
                                            <option value="Option3">Option3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="field ">
                                <div class="input">
                                    <label class="label anim fixed">อัพโหลด Resume</label>
                                    <div class="custom-file-upload" data-button="" data-placeholder="">
                                        <input type="file" id="" name="uploadfile" accept=".pdf,.jpg,.png">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="fields-cta">
                            <button type="submit" class="explore">
                                <span class="polygon"><span class="arrow"></span></span>ส่งใบสมัครงาน

                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>