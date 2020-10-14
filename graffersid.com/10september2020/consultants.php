<?php
/**
 * Template Name: Consultants Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alfyi_graffersid
 */

get_header();
?>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/favicon.png" type="image/png" sizes="16x16">  
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static-templates/assets/css/main.css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/css/intlTelInput.css">    

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
      <div class="bannerContent">
        <div class="boxContactUs">
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
          <div class="container">
            <h1>We would love to hear from<strong class="textGreen">You.</strong> </h1>
            <h4>Have an idea? Let’s validate it<br>All Ideas are NDA Protected.</h4>     
            <div class="boxContactForm">
             <form  id="contact_form" action="" method="post">
              <ul class="listForm">
                <li>
                  <div>
                    <span class="wpcf7-form-control-wrap your-name">
                      <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name*">
                    </span>
                  </div>
                </li>
                <li>
                  <div>
                    <span class="wpcf7-form-control-wrap your-phone">
                      <input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Phone*">
                    </span>
                  </div>
                </li>
                <li>
                  <div>
                    <span class="wpcf7-form-control-wrap your-email">
                      <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email*">
                    </span>
                  </div>
                </li>
                <li>
                  <div>
                    <span class="wpcf7-form-control-wrap companyName">
                      <input type="text" name="companyName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Company Name*">
                    </span>
                  </div>
                </li>
                <li>
                  <div>
                    <span class="wpcf7-form-control-wrap your-message">
                      <textarea name="your-message" cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message*"></textarea>
                    </span>
                  </div>
                </li>
                <li>
                  <div>
                    <input type="submit" value="Send a message" class="wpcf7-form-control wpcf7-submit">
                  </div>
                </li>
              </ul>
            </form>
            </div>   
          </div>          
        </div>
      </div>
    </div>
  </header>
  <article>
      <div class="boxblog contentArea boxContactDetail">
          <div class="container">
              <section>
                  <h5 class="hrContact">If you want to be a part of our team's journey contact at <a href="mailto:hr@graffersid.com">hr@graffersid.com</a></h5>
                  <div class="innerContactDetail">
                    <ul class="listContactDetail">
                      <li class="mt-1">
                          <span class="iconBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-loaction.png" alt="">
                          </span>  
                          <h4>Location</h4>
                          <p>501 NRK Biz Park, Behind C-21 Mall, Vijay Nagar Square, Scheme 54 PU4, Indore</p>
                      </li>
                      <li>
                          <span class="iconBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-email.png" alt="">
                          </span>  
                          <h4>Email</h4>
                          <p><a href="" title="">sidharth@graffersid.com</a></p>
                      </li>
                      <li>
                          <span class="iconBox">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/skypeIcon.png" alt="">
                          </span>
                          <h4>Skype</h4>
                          <p><a href="#" title="sidharth.jain92">sidharth.jain92</a></p>
                      </li>
                    </ul>
                  </div>
              </section>
          </div>
        </div>
      </div>  
  
  </article>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/js/contact_form.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/tilt.jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/jqfloat.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/js/intlTelInput.min.js"></script>    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/13.0.2/js/utils.js"></script>     



<!-- valid js -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!-- valid js -->

<script>
  $(document).ready(function(){
    $("#contact_form").validate({
    rules :{
        "your-name" : {
            required : true
        },
        "your-phone" : {
            required : true,
            minlength: 5,
            maxlength:10
        },
        "your-email" : {
            required : true,
            email: true
        },
        "companyName" : {
            required : true
        },
        "your-message" : {
            required : true,
            minlength: 2
        }
    },
    messages :{
        "your-name" : {
            required : 'Enter your name first'
        },
        "your-phone" : {
            required : 'Enter your valid mobile no. '
        },
        "your-email" : {
            required : 'Enter valid email'
        },
        "companyName" : {
            required : 'Enter valid company name'
        },
        "your-message" : {
            required : 'Enter your concern please'
        }
    },
        // submitHandler: function (form) { // for demo
        //     $('#portfolioModal6').modal('show');
        //     $('#portfolioModal1').modal('hide');
        // }
    });
  });
</script>


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
