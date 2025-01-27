jQuery(document).ready(function ($) {
  //WP PLUGIN:WPCF7
  $(
    ".wpcf7-checkbox .wpcf7-list-item, .wpcf7-radio .wpcf7-list-item, .wpcf7-acceptance .wpcf7-list-item"
  )
    .find("> label")
    .addClass("choice");

  //WP PAGINATION
  $(".wp-pagenavi").each(function () {
    if ($(this).find(".previouspostslink").length) {
      $(this).addClass("has-prev");
    } else {
      $(this).removeClass("has-prev");
    }
  });

  $(".cky-btn-accept")
    .html(
      '<span class="polygon"><span class="arrow"></span></span>ยอมรับทั้งหมด'
    )
    .addClass("explore");
  $(".cky-btn-reject").html("ปฎิเสธ");
  $(".cky-btn-customize").html("ตั้งค่าคุกกี้");
});
