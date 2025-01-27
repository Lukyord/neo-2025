<!-- NOTE : FUNCTION GROUP -->
<!-- CASE 1 : (D)PICTURE (M)PICTURE -->
<picture class="object-fit">
    <source media="(min-width:992px)" srcset="./assets/img/design/_filename.jpg">
    <source media="(min-width:0px)" srcset="./assets/img/design/_filename-m.jpg">
    <img src="./assets/img/design/_filename.jpg" alt="">
</picture>

<!-- CASE 2 : (D)VIDEO (M)VIDEO -->
<figure class="object-fit">
    <video playsinline autoplay muted loop src="" class="vdojs" data-vdo-src="./assets/img/design/_filename.mp4" data-vdo-srcset="./assets/img/design/_filename-m.mp4" poster="./assets/img/design/_filename.jpg"></video>
</figure>

<!-- CASE 3 : FLEXIBLE -->
<figure class="object-fit hidden-device-sm">
    <video playsinline autoplay muted loop src="" class="vdojs" data-vdo-src="./assets/img/design/_filename.mp4"></video>
    <!-- <img src="./assets/img/design/_filename.jpg" alt=""> -->
</figure>
<figure class="object-fit visible-device-sm">
    <!-- <video playsinline autoplay muted loop src="" class="vdojs" data-vdo-src="./assets/img/design/_filename-m.mp4"></video> -->
    <img src="./assets/img/design/_filename-m.jpg" alt="">
</figure>