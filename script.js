$(document).ready(function () {
  // Dynamic title and navbar active class
  $('.navbar-nav a[href*=".html"]').each(function () {
    if (String(location).includes($(this).attr("href"))) {
      $("a.nav-link.active").removeAttr("aria-current");
      $("a.nav-link.active").removeClass("active");
      $(this).addClass("active");
      $(this).attr("aria-current", "page");
      document.title = $(this).text().trim();
    }
  });
  // Back To Top Button
  var btn = $("#button");

  $(window).scroll(function () {
    if ($(window).scrollTop() > 30) {
      btn.addClass("show");
    } else {
      btn.removeClass("show");
    }
  });

  btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });
  // Stats counter
  $(".counter").counterUp({
    delay: 10,
    time: 1000,
  });
  //   $(".testimonial-carousel").slick({
  //     infinite: true,
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     autoplay: false,
  //     arrows: true,
  //     prevArrow: $(".testimonial-carousel-controls .prev"),
  //     nextArrow: $(".testimonial-carousel-controls .next")
  // });
});
