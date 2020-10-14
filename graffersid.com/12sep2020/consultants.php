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
<style>
#frmCheckUsername {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;display:none;}
#old{
  display: none;
}
#new{
  display: none;
}
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}
.consultants-form{
    list-style: none;
    padding: 0px;
    margin: 0px;
    text-align: left;
    width: 100%;
    display: inline-block;
}
.consultants-form li {
    float: left;
    width: 50%;
    margin-bottom: 50px;
    padding-right: 50px;
}
</style>

<style type="text/css">
  .pageContact .listForm > li label{
    position: unset !important;
  }
</style>
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
            <h1>Please check profile<strong class="textGreen"> existence.</strong> </h1>
            <h4>Thank<br>You.</h4> 

            <div class="boxContactForm">

            <div>
             <form  action="" method="post">
              <div id="old" >
                 <h2 style="color: #000000;font-size: 30px;font-weight: 200;text-transform: none;line-height: 1.8;position: relative;display: inline-block;background-color: #FFF;padding-bottom: 30px;">This profile is already in our Database.</h2>      
              </div>
              <div id="new" >
                 <h2 style="color: #000000;font-size: 30px;font-weight: 200;text-transform: none;line-height: 1.8;position: relative;display: inline-block;background-color: #FFF;padding-bottom: 30px;">You are new pls provide your all details.</h2>      
              </div>
              <ul class="listForm">
                <!-- <li>
                    <input name="Name" type="text" id="username" placeholder="Profile Name*">
                </li> -->
                <li>
                    <input type="text" id="check_user" name="Phone_Number" placeholder="Your Phone*">
                </li>
                <!-- <li>
                    <input type="submit" value="Check Existence">
                </li> -->
              </ul>
            </form>
            </div>


            <div id="frmCheckUsername" >
             <form  id="contact_form" action="" method="post">
              <ul class="consultants-form">
                <li>
                    <input type="text" name="Name" placeholder="Profile Name*">
                </li>
                <li>
                    <input type="text" name="Phone_Number" placeholder="Your Phone*">
                </li>
                <li>
                    <input type="email" name="Email" placeholder="Your Email*">
                </li>
                <li>
                    <input type="text" name="Position" placeholder="Your Position*">
                </li>
                <li>
                    <input type="text" name="Company" placeholder="Your Company*">
                </li>
                <li>
                    <input type="text" name="Experience" placeholder="Your Experience*">
                </li>
                <li>
                    <input type="text" name="Current_CTC" placeholder="Your Current_CTC*">
                </li>
                <li>
                    <input type="text" name="Expected_CTC" placeholder="Your Expected_CTC*">
                </li>
                <li>
                    <input type="text" name="Notice_Period" placeholder="Your Notice_Period*">
                </li>
                <li>
                    <textarea name="feedback" cols="40" rows="4" placeholder="Feedback*"></textarea>
                </li>
                <li>
                    <input type="submit" value="Submit">
                </li>
              </ul>
            </form>
            </div>

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
   $("#check_user").keyup(function(){
      var Phone_Number = $(this).val().trim();
      if(Phone_Number != ''){

         $.ajax({
            url: 'https://graffersid.com/demo/',
            type: 'POST',
            data: {Phone_Number: Phone_Number},
            success: function(response){
              if(response == 1)
              {
                $('#uname_response').html(response);
                $('#frmCheckUsername').show();
                $('#new').show();
                $('#old').hide();
              }
              else {
                $('#uname_response').html(response);
                $('#frmCheckUsername').hide();
                $('#old').show();
                $('#new').hide();
              }
              
            }
         });
      }else{
         $("#uname_response").html("");
      }
    });
 });
</script>
<!-- 
<script>
function checkAvailability() {
  $("#loaderIcon").show();
  var text_value = $("#username").val();
  jQuery.ajax({
  url: "https://graffersid.com/demo/",
  data: {url: $('#username').val()},         
  //data:'username='+$("#username").val(),
  method: 'POST',
  type: 'POST',
  success:function(data){
    alert(text_value);
    $("#user-availability-status").html(data);
    $("#loaderIcon").hide();
  },
  error:function (){}
  });
}
</script> -->

<script>
  $(document).ready(function(){
    $("#contact_form").validate({
    rules :{
        "Name" : {
            required : true
        },
        "Phone_Number" : {
            required : true,
            minlength: 5,
            maxlength:10
        },
        "Email" : {
            required : true,
            email: true
        },
        "Position" : {
            required : true
        },
        "feedback" : {
            required : true,
            minlength: 2
        }
    },
    messages :{
        "Name" : {
            required : 'Enter your name first'
        },
        "Phone_Number" : {
            required : 'Enter your valid mobile no. '
        },
        "Email" : {
            required : 'Enter valid email'
        },
        "Position" : {
            required : 'Enter valid company name'
        },
        "feedback" : {
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
