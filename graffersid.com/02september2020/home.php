<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package alfyi_graffersid
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">		
		<div class="">
		<?php		
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/favicon.png" type="image/png" sizes="16x16">  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static-templates/assets/css/main.css">  
    <style>
    .loadLogo{ position: fixed; width: 100%; height: 100vh; background: #fff; z-index: 999; top: 0px;}
    .loadLogo > div{ position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%); font-size: 0px; font-weight: 600; letter-spacing: 0px;}
    .loadLogo > div > span{ opacity: 0;}
    .loadLogo > div > span{
      animation: fadeInLogo 1s 1 forwards;
      transition-duration: 1500ms; 
      -webkit-transition-duration: 1500ms; 
      transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1) ; 
      -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    }
    @keyframes fadeInLogo {  
    0%   {opacity: 0; font-size: 0px; letter-spacing: 0px;}    
    100% {opacity: 1; font-size: 30px; letter-spacing: 5px;}
    }
    
    .loadLogo > div > span:nth-child(1){animation-delay: 0.30s;}
    .loadLogo > div > span:nth-child(2){animation-delay: 0.60s;}
    .loadLogo > div > span:nth-child(3){animation-delay: 0.90s;}
    .loadLogo > div > span:nth-child(4){animation-delay: 1.20s;}
    .loadLogo > div > span:nth-child(5){animation-delay: 1.50s;}
    .loadLogo > div > span:nth-child(6){animation-delay: 1.80s;}
    .loadLogo > div > span:nth-child(7){animation-delay: 2.10s;}
    .loadLogo > div > span:nth-child(8){animation-delay: 2.40s;}
    .loadLogo > div > span:nth-child(9){animation-delay: 2.70s;}
    .loadLogo > div > span:nth-child(10){animation-delay: 3.00s;}

    </style>


<body>
  <div class="loadLogo">
    <div>
      <span>G</span>
      <span>r</span>
      <span>a</span>
      <span>f</span>
      <span>f</span>
      <span>e</span>
      <span>r</span>
      <span>s</span>
      <span>i</span>
      <span>d</span>
    </div>
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
  </div>
  <!-- <div class="load">
    <div class="dot"></div>
    <div class="outline"><span></span></div>
  </div> -->
  <header>    
    <div class="topBanner">
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
      <div class="bannerContent">
        <div class="container">
          <h1>Graffersid is an award-winning <span>Website</span> and <span>Mobile</span> <br/> Application Development company
            focused on
            <strong class="text-startups">Startups</strong>

            <svg id="rocket-icon" viewBox="0 0 75 75">
              <polygon fill="#4572f4" points="18 21 35 21 44 30 27 30" />
              <polygon fill="#4572f4" points="27 45 44 45 35 54 18 54" />
              <path fill="#4572f4" d="M30.94 47.7c-3.79-.93-6.98-2.35-9.25-4.07a14.88 14.88 0 0 0 0-12.26c2.27-1.72 5.46-3.14 9.25-4.08A14.72 14.72 0 0 1 35 37.5c0 3.98-1.55 7.59-4.06 10.2z"
              />
              <path fill="#6388f4" d="M30.94 27.3c-3.79.93-6.98 2.35-9.25 4.07.84 1.86 1.31 3.94 1.31 6.13h12c0-3.98-1.55-7.59-4.06-10.2z"
              />
              <path fill="#4572f4" d="M57.06 30.13C62.5 33.1 66 36.73 66 37.5c0 .77-3.49 4.4-8.94 7.37A14.83 14.83 0 0 0 59 37.5c0-2.7-.7-5.21-1.94-7.37z"
              />
              <path fill="#6388f4" d="M57.06 30.13C62.5 33.1 66 36.73 66 37.5h-7c0-2.7-.7-5.21-1.94-7.37z" />
              <path fill="#ECFAFF" d="M57.06 44.87C52.94 47.12 47.7 49 42 49c-3.99 0-7.75-.47-11.06-1.3A14.72 14.72 0 0 0 35 37.5c0-3.98-1.55-7.59-4.06-10.2C34.25 26.46 38.01 26 42 26c5.7 0 10.94 1.88 15.06 4.13A14.83 14.83 0 0 1 59 37.5c0 2.7-.7 5.21-1.94 7.37z"
              />
              <path fill="#FCFEFF" d="M57.06 30.13C52.94 27.88 47.7 26 42 26c-3.99 0-7.75.47-11.06 1.3A14.72 14.72 0 0 1 35 37.5h24c0-2.7-.7-5.21-1.94-7.37z"
              />
              <circle cx="49.5" cy="37.5" r="3.5" fill="#4572f4" />
              <path fill="#6388f4" d="M46 37.5h7a3.5 3.5 0 0 0-7 0z" />
              <path fill="#4572f4" d="M21 37.5c0-10.04-11 0-12 0 1 0 12 10.04 12 0z" class="flame" />
            </svg>
          </h1>
          <h3>Have an idea? Let’s validate it</h3>
          <p><a href="#" title="Talk to a Friend" class="btn drift-open-chat"> Talk to a Friend</a> </p>
        </div>
      </div>
      <div class="downScroll">
        <a href="#clients" class="smooth" title="">
          <div class="dowmArrow"><span class="unu"></span> <span class="doi"></span> <span class="trei"></span> </div>
        </a>
      </div>
    </div>
  </header>
  <article>
    <div class="boxClients" id="clients">
      <div class="boxAwards">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-7">
              <div class="animatedArrow">
                  <div class="downScroll">
                    <div class="dowmArrow"><span class="unu"></span> <span class="doi"></span> <span class="trei"></span> </div>
                  </div>
                </div>
              <div class="contentAwards contentAwardsLeft">
                <h5 class="headingBox"><span>Awards</span> </h5>
                <div class="awardsSlider">
                  <div>
                    <div class="flagImg">
                      <h4>Best UI<br/> <span>Design in Premium Category </span> </h4>
                      <h6>Design Conclave</h6>
                    </div>
                  </div>
                  <div>
                    <div class="flagImg">
                      <h4>Top 15 <br/><span>Web development companies in India</span> </h4>
                      <h6>Clutch</h6>
                    </div>
                  </div>
                  <div>
                    <div class="flagImg">
                      <h4>50 Most <br/> <span>influential Global Youth Leader </span> </h4>
                      <h6>World HRD conference</h6>
                    </div>
                  </div>
                  <div>
                    <div class="flagImg">
                      <h4>Rising star<br/> <span>Award</span> </h4>
                      <h6>FinancesOnline</h6>
                    </div>
                  </div>
                  <div>
                    <div class="flagImg">
                      <h4>Great User <br/> <span>Experience </span> </h4>
                      <h6>FinancesOnline</h6>
                    </div>
                  </div>
                  <!-- new section logo -->
                  <div>
                    <div class="flagImg">
                      <img style="width: 120px;" src="https://www.topappcreators.com/blog/wp-content/uploads/2020/07/badge_mobile_appnew.png" alt="android_app_development">
                    </div>
                  </div>
                  <!-- new section logo -->
                  
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-5">
              <div class="contentAwards contentRatings">
                <h5 class="headingBox"><span>Ratings</span> </h5>
                <div class="ratingSlider">
                  <div>
                    <div class="ratingInner">
                      <h4>5 <span>Stars</span> </h4>
                      <p><img class="ratingStar" src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-stars.png" alt="" title="" /></p>
                      <h6><img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-clutch.png" alt="" title="" /> </h6>
                    </div>
                  </div>
                  <div>
                    <div class="ratingInner">
                      <h4>5 <span>Stars</span> </h4>
                      <p><img class="ratingStar" src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-stars5.png" alt="" title="" /></p>
                      <h6><img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_finances_online.png" alt="" title="" /> </h6>
                    </div>
                  </div>
                  <div>
                    <div class="ratingInner">
                      <h4>5 <span>Stars</span> </h4>
                      <p><img class="ratingStar" src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-stars5.png" alt="" title="" /></p>
                      <h6><img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_g2_crowd.png" alt="" title="" /> </h6>
                    </div>
                  </div>
                  <div>
                    <div class="ratingInner">
                      <h4>4.7 <span>Stars</span> </h4>
                      <p><img class="ratingStar" src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-stars.png" alt="" title="" /></p>
                      <h6><img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_glassdoor.png" alt="" title="" /> </h6>
                    </div>
                  </div>
                  <div>
                    <div class="ratingInner">
                      <h4>4.9 <span>Stars</span> </h4>
                      <p><img class="ratingStar" src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-stars.png" alt="" title="" /></p>
                      <h6><img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_facebook.png" alt="" title="" /> </h6>
                    </div>
                  </div>
                  <div>
                    <div class="ratingInner">
                      <h4>4.8 <span>Stars</span> </h4>
                      <p><img class="ratingStar" src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-stars.png" alt="" title="" /></p>
                      <h6><img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_manifest.png" alt="" title="" /> </h6>
                    </div>
                  </div>
                  <div>
                    <div class="ratingInner">
                      <h4>4.9 <span>Stars</span> </h4>
                      <p><img class="ratingStar" src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-stars.png" alt="" title="" /></p>
                      <h6><img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/img-google.png" alt="" title="" /> </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="animationCricle1 animation">
        <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img1.png" alt="" title="" />
      </div>
      <div class="animationCricle2 animation">
        <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img2.png" alt="" title="" />
      </div>
      <div class="animationCricle3 animation">
        <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img2.png" alt="" title="" />
      </div>
      <div class="animationCricle4 animation">
        <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img2.png" alt="" title="" />
      </div>

      <div class="container">
        <h2 class="text-center text-white">How are our previous <strong>clients</strong> doing</h2>
        <h5 class="text-center text-white subHeading">We don’t just develop; we make sure that your start-up becomes successful so we can show it proudly to the world
          for years to come. Hence as a part of the project itself, we guide you from our experience with other start-ups.</h5>
          <div class="row rowProjects">
            <div class="col-sm-3 col-md-3">
              <div class="contentClient">
                <h4><span>70</span>+</h4>
                <h6>Projects <span>Delivered</span></h6>
              </div>
            </div>
            <div class="col-sm-3 col-md-3">
              <div class="contentClient">
                <h4><span>80</span>%</h4>
                <h6>Profitably <span>Operating</span></h6>
              </div>
            </div>
            <div class="col-sm-3 col-md-3">
              <div class="contentClient">
                <h4><span>14</span></h4>
                <h6>Clients Got <span>Funded</span></h6>
              </div>
            </div>
            <div class="col-sm-3 col-md-3">
              <div class="contentClient">
                <h4><span>95</span>%</h4>
                <h6>Happy <span>Clients</span></h6>
              </div>
            </div>
          </div>
        <h5 class="text-center text-white subHeading"> Your Success is our success.</h5>
        <p class="text-center">
          <a href="process.html" title="Checkout our Process" class="btn btn-white">Checkout our Process</a>
        </p>
      </div>
      <div class="downScroll">
        <a href="#allServices" class="smooth" title="">
          <div class="dowmArrow"><span class="unu"></span> <span class="doi"></span> <span class="trei"></span> </div>
        </a>
      </div>
    </div>
    <div class="innerMain">
      <div class="boxServices contentArea" id="allServices">
        <div class="animationCricle5 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img3.png" alt="" title="" />
        </div>
        <div class="animationCricle6 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img3.png" alt="" title="" />
        </div>
        <div class="animationCricle7 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img4.png" alt="" title="" />
        </div>
        <div class="animationCricle8 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img4.png" alt="" title="" />
        </div>
        <div class="container">
          <h2>Services</h2>
          <h5 class="text-center subHeading">Startups are tricky, hence their softwares need to be equally agile and future ready. We make the system scalable
            with latest technology and best testing standards.</h5>
          <div class="tabServices">
            <div class="boxnavtabServices">
              <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="pills-designing-tab" data-toggle="pill" href="#pills-designing" role="tab" aria-controls="pills-designing"
                    aria-selected="true"><span>Designing</span> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-prototype-tab" data-toggle="pill" href="#pills-prototype" role="tab" aria-controls="pills-prototype"
                    aria-selected="false"><span>Prototype</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-website-tab" data-toggle="pill" href="#pills-website" role="tab" aria-controls="pills-website"
                    aria-selected="false"><span>Website</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-mobile-tab" data-toggle="pill" href="#pills-mobile" role="tab" aria-controls="pills-mobile" aria-selected="false"><span>Mobile</span></a>
                </li>
              </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade" id="pills-designing" role="tabpanel" aria-labelledby="pills-website-tab">
                <div class="row row-logos">
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_ui.png" alt="" title="" />
                      <h6>UI</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_ux.png" alt="" title="" />
                      <h6>UX</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_photoshop.png" alt="" title="" />
                      <h6>Photoshop</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_Illustrator.png" alt="" title="" />
                      <h6>Illustrator</h6>
                    </div>
                  </div>
                </div>
                <div class="row row-logos justify-content-center">
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_corel.png" alt="" title="" />
                      <h6>Coral Draw</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_sprint.png" alt="" title="" />
                      <h6>Google Sprint</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-prototype" role="tabpanel" aria-labelledby="pills-prototype-tab">
                <div class="row row-logos">
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_validation.png" alt="" title="" />
                      <h6>UI Validation</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_gorilla.png" alt="" title="" />
                      <h6>Gorilla Testing</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_marvel.png" alt="" title="" />
                      <h6>Marvel App</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_figma.png" alt="" title="" />
                      <h6>Figma</h6>
                    </div>
                  </div>
                </div>
                <div class="row row-logos justify-content-center">
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_invision.png" alt="" title="" />
                      <h6>Invision</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_sprint.png" alt="" title="" />
                      <h6>Google Sprint</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-android-tab">
                <div class="row row-logos">
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_html5.png" alt="" title="" />
                      <h6 class="text-html5">Html 5</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_css3.png" alt="" title="" />
                      <h6 class="text-css3">CSS 3</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                      <div class="logo_box">
                        <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_bootstrap.png" alt="" title="" />
                        <h6>Bootstrap</h6>
                      </div>
                    </div>
                    <div class="col-3 col-sm-3 col-md-3">
                        <div class="logo_box">
                          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_python.png" alt="" title="" />
                          <h6 class="text-python">Python</h6>
                        </div>
                      </div>
                </div>
                <div class="row row-logos justify-content-center">
                    <div class="col-3 col-sm-3 col-md-3">
                        <div class="logo_box">
                          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_nodejs.png" alt="" title="" />
                          <h6>Node JS</h6>
                        </div>
                      </div>
                      <div class="col-3 col-sm-3 col-md-3">
                          <div class="logo_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_reactjs.png" alt="" title="" />
                            <h6>React JS</h6>
                          </div>
                        </div>  
                    <div class="col-3 col-sm-3 col-md-3">
                        <div class="logo_box">
                          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_angular.png" alt="" title="" />
                          <h6>Angular</h6>
                        </div>
                      </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_js.png" alt="" title="" />
                      <h6>JS</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-mobile" role="tabpanel" aria-labelledby="pills-iOS-tab">
                <div class="row row-logos">
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_kotlin.png" alt="" title="" />
                      <h6>Kotlin</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_swift.png" alt="" title="" />
                      <h6>Swift</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo-android.png" alt="" title="" />
                      <h6>Android</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_iOS.png" alt="" title="" />
                      <h6>iOS</h6>
                    </div>
                  </div>
                </div>
                <div class="row row-logos justify-content-center">
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_xml.png" alt="" title="" />
                      <h6>XML</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_java.png" alt="" title="" />
                      <h6>Java</h6>
                    </div>
                  </div>
                  <div class="col-3 col-sm-3 col-md-3">
                    <div class="logo_box">
                      <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_api.png" alt="" title="" />
                      <h6>REST API</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="text-center textClick"><strong>Click on the icon*</strong></p>
        </div>
      </div>
      <div class="boxDomains contentArea">
        <div class="animationCricle9 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img5.png" alt="" title="" />
        </div>
        <div class="animationCricle10 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img6.png" alt="" title="" />
        </div>
        <div class="animationCricle11 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img6.png" alt="" title="" />
        </div>
        <div class="animationCricle12 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img5.png" alt="" title="" />
        </div>
        <div class="container">
          <h2 class="text-center text-white">Domains and Case Studies</h2>
          <h5 class="text-center text-white subHeading">There are topics where we hold special super powers to give you some out of the box features and new perspectives to your idea.</h5>
          <div class="domainMain">
            <div class="domainMainInner">
              <div class="front face">
                <div class="domainTab">
                  <div class="row">
                    <div class="col-4 col-sm-4 col-md-4">
                      <div class="domainContent domain1">
                        <a href="javascript:void(0)" title="" slide="0">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-travel.png" alt="" title="" />
                          </div>
                          <h6>Travel</h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                      <div class="domainContent domain2">
                        <a href="javascript:void(0)" title="" slide="1">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-ecommarce.png" alt="" title="" />
                          </div>
                          <h6>ecom</h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                      <div class="domainContent domain3">
                        <a href="javascript:void(0)" title="" slide="2">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-tourism.png" alt="" title="" />
                          </div>
                          <h6>Messaging</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4 col-sm-4 col-md-4">
                      <div class="domainContent domain4">
                        <a href="javascript:void(0)" title="" slide="3">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-chatting.png" alt="" title="" />
                          </div>
                          <h6>Chatbots</h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                      <div class="domainContent domain5">
                        <a href="javascript:void(0)" title="" slide="4">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-marketplace.png" alt="" title="" />
                          </div>
                          <h6>Marketplace</h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                      <div class="domainContent domain6">
                        <a href="javascript:void(0)" title="" slide="5">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-logistics.png" alt="" title="" />
                          </div>
                          <h6>Logistics</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="back face">
                <div class="boxDomainSlider">
                  <div class="domainSlider">
                    <div>
                      <div class="domainContent">
                        <a href="javascript:void(0)" slide="0">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-travel.png" alt="" title="" />
                          </div>
                          <h6>Travel</h6>
                        </a>
                      </div>
                    </div>
                    <div>
                      <div class="domainContent">
                        <a href="javascript:void(0)" title="" slide="1">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-ecommarce.png" alt="" title="" />
                          </div>
                          <h6>ecom</h6>
                        </a>
                      </div>
                    </div>
                    <div>
                      <div class="domainContent">
                        <a href="javascript:void(0)" title="" slide="2">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-tourism.png" alt="" title="" />
                          </div>
                          <h6>Messaging</h6>
                        </a>
                      </div>
                    </div>
                    <div>
                      <div class="domainContent">
                        <a href="javascript:void(0)" title="" slide="3">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-chatting.png" alt="" title="" />
                          </div>
                          <h6>Chatbots</h6>
                        </a>
                      </div>
                    </div>
                    <div>
                      <div class="domainContent">
                        <a href="javascript:void(0)" title="" slide="4">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-marketplace.png" alt="" title="" />
                          </div>
                          <h6>Marketplace</h6>
                        </a>
                      </div>
                    </div>
                    <div>
                      <div class="domainContent">
                        <a href="javascript:void(0)" title="" slide="5">
                          <div class="iconDomain">
                            <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/icon-logistics.png" alt="" title="" />
                          </div>
                          <h6>Logistics</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabsDomains">
                  <div class="allDomainSlider">
                    <div>
                      <div class="domainstabContent">
                        <div class="domainContentSlider"><!--Travel-->
                          <div>
                            <div class="innerDomainContent">
                              <a href="https://graffersid.com/blogs/case_studies/tooreest/" title="">
                                <img src="https://graffersid.com/wp-content/uploads/2018/06/2.png" alt="" title="" />
                                <h4>Tooreest: 2500+ downloads in 2 months!!</h4>
                              </a>                              
                            </div>
                          </div>                        
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="domainstabContent">
                        <div class="domainContentSlider"><!--eCom-->
                          <div>
                            <div class="innerDomainContent">
                              <a href="https://graffersid.com/blogs/case_studies/dobulk-b2b-e-commerce-for-shoes/" title="">
                                <img src="https://graffersid.com/wp-content/uploads/2018/06/7.png" alt="" title="" />
                                <h4>DOBULK: B2B E-COMMERCE FOR SHOES INDUSTRY</h4>
                              </a>                              
                            </div>
                          </div>                          
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="domainstabContent">
                        <div class="domainContentSlider"><!--Messaging-->
                          <div>
                            <div class="innerDomainContent">
                              <a title="" href="https://graffersid.com/blogs/case_studies/mentrio/">
                                <img src="https://graffersid.com/wp-content/uploads/2018/06/1.png" alt="" title="" />
                                <h4>MENTRIO: WHERE STUDENTS FIND THEIR COLLEGE MENTORS !!</h4>
                              </a>
                              
                            </div>
                          </div>                          
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="domainstabContent">
                        <div class="domainContentSlider"><!--ChatBot-->
                          <div>
                            <div class="innerDomainContent">
                                <a href="https://graffersid.com/blogs/case_studies/lebot-ai-powered-saas-based-chatbot/" title="">
                                  <img src="https://graffersid.com/wp-content/uploads/2018/11/leChat-Case-Study-Banner.jpg" alt="" title="" />
                                  <h4>LEBOT: AI POWERED SAAS BASED CHATBOT</h4>
                                </a>                                
                            </div>
                          </div>                          
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="domainstabContent">
                        <div class="domainContentSlider"><!--Market-->
                          <div>
                            <div class="innerDomainContent">
                              <a href="https://graffersid.com/blogs/case_studies/artfetch-one-biggest-marketplace-art-work/" title="">
                                <img src="https://graffersid.com/wp-content/uploads/2018/06/13.png" alt="" title="" />
                                <h4>ARTFETCH: ONE OF THE BIGGEST MARKETPLACE FOR ART WORK</h4>
                              </a>                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="domainstabContent">
                        <div class="domainContentSlider"><!--Logistics-->
                          <div>
                            <div class="innerDomainContent">
                              <a title="" href="https://graffersid.com/blogs/case_studies/kargologic-uber-for-logistics/">
                                <img src="https://graffersid.com/wp-content/uploads/2018/06/3.png" alt="" title="" />
                                <h4>KARGOLOGIC- UBER FOR LOGISTICS</h4>
                              </a>                              
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="text-center"><a href="https://graffersid.com/blogs/case-study" title="View all" class="btn btn-white">View all</a></p>
                </div>
              </div>
            </div>
          </div>
          <p class="text-center  text-white textClick"><strong>Click on the icons*</strong></p>
        </div>
      </div>
    </div>
    <div class="scrollHidden">
      <div class="boxTestimonials contentArea">
        <div class="animationCricle13 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img7.png" alt="" title="" />
        </div>
        <div class="animationCricle14 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img8.png" alt="" title="" />
        </div>
        <div class="animationCricle15 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img8.png" alt="" title="" />
        </div>
        <div class="animationCricle16 animation">
          <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/animation-Img8.png" alt="" title="" />
        </div>
        <div class="container">
          <h2>Testimonials</h2>
          <div class="testimonialsCarousel">
            <div class="testimonialsSlider">
              <div>
                <div class="contentTestimonials">
                  <div class="innercontentTestimonials">
                    <h5 class="headingBox"><span>Surjeet Taank</span> </h5>
                    <p>Sidharth's attention to detail and ability to truly listen and understand clients concerns and requirements is what impressed me the most. He is a clear communicator and is willing to go out of his way to assist his clients. My best wishes are always with Sidharth for his new adventures.</p>
                    <h6>NTT DATA Services, Australia</h6>
                  </div>
                </div>
              </div>
              <div>
                <div class="contentTestimonials">
                  <div class="innercontentTestimonials">
                    <h5 class="headingBox"><span>Anil Puli </span> </h5>
                    <p>I worked with Sidharth for a relatively small period of time. He is one of the outstanding resources I worked with. He is very good at understanding the problem statement and always thinks "out of box", provides multiple solutions with pros and cons for each one of them. He is an expert in giving confidence to the party on the other side. He has blend of technical and business skill sets that would help him to handle both aspects of an issue. A wonderful asset to any company, would like to work with him again given a chance.</p>
                    <h6>YapStone, San Francisco, USA</h6>
                  </div>
                </div>
              </div>
              <div>
                <div class="contentTestimonials">
                  <div class="innercontentTestimonials">
                    <h5 class="headingBox"><span>Samir Kumar Sah</span> </h5>
                    <p>I have been interacting with Sidharth on various occasions regarding my Projects. He tries to understand the project requirements patiently and suggests his inputs. He ensures his team members are clear on client's requirements and things are communicated well to the clients at every juncture of their project even if there are any roadblocks and impending misses. Overall, Sidharth and team are awesome to work with.</p>
                    <h6>Founder & CEO at Pritbor, Bengaluru, India</h6>
                  </div>
                </div>
              </div>
              <div>
                <div class="contentTestimonials">
                  <div class="innercontentTestimonials">
                    <h5 class="headingBox"><span>Anuj Srivastava</span> </h5>
                    <p>In a very short span of time that I interacted with Siddharth, I found him very helpful for an Android and iOS Development project.
                      When I had a look at Sidharth's profile, I was quite amazed and impressed to see the kind of maturity level he possess with very less experience.
                      Sidharth has a great sense of understanding about products, analyzing the requirements and managing them by taking ahead as a project. It was a pleasure to work with Sidharth and I wish we work again on some other assignment also. I expect him to do bigger things very soon.</p>
                    <h6>Global Delivery & Program Management at Mahindra Comviva</h6>
                  </div>
                </div>
              </div>
              <div>
                <div class="contentTestimonials">
                  <div class="innercontentTestimonials">
                    <h5 class="headingBox"><span>Roopam Mishra</span> </h5>
                    <p>Have been using Sidharth's sales consultancy for quite some time now, in this period we have achieved significant growth and we look to continue it further. At his age, such understanding of the international market is very impressive and his ways of client acquisition are pretty unconventional.
                      He is young and very dynamic, discussion with him feels like talking to a friend. Surely he has a long way to go. All the best to him.</p>
                    <h6>Phionike, Mumbai</h6>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
      <div class="boxClientsAndnews contentArea">
        <div class="clientCarousel">
          <div class="container">
            <div class="clientInnerContent">
              <h5 class="headingBox"><span>Clients</span> </h5>
              <div class="clientSlider">
                <div>
                  <div class="logoClient">
                    <a href="https://www.kargologic.com.au/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_kargoLogic.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="http://qskip.in" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_Qskip.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="https://kratospct.io/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_kratos.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="#" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_arkratos.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="https://www.happilyunmarried.com/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_happilyUnmarriednew.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="https://www.infosys.com/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_infosys.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="http://www.abbott.com.cn/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_abbott.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="https://www.tooreest.com/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_tooreest.png" alt="" title=""/></a>
                  </div>
                </div>
              </div>
              <div class="btnViewAll">
                  <a href="clients.html" title="View all "><strong>View all</strong></a>
              </div>
            </div>
          </div>
        </div>
        <div class="newsCarousel">
          <div class="container">
            <div class="newsInnerContent">
              <h5 class="headingBox"><span>News</span> </h5>
              <div class="newsSlider">
                <div>
                  <div class="logoClient">
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_ycombinator.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_noteworthy.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_startupEurope.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_scoopEarth.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_CrazyEngineer.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_economic_times.png" alt="" title=""/></a>
                  </div>
                </div>
                <div>
                  <div class="logoClient">
                    <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/img/logo_startup_ranking.png" alt="" title=""/></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="boxblog contentArea">
        <div class="container">
          <h2 class="text-white">Blog</h2>
          <div class="blogSlider row-blogs">
            <div>
              <div class="blogContent">
                <div class="blogImg">
                  <a href="https://graffersid.com/blogs/10-principles-ui-design/"><img src="https://graffersid.com/wp-content/uploads/2018/02/10-Principles-to-UI-Design-as-a-Founder.jpg" alt="" title=""/></a>
                </div>
                <p><a href="https://graffersid.com/blogs/10-principles-ui-design/">10 Principles to UI Design as a Founder</a></p>
              </div>
            </div>
            <div>
              <div class="blogContent">
                <div class="blogImg">
                  <a href="https://graffersid.com/blogs/3-simple-things-saved-4-hours-daily-increased-productivity/"><img src="https://graffersid.com/wp-content/uploads/2018/02/2.png" alt="" title=""/></a>
                </div>
                <p><a href="https://graffersid.com/blogs/3-simple-things-saved-4-hours-daily-increased-productivity/">3 simple things saved me 4 hours daily and increased my productivity!!</a></p>
              </div>
            </div>
            <div>
              <div class="blogContent">
                <div class="blogImg">
                  <a href="https://graffersid.com/blogs/4-ways-to-prepare-before-reaching-developer/"><img src="https://graffersid.com/wp-content/uploads/2018/02/3.png" alt="" title=""/></a>
                </div>
                <p><a href="https://graffersid.com/blogs/4-ways-to-prepare-before-reaching-developer/">4 ways to prepare before reaching out to developer !!</a></p>
              </div>
            </div>            
          </div>
          <p class="text-center">
            <a href="https://graffersid.com/blogs" title="SHOW MORE" class="btn">SHOW MORE</a>
          </p>
        </div>
      </div>
    </div>
  </article>

  



  <script ata-pagespeed-no-defer src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/jquery.min.js"></script>  
  <!-- <script ata-pagespeed-no-defer src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/bootstrap.min.js"></script> -->
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script ata-pagespeed-no-defer src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/tilt.jquery.min.js"></script>
  <script ata-pagespeed-no-defer src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/slick.min.js"></script>
  <script ata-pagespeed-no-defer src="<?php echo get_template_directory_uri(); ?>/static-templates/assets/js/jqfloat.min.js"></script>

      <!-- place this script tag after the Drift embed tag -->
<script>
  (function() {
    /* Add this class to any elements you want to use to open Drift.
     *
     * Examples:
     * - <a class="drift-open-chat">Questions? We're here to help!</a>
     * - <button class="drift-open-chat">Chat now!</button>
     *
     * You can have any additional classes on those elements that you
     * would ilke.
     */
    var DRIFT_CHAT_SELECTOR = '.drift-open-chat'
    /* http://youmightnotneedjquery.com/#ready */
    function ready(fn) {
      if (document.readyState != 'loading') {
        fn();
      } else if (document.addEventListener) {
        document.addEventListener('DOMContentLoaded', fn);
      } else {
        document.attachEvent('onreadystatechange', function() {
          if (document.readyState != 'loading')
            fn();
        });
      }
    }
    /* http://youmightnotneedjquery.com/#each */
    function forEachElement(selector, fn) {
      var elements = document.querySelectorAll(selector);
      for (var i = 0; i < elements.length; i++)
        fn(elements[i], i);
    }
    function openSidebar(driftApi, event) {
      event.preventDefault();
      driftApi.sidebar.open();
      return false;
    }
    ready(function() {
      drift.on('ready', function(api) {
        var handleClick = openSidebar.bind(this, api)
        forEachElement(DRIFT_CHAT_SELECTOR, function(el) {
          el.addEventListener('click', handleClick);
        });
      });
    });
  })();
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
      $('.loadLogo').delay(2000).addClass("fade-out");
    }
    $( document ).ready(function() {
      pageLoad();
    });    
  </script>
  <script>
    $('.domainSlider').slick({
      centerMode: true,
      centerPadding: '20px',
      slidesToShow: 5,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '20px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
    $('.clientSlider, .newsSlider').slick({
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 5,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
      ]
    });
    $('.domainContentSlider').slick({
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 1,
      infinite: true,
      draggable: false
    });
    $('.allDomainSlider').slick({
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 1,
      infinite: false,
      draggable: false,
      arrows: false
    });

    $('.testimonialsSlider').slick({
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 1,
      arrows: false,
      dots: true

    });
    $('.blogSlider').slick({
      centerPadding: '25px',
      slidesToShow: 3,
      arrows: true,
      dots: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
      ]

    });
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


    $('.contentClient h4 span').each(function (index) {
      var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
          duration: 5000,
          step: function (now) {
            $(this).text(parseFloat(now).toFixed(size));
          }
        });
    });

    var widthWindow = $(window).width();
    if (widthWindow > 767) {
      //alert("if")
      $(".boxServices .nav-item a").click(function () {
        var clickedItem = $(".boxServices .nav-item a");
        $(this).parent().parent().parent().parent().parent().parent().addClass("starShowServices1");
        $(this).parent().addClass("clicked");
        setTimeout(function () {
          clickedItem.parent().parent().parent().parent().parent().parent().addClass("starShowServices2");
        }, 1000);

        setTimeout(function () {
          clickedItem.parent().parent().parent().parent().parent().parent().addClass("starShowServices3");
        }, 2000);

        setTimeout(function () {
          clickedItem.parent().parent().parent().parent().parent().parent().addClass("starShowServices4");
        }, 3000);
      });
    } else {
      //alert("else")
      $(".boxServices .nav-item a").click(function () {
        var clickedItem = $(".boxServices .nav-item a");
        $(this).parent().parent().parent().parent().parent().parent().addClass("starShowServicesMobile1");
        $(this).parent().addClass("clicked");
        setTimeout(function () {
          clickedItem.parent().parent().parent().parent().parent().parent().addClass("starShowServicesMobile2");
        }, 1000);

        setTimeout(function () {
          clickedItem.parent().parent().parent().parent().parent().parent().addClass("starShowServicesMobile3");
        }, 2000);

        setTimeout(function () {
          clickedItem.parent().parent().parent().parent().parent().parent().addClass("starShowServicesMobile4");
        }, 3000);
      });
    }

    $(".domainContent a").click(function () {
      var clickedItem = $(".domainContent a");
      $(this).parent().parent().parent().parent().parent().parent().addClass("starShowDomain1");
      var slideno = $(this).attr("slide")
      $('.domainSlider').slick('slickGoTo', slideno);
      //$('.allDomainSlider').slick('slickGoTo', slideno );


      $(this).addClass("clicked");
      $(this).parent().parent().parent().parent().parent().parent().parent().addClass("showDomainSlider");
      $('.domainSlider').slick({
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 5
      });
    });


    $(".domainSlider").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      nextSlide = nextSlide;
      //alert(nextSlide);
      $('.allDomainSlider').slick('slickGoTo', nextSlide);
      //change color here
    })


    $('.animation').each(function () {
      $(this).jqFloat({
        width: 200,
        height: 200,
        speed: 5000
      });
    });
  </script>
  <script>
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

      $(".flagImg, .ratingStar").each(function (i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("inviewport");
        } else {
          el.removeClass("inviewport");
        }
      });

      $(".contentArea").each(function (i, el) {
        var el = $(el);
        if (el.visible(true)) {
          el.addClass("inviewportOnce");
        } else {
          //nothing         
        }
      });

    });

    $('.awardsSlider').slick({
      centerPadding: '25px',
      slidesToShow: 2,
      arrows: true,
      dots: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2,
            dots: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            dots: true
          }
        }
      ]

    });


    $('.ratingSlider').slick({
      centerPadding: '25px',
      slidesToShow: 2,
      arrows: true,
      dots: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2,
            dots: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            dots: true
          }
        }
      ]

    });

    var widthWindow = $(window).width();
    if (widthWindow > 980) {

      $(".contentAwardsLeft").mouseenter(function () {
        $(this).css("z-index", "2");
        $(".contentRatings").css("z-index", "0");
        $('.awardsSlider').slick('unslick');
        $('.awardsSlider').css("width", "830px");
        $('.awardsSlider').css("margin-left", "0px");

        $('.awardsSlider').slick({
          slidesToShow: 4,
        });
      });

      $(".contentAwardsLeft").mouseleave(function () {
        setTimeout(function () {
          $(".contentAwardsLeft").css("z-index", "0");
          $(".contentRatings").css("z-index", "0");
          $('.awardsSlider').slick('unslick');
          $('.awardsSlider').css("margin-left", "40px");
          $('.awardsSlider').css("width", "415px");
          $('.awardsSlider').slick({
            slidesToShow: 2,
          });
        }, 1400);
      });


      $(".contentRatings").mouseenter(function () {        
        $('.ratingSlider').slick('unslick');
        $('.ratingSlider').css("width", "676px");
        $('.ratingSlider').css("margin-right", "107px");
        $('.ratingSlider').slick({
          slidesToShow: 4,
        });
      });

      $(".contentRatings").mouseleave(function () {
        setTimeout(function () {          
          $('.ratingSlider').slick('unslick');
          $('.ratingSlider').css("margin-right", "0px");
          $('.ratingSlider').css("width", "338px");
          $('.ratingSlider').slick({
            slidesToShow: 2,
          });
        }, 700);
      });
    };    
    var $root = $('html, body');

    $('a.smooth[href^="#"]').click(function () {
      var href = $.attr(this, 'href');

      $root.animate({
        scrollTop: $(href).offset().top
      }, 500, function () {
        window.location.hash = href;
      });

      return false;
    });
  </script>
</body>

</html>

		

			</article><!-- #post-<?php the_ID(); ?> -->

					<?php
			
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->		
	</div><!-- #primary -->

<?php
get_footer();
