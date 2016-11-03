<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Planets Portfolio Theme
 */

get_header(); ?>

<div id="primary">
  <div id="content" role="main">

  <div id="load_screen">
    <div id="spinner">

      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>
  <div id="panel_bg">
    <div id="panel" class="flex-column">
      <header>
        <h2>ARCHITEKTURA</h2>
      </header>
      <div id="slider_wraper" class="flex-column">
      <ul id="slider" class="flex-row">

        <a href="#" class="img-wrap">
          <div class="description description--grid">
            <h3>Mother's Love</h3>
            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
          </div>
          <li class="item">
            <img src="works/architecture/01.jpg" alt="" class="thumb">
          </li>
        </a>

        <a href="#" class="img-wrap">
          <div class="description description--grid">
            <h3>Mother's Love</h3>
            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
          </div>
        <li class="item">
          <img src="works/architecture/02.jpg" alt="" class="thumb">
        </li>
      </a>
        <a href="#" class="img-wrap">
          <div class="description description--grid">
            <h3>Mother's Love</h3>
            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
          </div>
        <li class="item">
          <img src="works/architecture/03.jpg" alt="" class="thumb">
        </li>
      </a>
        <a href="#" class="img-wrap">
          <div class="description description--grid">
            <h3>Mother's Love</h3>
            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
          </div>
        <li class="item">
          <img src="works/architecture/04.jpg" alt="" class="thumb">
        </li>
      </a>
        <a href="#" class="img-wrap">
          <div class="description description--grid">
            <h3>Mother's Love</h3>
            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
          </div>
        <li class="item">
          <img src="works/architecture/05.jpg" alt="" class="thumb">
        </li>
      </a>
        <a href="#" class="img-wrap">
          <div class="description description--grid">
            <h3>Mother's Love</h3>
            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
          </div>
        <li class="item">
          <img src="works/architecture/06.jpg" alt="" class="thumb">
        </li>
      </a>
        <a href="#" class="img-wrap">
          <div class="description description--grid">
            <h3>Mother's Love</h3>
            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
          </div>
        <li class="item">
          <img src="works/architecture/07.jpg" alt="" class="thumb">
        </li>
      </a>
        <a href="#" class="img-wrap">
          <div class="description description--grid">
            <h3>Mother's Love</h3>
            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
          </div>
        <li class="item">
          <img src="works/architecture/08.jpg" alt="" class="thumb">
        </li>
      </a>
      </ul>
    </div>

    </div>

    <div class="preview">

    </div>
    <i class="fa fa-times close" aria-hidden="true" ></i>
  </div>

</div><!-- #content -->
</div><!-- #primary -->
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
</body>
</html>
