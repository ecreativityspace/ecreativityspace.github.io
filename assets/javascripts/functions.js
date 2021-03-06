window.addEventListener("load", function() {
  $('#load_screen').attr("style", "display:none");
});

$(document).ready(function(){
  $(".tigger").on('click', function(){
    $(this).siblings("p").toggleClass('visible');
  });

  $('#slider').lightSlider({
      item:4,
      loop:false,
      slideMove:2,
      slideMargin:1,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:300,
      keyPress: true,
      controls:true,
      prevHtml: '',
      nextHtml: '',
      pager:false,
      responsive : [
          {
              breakpoint:800,
              settings: {
                  item:3,
                  slideMove:1,
                  slideMargin:6,
                }
          },
          {
              breakpoint:480,
              settings: {
                  item:2,
                  slideMove:1
                }
          }
      ]
  });
  $('.img-wrap').on('click', function(){
  //  $(this).children(".description").toggleClass('visible-description');


    $(".preview").toggleClass('visible-preview').hide().fadeIn('slow');
    $(".close").toggleClass('visible-close').hide().fadeIn('slow');

    var $src = $(this).children(".item").children(".thumb").attr('src');
    var $photo = $("<img>")
            .attr("class", "visible-img")
            .attr("src", $src);

    $(".preview").append($photo);

    var $text = $(this).children(".description").html();
    var $div = $("<div/>")
            .attr("class", "visible-description")
            .html($text);
    $(".preview").append($div);

  });
  $('.close').on('click', function(){
    $(".preview").empty();
    $(".preview").toggleClass('visible-preview');
    $(".close").toggleClass('visible-close');

  });
});
