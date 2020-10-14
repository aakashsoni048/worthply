<?php
/**
 * Template Name: Thankyou Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alfyi_graffersid
 */

get_header();
?>
<?php
      if(isset($_REQUEST['submit']))
      {
        extract($_REQUEST);
        
        // Insert Data into databse
        $data=array(
          "feed_comment"=>$feed_comment,
          "create_date"=>date('Y-m-d'),
       );
        global $wpdb;
        $tbl_name="LVrLH2Su2_feedback_custom"; 

       $res=$wpdb->insert($tbl_name,$data);
      } 
?>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/favicon.png" type="image/png" sizes="16x16">  
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static-templates/assets/css/main.css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/css/intlTelInput.css">    
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style type="text/css">
.boxFeedback {
  margin: 130px 180px 50px 180px;
}
.ThankyouContent h1 {
    font-family: 'Poppins', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 25px;
    text-align: center;
    color: #4A58EF;
    text-transform: inherit;
    margin: 0px;
    padding-top: 50px;
}
.ThankyouContent h2 {
    font-family: 'Poppins', sans-serif;
    font-style: normal;
    font-weight: 300;
    font-size: 50px;
    line-height: 40px;
    text-align: center;
    color: #163560;
    margin: 0px;
}
.ThankyouContent h3 {
    font-family: 'Poppins', sans-serif;
    font-style: normal;
    font-weight: 300;
    font-size: 18px;
    line-height: 25px;
    text-align: center;
    color: #A7A7A7;
}
.ThankyouContent .bg-img {
  background-image: url("https://graffersid.com/wp-content/uploads/2020/08/Group-30.png");
  background-color: #FFFFFF; 
  height: 620px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
}
.textdarkseagreen {
    color: #48BD79;
    font-weight: 400;
}
@media only screen and (max-width: 768px) {
  .boxFeedback {
    margin: 150px 20px 20px 20px;
  }
}
</style>

  <div id="primary" class="content-area">
    <main id="main" class="site-main pageContact">    
      <div class="">
        <?php   
        while ( have_posts() ) :
        the_post();
        ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <div class="load">
    <div class="dot"></div>
    <div class="outline"><span></span></div>
  </div>
  <header>
    
    <div class="topBanner">
      <div class="ThankyouContent">
        <div class="boxFeedback">
            <div class="boxAnimation">
              <div class="animation animationHome1">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img1.png" alt="" title="" />
              </div>
              <div class="animation animationHome2">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img2.png" alt="" title="" />
              </div>
              <div class="animation animationHome3">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img3.png" alt="" title="" />
              </div>
              <div class="animation animationHome4">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img4.png" alt="" title="" />
              </div>
              <div class="animation animationHome5">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img5.png" alt="" title="" />
              </div>
              <div class="animation animationHome6">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img6.png" alt="" title="" />
              </div>
              <div class="animation animationHome7">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img7.png" alt="" title="" />
              </div>
              <div class="animation animationHome8">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img8.png" alt="" title="" />
              </div>
              <div class="animation animationHome9">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img9.png" alt="" title="" />
              </div>
              <div class="animation animationHome10">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img10.png" alt="" title="" />
              </div>
              <div class="animation animationHome11">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img11.png" alt="" title="" />
              </div>
              <div class="animation animationHome12">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img12.png" alt="" title="" />
              </div>
              <div class="animation animationHome13">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img13.png" alt="" title="" />
              </div>
              <div class="animation animationHome14">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img14.png" alt="" title="" />
              </div>
              <div class="animation animationHome15">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img15.png" alt="" title="" />
              </div>
              <div class="animation animationHome16">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img16.png" alt="" title="" />
              </div>
              <div class="animation animationHome17">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img17.png" alt="" title="" />
              </div>
              <div class="animation animationHome18">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img5.png" alt="" title="" />
              </div>
              <div class="animation animationHome19">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img1.png" alt="" title="" />
              </div>
              <div class="animation animationHome20">
                <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/homeAnimation-img17.png" alt="" title="" />
              </div>
            </div>

          <div class="container bg-img">
            <h1>Noted!</h1>
            <h2>Thank you for your contribution.</h2>
            <h3>1 Step closer to being <strong class="textdarkseagreen">AWESOME.</strong> <br> We will definitely discuss it in our next TownHall meeting. </h3>
          </div>  

        </div>
      </div>
    </div>
  </header>
</article>
</div>  
</main>
</div>

  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/js/contact_form.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/tilt.jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/jqfloat.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/js/intlTelInput.min.js"></script>    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/js/utils.js"></script>     

  <script type="text/javascript">
    $(".boxDomainSlider .domainSlider a").click(function () {
      var slidenoDomain = $(this).attr("slide")
      $('.allDomainSlider').slick('slickGoTo', slidenoDomain);
    });
    function pageLoad() {
      // $(".loading .loading-image").addClass("dissappear");
      // $(".loading .loading-text").addClass("dissappear");
      $(".topBanner").addClass("goes-up");
      $(".navbar").addClass("show");
      $(".flagImg").delay(1000).addClass("inviewport");
      $(".ratingStar").delay(1000).addClass("inviewport");
      $('.load').delay(1000).addClass("fade-out");
    }
    $( document ).ready(function() {
      pageLoad();
      $("#contactNumber").intlTelInput();
    });    
  </script>
  <script>
    $('.headingBox').tilt({
      maxTilt: 40,
      perspective: 2000,   // Transform perspective, the lower the more extreme the tilt gets.
      easing: "cubic-bezier(.03,.98,.52,.99)",    // Easing on enter/exit.
      scale: 1.1,      // 2 = 200%, 1.5 = 150%, etc..
      speed: 300,    // Speed of the enter/exit transition.
      transition: true,   // Set a transition on enter/exit.
      disableAxis: null,   // What axis should be disabled. Can be X or Y.
      reset: true,   // If the tilt effect has to be reset on exit.
      glare: true,  // Enables glare effect
      maxGlare: 0.4,       // From 0 - 1.
    });
    $('.btn').tilt({
      maxTilt: 20,
      perspective: 1000,   // Transform perspective, the lower the more extreme the tilt gets.
      easing: "cubic-bezier(.03,.98,.52,.99)",    // Easing on enter/exit.
      scale: 1.05,      // 2 = 200%, 1.5 = 150%, etc..
      speed: 300,    // Speed of the enter/exit transition.
      transition: true,   // Set a transition on enter/exit.
      disableAxis: null,   // What axis should be disabled. Can be X or Y.
      reset: true,   // If the tilt effect has to be reset on exit.
      glare: true,  // Enables glare effect
      maxGlare: 0.4,       // From 0 - 1.
    });

    $('.animation').each(function () {
      $(this).jqFloat({
        width: 200,
        height: 200,
        speed: 5000
      });
    });
    (function ($) {
      
            $.fn.visible = function (partial) {
      
              var $t = $(this),
                $w = $(window),
                viewTop = $w.scrollTop(),
                viewBottom = viewTop + $w.height(),
                _top = $t.offset().top,
                _bottom = _top + $t.height(),
                compareTop = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;
      
              return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
      
            };
      
          })(jQuery);
      
          $(window).scroll(function (event) {      
            $(".contentArea").each(function (i, el) {
              var el = $(el);
              if (el.visible(true)) {
                el.addClass("inviewportOnce");
              } else {
                //nothing         
              }
            });
      
          });
  </script>  
  <script>

    function checkForInput(element) {
    // element is passed to the function ^
    
    const $label = $(element).parent();

    if ($(element).val().length > 0) {
      $label.addClass('input-has-value');
    } else {
      $label.removeClass('input-has-value');
    }
    }

    // The lines below are executed on page load
    $('input.textdemo').each(function() {
      checkForInput(this);
    });

    // The lines below (inside) are executed on change & keyup
    $('input').on('change keyup', function() {
      checkForInput(this);  
    });

    $('textarea').on('change keyup', function() {
      checkForInput(this);  
    });
    
  </script>

    

          </article><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; ?>
    </main><!-- #main -->   
  </div><!-- #primary -->
<?php
get_footer();
