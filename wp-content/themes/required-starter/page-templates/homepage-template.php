<?php
/**
 * Template Name: Homepage Template
 * Description: Homepage
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.2.0
 */

get_header(); ?>

	<!-- Row for main content area -->

	</div><!-- End Content row -->
	
	<!-- MARQUEE ROW -->

	    <div class="flexslider" id="marquee" style="overflow:hidden;">
	        <ul class="slides">
	            <li>
	                <div><a href="http://bocaparkanimalhospital.com/veterinary-services/training/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide1.png"/></a></div>
	            </li>
	            <li>
    	            <div><a href="http://bocaparkanimalhospital.com/veterinary-services/boarding/" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide2.png"/></a></div>
	            </li>
	            <li>
    	            <div><a href="http://bocaparkanimalhospital.com/about-us/our-vision/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide3.png"/></a></div>
	            </li>
	        </ul>
	    </div>

	<!-- END MARQUEE ROW -->
	
    <div class="row">
        <div class="six columns midTout">
            <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/accentHeart.png"/>  your pet is part of the family.</h3>
            <?php echo do_shortcode('[post-content id=19]'); ?>
        </div>
        <div class="six columns midTout">
            <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/accentClock.png"/>  hours and location</h3>
            <?php echo do_shortcode('[post-content id=21]'); ?>
        </div>
    </div>

    <div class="row" style="margin-bottom:40px;"> 
        <div class="six columns midTout">
            <h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/accentPhone.png"/>  news and events</h3>
            <?php echo do_shortcode('[post-content id=23]'); ?>
        </div>
        <div class="six columns promoTout midTout">
            <div style="float:left; width:215px;">
                <h3>pet promotion</h3>
                <?php echo do_shortcode('[post-content id=25]'); ?>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/offersBG.jpg" style="float:right; position:absolute; bottom:0;"/>
        </div>
    </div>
  <!-- Three-up Content Blocks -->
  
  <div class="fullOurServiceColor"> <!--style="background-image: url(/images/servicesBG.png) center center no-repeat;"-->
    <div class="row">
      <div class="twelve columns textCenter">
        <h2 style="color:#5cb127;">OUR SERVICES</h2>
      </div>
    </div>
    <div class="row">
    
      <div class="three columns textCenter">
        <a href="http://bocaparkanimalhospital.com/veterinary-services/veterinary/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/serviceIcon1.png" /></a>
        <h4 class="fontBold">Veterinary Services</h4>
 		<?php echo do_shortcode('[post-content id=27]'); ?>
      </div>
      
      <div class="three columns textCenter">
        <a href="http://bocaparkanimalhospital.com/veterinary-services/boarding/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/serviceIcon2.png" /></a>
        <h4 class="fontBold">Boarding Services</h4>
         <?php echo do_shortcode('[post-content id=30]'); ?>
      </div>
      
      <div class="three columns textCenter">
        <a href="http://bocaparkanimalhospital.com/veterinary-services/grooming/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/serviceIcon3.png" /></a>
        <h4 class="fontBold">Grooming Services</h4>
        <?php echo do_shortcode('[post-content id=32]'); ?>
      </div>
      
      <div class="three columns textCenter">
        <a href="http://bocaparkanimalhospital.com/veterinary-services/training/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/serviceIcon4.png" /></a>
        <h4 class="fontBold">Training Services</h4>
        <?php echo do_shortcode('[post-content id=34]'); ?>
      </div>
      
    </div>
  </div>
  <!-- Three-up Content Blocks -->
  
  <div class="row" style="margin-bottom:40px;">
    <div class="row">
      <div class="twelve columns textCenter">
        <h2>ABOUT US</h2>
      </div>
    </div>
    <div class="four columns textCenter">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ensign.jpg" class="imageBorder"/>
      <h4 class="fontBold">Dr. John Ensign</h4>
      <?php echo do_shortcode('[post-content id=57]'); ?>
    </div>
    
    <div class="four columns textCenter">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/edited/staff.png" class="imageBorder"/>
      <h4 class="fontBold">Our Staff</h4>
      <?php echo do_shortcode('[post-content id=59]'); ?>
    </div>
    
    <div class="four columns textCenter">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/edited/building.png" class="imageBorder"/>
      <h4 class="fontBold">The Facility</h4>
      <?php echo do_shortcode('[post-content id=61]'); ?>
    </div>
    
  </div>


<?php get_footer(); ?>