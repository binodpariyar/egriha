<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

  <title>Welcome to eGriha</title>

  <!--Stylesheets-->

  <link href="<?php echo base_url(); ?>front_assets/css/screen.css" rel="stylesheet" type="text/css" media="screen" />

  <link href="<?php echo base_url(); ?>front_assets/css/jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen" />

  <link href="<?php echo base_url(); ?>front_assets/css/colorbox.css" rel="stylesheet" type="text/css" media="screen" />

  <style>

  .form-field{

    margin-bottom:10px;

    margin-right: 5px;

    float: left;

  }

  </style>

  <!--JavaScript-->

  <script type="text/javascript" src="<?php echo base_url(); ?>front_assets/js/jquery.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>front_assets/js/slideshow_init.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>front_assets/js/cufon-yui.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>front_assets/js/Calluna_400.font.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>front_assets/js/jquery.bxslider.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>front_assets/js/jquery.colorbox.js"></script>

  <script type="text/javascript">

  Cufon.replace('h1.html');

  Cufon.replace('h2.html');

  Cufon.replace('h3.html');

  Cufon.replace('h4.html');

  Cufon.replace('h5.html');

  Cufon.replace('h6.html');



  var base_url = '<?php echo base_url(); ?>';





  function insertParam(key, value)

  {

    key = encodeURI(key); value = encodeURI(value);



    var kvp = document.location.search.substr(1).split('&');



    var i=kvp.length; var x; while(i--) 

    {

      x = kvp[i].split('=');



      if (x[0]==key)

      {

        x[1] = value;

        kvp[i] = x.join('=');

        break;

      }

    }



    if(i<0) {kvp[kvp.length] = [key,value].join('=');}



    //this will reload the page, it's likely better to store this until finished

    document.location.search = kvp.join('&'); 

  }



  </script>









  <script type="text/javascript">



  function show_popup(event,id){

    switch(id){

      case 1:

      $('.overlay').show();

      break;



      case 2:

      $('.overlay2').show();

      break;



      case 3:

      $('.overlay-two').show();

      break;

    }

    $('body').css('overflow','hidden');

  }  



  function hide_popup(id){

    switch(id)

    {

      case 1:

      $('.overlay').hide();

      break;



      case 2:

      $('.overlay2').hide();

      break;



      case 3:

      $('.overlay-two').hide();

      break;



    }

    $('body').css('overflow','auto');

  }







  $(document).ready(function() { 


    $('a.colorbox-iframe').colorbox({

      width:'60%',

      height:'90%'

    });


    $('#selling').bxSlider({

      minSlides: 5,

      maxSlides: 5,

      slideWidth: 375,

      slideMargin: 5,

      controls:true,

      autoHover:true



    });



    $('#s3sliderContent').bxSlider({

      minSlides: 1,

      maxSlides: 1,

      auto:true,

      autoDelay : 1500,

      autoHover:true

    });



    $('.ads_slider').bxSlider({

      minSlides: 4,

      maxSlides: 4,

      controls : false,

      auto : true, 

      mode: 'vertical',

      autoDelay : 2000,

      autoHover:true

    });







    $('.ads_slidertwo').bxSlider({

      minSlides: 5,

      maxSlides: 5,

      controls : false,

      auto : true,      

      mode: 'vertical',

      autoDelay : 2000,

      autoHover:true

    });





    $('#house-slider').bxSlider({

      minSlides: 1,

      maxSlides: 1,

      controls : true,

      auto : true,

      

      

      

      autoDelay : 2000,

      autoHover:true

    });



    // $('#s3slider').s3Slider({

    //   timeOut: 4000 

    // });







});

</script>

<script src="<?php echo base_url(); ?>front_assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">

$(document).ready(function(){

 $("a[rel^='prettyPhoto']").prettyPhoto({

  animationSpeed: 'normal', /* fast/slow/normal */

  padding: 40, /* padding for each side of the picture */

  opacity: 0.35, /* Value betwee 0 and 1 */

  showTitle: true, /* true/false */

  allowresize: true, /* true/false */

  counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */

  theme: 'light_rounded', /* light_rounded / dark_rounded / light_square / dark_square */

  hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */

  modal: false, /* If set to true, only the close button will close the window */

  changepicturecallback: function(){}, /* Called everytime an item is shown/changed */

  callback: function(){} /* Called when prettyPhoto is closed */

});

});

</script>





<!--[if lt IE 7]>

        <script type="text/javascript" src="<?php echo base_url(); ?>front_assets/js/unitpngfix.js"></script>

        <![endif]-->

<!--[if lte IE 6]>

	<link href="<?php echo base_url(); ?>front_assets/css/ie6.css" rel="stylesheet" type="text/css" />

  <![endif]--><!-- Thank you IE6 >.< -->  



</head>

<body>


  <div id="fb-root"></div>

  <script>(function(d, s, id) {

    var js, fjs = d.getElementsByTagName(s)[0];

    if (d.getElementById(id)) return;

    js = d.createElement(s); js.id = id;

    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";

    fjs.parentNode.insertBefore(js, fjs);

  }(document, 'script', 'facebook-jssdk'));</script>

  <div id="wrap"><!-- Start wrap -->

    <div id="header"><!-- Header Starts -->

     <h1><a href="<?php echo site_url(); ?>"></a></h1>
     <fieldset class="top-info">
      <div class="float-right">
        <ul>
          <li><a href="<?php echo site_url('home');?>">Home</a> | </li>
          <li><?php if(!$this->ion_auth->logged_in()) {?> <a href="<?php echo site_url('login');?>">Login</a> | <?php }else{ ?> <a href="<?php echo site_url('login/log_out');?>">Log Out</a> | <?php } ?> </li>
          <li><a href="<?php echo site_url('signup');?>">Sign Up</a></li>
        </ul>

        <p>
          Company Address : Munibhairavmarg,Tinkune</br>
          Phone : 9851183984,9841641971,9849425098</br>
          Email ID : egrihanepal@gmail.com
        </p>

      </div> 

      <div class="clear-both">

        <div class="margin-right">
          <label>For:</label>
          <select id="type" required="required">
            <option>Sell</option>
            <option>Rent</option>
          </select>

          <label>Of:</label>

          <select id="type" required="required">
           <option>Home</option>
           <option>Land</option>
           <option>Appartment</option>
           <option>Flat</option>
         </select>

         <input type="submit" class="searchBtn" value="" />
       </div>
     </div>

   </fieldset>

 </div>

 <div id="nav">

   <ul>

    <li>

      <a <?php if($main == 'pages/home') { echo 'class="nav_current"'; } ?> href="<?php echo site_url(); ?>">

        Home

      </a>

    </li>

    <li>

      <a <?php if($this->router->fetch_class() == 'rent') { echo 'class="nav_current"'; } ?> href="javascript:void(0);">

        For Rent

      </a>

      <ul>

        <li>

          <a  href="<?php echo site_url('rent/home'); ?>">Home</a>

        </li>

        <li>

          <a href="<?php echo site_url('rent/land'); ?>">Land</a>

        </li>

        <li>

          <a href="<?php echo site_url('rent/appartment'); ?>">Appartment</a>

        </li>

        <li>

          <a href="<?php echo site_url('sell/flat'); ?>">Flat</a>

        </li>

      </ul>

    </li>

    <li>

      <a <?php if($this->router->fetch_class() == 'sell') { echo 'class="nav_current"'; } ?> href="javascript:void(0);">

        For Sell

      </a>

      <ul>

        <li>

          <a href="<?php echo site_url('sell/home'); ?>">Home</a>

        </li>

        <li>

          <a href="<?php echo site_url('sell/land'); ?>">Land</a>

        </li>

        <li>

          <a href="<?php echo site_url('sell/appartment'); ?>">Appartment</a>

        </li>
      </ul>

    </li>

    <li>

      <a <?php if($main == 'pages/listyourproperty') { echo 'class="nav_current"'; } ?> href="<?php echo site_url('listyourproperty'); ?>">

        List your

        property</a>

       <!--      <ul>

              <li>

                <a href="<?php echo site_url('listyourproperty'); ?>">Sell</a>

              </li>

              <li>

                <a href="<?php echo site_url('listyourproperty/list'); ?>">Rent</a>

              </li>



            </ul> -->

          </li>

          <li>

            <a <?php if($main == 'pages/service') { echo 'class="nav_current"'; } ?> href="javascript:void(0);">

              Services

            </a>

            <ul>

              <li>

                <a href="javascript:void(0);">Consultation</a>

                <ul style="width:170px; margin:0px;">

                  <li><a href="<?php echo site_url('service'); ?>"class="longtext">Architectural and Engineering</a></li>
                  <li><a href="<?php echo site_url('content/vastushastra'); ?>">Vastushastra</a></li>

                </ul>

              </li>



              <li>

                <a href="<?php echo site_url('content/construction'); ?>">Construction</a>

              </li>





            </ul>

          </li>

          <li>

            <a class="colorbox-iframe <?php if($main == 'pages/calculator') { echo 'nav_current'; } ?>  " href="<?php echo site_url('calculator'); ?>">

              Calculator

            </a>

       <!--      <ul>

              <li>

                <a href="<?php echo site_url('#'); ?>" class="longtext">Mortage Calculator</a>

              </li>

              <li>

                <a href="<?php echo site_url('#'); ?>" class="longtext">Property Valuation</a>

              </li>

              <li>

                <a href="<?php echo site_url('#'); ?>" class="longtext">Area Calculator</a>

              </li>



            </ul> -->

          </li>

          <li>

            <a <?php if($main == 'pages/aboutus') { echo 'class="nav_current"'; } ?> href="<?php echo site_url('content/about-us'); ?>">

              About us

            </a>

          </li>

          <li>

            <a <?php if($main == 'pages/contact') { echo 'class="nav_current"'; } ?> href="<?php echo site_url('contact'); ?>">

              Contact us

            </a>

          </li>

        </ul>

      </div><!-- navigation ends -->

      <div







      <?php $this->load->view($main); ?>















      <div id="footer"><!--footer starts -->

        <div class="footer_links">



          <div class="oneforth">

            <h3 style="color: #FFF">Sell</h3>

            <ul>

              <li><a href="<?php echo site_url('sell/land'); ?>">Browse All Land</a></li>

              <li><a href="<?php echo site_url('sell/home'); ?>">Browse All Home</a></li>

              <li><a href="<?php echo site_url('sell/appartment'); ?>">Browse All Apartment</a></li>


            </ul>             

          </div>

          <div class="oneforth">

            <h3 style="color: #FFF;" >Rent</h3>

            <ul>

              <li><a href="<?php echo site_url('rent/land'); ?>">Browse All Land</a></li>

              <li><a href="<?php echo site_url('rent/home'); ?>">Browse All Home</a></li>

              <li><a href="<?php echo site_url('rent/appartment'); ?>">Browse All Apartment</a></li>

            </ul>             



          </div>

          <div class="oneforth">

            <h3 style="color: #FFF";>Our Partners</h3>

            <ul>

              <li><a href="#">Matrix Design Consult</a></li>

              <li><a href="#">Construction Company</a></li>

            </ul>

          </div>

          <div class="oneforth quick">

            <h3 style="color: #FFF">Quick Links</h3>

            <ul>

              <li><a href="<?php echo site_url(); ?>">Home</a></li>

              <li><a class="colorbox-iframe" href="<?php echo site_url('calculator'); ?>">Calculator</a></li>

              <li><a href="<?php echo site_url('contact'); ?>">Contact us</a></li>

            </ul>

          </div>



          <div class="oneforth">

            <h3 style="color: #FFF">Like Box</h3>

            <div class="fb-like-box" data-show-faces="false"  data-colorscheme="dark" data-href="https://www.facebook.com/FacebookDevelopers" data-width="182" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>

          </div>



        </div>



        <div id="footerbottom" style="font-family:arial; font-size:11px;">©  2014 GrihaNepal.com.Developed By iTeam Nepal Pvt Ltd.



        </div>

        <!-- Footer Content Ends -->

      </div><!-- footer ends -->



    </div><!--Wrap ends -->

    <?php $site_setting = $this->db->get('tbl_site')->row(); ?>
    <ul class="social" id="share">
      <li id="facebook"><a target="_blank" href="<?php echo $site_setting->facebook; ?>">Facebook</a></li>
      <li id="twitter"><a target="_blank" href="<?php echo $site_setting->twitter; ?>">Twitter</a></li>
      <li id="gplus"><a target="_blank" href="<?php echo $site_setting->google; ?>">Google+</a></li>
    </ul>

    <script>

    $(window).scroll(function(){
      checkScroll();
    });

    function checkScroll(){
      if($(this).scrollTop() > 150 ){
        $('#top').fadeIn();
        $('#share').fadeIn();
      }else{
        $('#top').fadeOut();
        $('#share').fadeOut();
      }
    }

    </script>
  </body>

<!--    <ul class="social" id="share">

  <li id="facebook"><a target="_blank" href="">Facebook</a></li>

  <li id="twitter"><a target="_blank" href="">Twitter</a></li>

  <li id="gplus"><a target="_blank" href="">Google+</a></li>

  <li id="youtube"><a target="_blank" href="">Youtube</a></li>

</ul> -->

</html>