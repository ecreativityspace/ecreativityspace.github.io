---
layout: default
body_class: page_template
---

{% include loading.html %}

<div id="panel_bg">
  <div id="panel" class="flex-column">
    <header>
      <h2>architectureeeeee</h2>
    </header>
    <div class="text">
      {{ content }}
    </div>
    <div id="slider_wraper" class="flex-column">
    <ul id="slider" class="flex-row">

      {% for post in paginator.posts %}
      <a href="{{ post.url | prepend: site.baseurl }}" class="img-wrap">
        <div class="description description--grid">
          <h3>Mother's Love</h3>
          <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
        </div>
        <li class="item">
            {% if post.image %}
          <img src="{{ post.image }}" alt="" class="thumb">
            {% endif %}
        </li>
      </a>

    {% endfor %}

    </ul>
  </div>

  </div>

  <div class="preview">

  </div>
  <i class="fa fa-times close" aria-hidden="true" ></i>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="lightslider.js"></script>
<script>
    window.addEventListener("load", function() {
      $('#load_screen').attr("style", "display:none");
    });
    $(document).ready(function() {
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

</script>
{% include pagination.html %}
{% include footer.html %}
