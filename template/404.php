<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="error-main">
    <section class="h-flex">
        <div class="sc-grid-row">
            <div class="sc-inner overflow-hidden">
                <div class="sc-container container a-center" data-row-total="1">

                    <div class="sc-group" data-row="middle">
                        <div class="sc-logo">
                            <figure class="brand">
                                <img class="logo" src="./assets/img/logo.svg" alt="NEO">
                            </figure>
                        </div>

                        <div class="sc-content">
                            <?php include($root . "include/element-brand.php"); ?>
                        </div>

                        <div class="sc-headline">
                            <h1 class="sc-heading size-h3 weight-medium c-theme">ขออภัย หน้าที่คุณเลือก<span class="inline-block">ยังไม่พร้อมให้บริการ</span></h1>
                        </div>

                        <div class="sc-explore">
                            <a class="explore" href="./index.php"><span class="polygon"><span class="arrow"></span></span>กลับหน้าแรก</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>