            <?php if ($page !== '404.php') { ?>

                <footer id="footer">
                    <div class="footer-nav container">

                        <div class="footer-legal">
                            <p class="copyright">©2023 NEO Corporate Public Company Limited. <span class="inline-block">All rights reserved</span> <span class="inline-block webby"><a class="plaimanas" href="https://www.plaimanas.com" target="_blank">::*</a></span></p>

                            <ul class="policy">
                                <li><a href="<?php echo $root; ?>page.php">นโยบายความเป็นส่วนตัว</a></li>
                                <li><a href="<?php echo $root; ?>page.php">ข้อกำหนดและเงื่อนไข</a></li>
                            </ul>
                        </div>

                    </div>
                </footer>

                <div id="clipboard" style="display:none;">Copied</div>

            <?php } ?>
            </div><!-- CLOSE:#page -->

            <?php if ($page_index) {
                include($root . "include/_wp-code/wp-cookie-law-info-bar.php");
            }
            ?>

            <div id="page-message">
                <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
            </div>

            <!-- JS:LIBRARY -->
            <script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
            <script src="<?php echo $root; ?>assets/js/library/share.js"></script>
            <script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
            <script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
            <script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
            <script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
            <script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
            <script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
            <script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/is-in-viewport/3.0.4/isInViewport.min.js"></script>


            <!-- JS:CONFIG -->
            <script src="<?php echo $root; ?>assets/js/theme.js?v=<?php echo time(); ?>"></script>
            <script src="<?php echo $root; ?>assets/js/theme-wp.js?v=<?php echo time(); ?>"></script>
            <script src="<?php echo $root; ?>assets/js/about.js?v=<?php echo time(); ?>"></script>
            <script src="<?php echo $root; ?>assets/js/news-single.js?v=<?php echo time(); ?>"></script>
            <script src="<?php echo $root; ?>assets/js/career.js?v=<?php echo time(); ?>"></script>



            </body>

            </html>