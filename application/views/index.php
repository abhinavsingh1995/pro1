<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ChocoMac</title>
  <link href="img/assets/favicon.ico" rel="icon" type="image/ico">
  <link rel="stylesheet" type="text/css" href="font/vodafone.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="<?php echo base_url();?>css/ionicons.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/style7839.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>css/gpdc619.css?v=1.0" rel="stylesheet" type="text/css">
</head>
<body>
<!-- PRELOADER -->
<!--<div class="cssload-container">-->
<!--<div class="cssload-loader"></div>-->
<!--</div>-->
<!-- end PRELOADER -->

<!-- Start Header Section -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
      <a data-scroll href="#home" class="navbar-brand">
        <img src="<?php echo base_url();?>img/assets/logo2_light.png" class="logo-light" alt="#">
        <!--<img src="img/assets/logo2_dark.png" class="logo-dark" alt="#">-->
      </a>
    </div>
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a data-scroll href="#home">Home</a>
        </li>
        <li>
          <a data-scroll href="#about">ABOUT US</a>
        </li>
        <li>
          <a data-scroll href="#process">PROCESS</a>
        </li>
        <li>
          <a data-scroll href="#products">PRODUCTS</a>
        </li>
        <li>
          <a data-scroll href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Header Section -->

<!-- Start Hero Section -->
<section id="home" class="hero-main">
  <div class="background-image" style="background-image:url('<?php echo base_url();?><?php echo $bg_image; ?>'); opacity: 1;">&nbsp;</div>
  <div class="hero-container container">
    <div class="hero-content">
      <div class="col-sm-12 m-auto text-center white fadeHero">
        <h1 class="mb20" ><?php echo $main_heading;?></h1>
        <h5 class="mb40" ><?php echo $sub_heading; ?></h5>
      </div>
    </div>
  </div>
</section>
<!-- End Hero Section -->

<section id="about" class="bg-cocoa">
  <div class="placeholder">&nbsp;</div>

  <div class="col-sm-6 pt50 abt_col">
    <div class="heading black text-center mb30 pt50">
      <h2><span class="h2bold"><?php echo $heading;?></span></h2>
    </div>
    <div class="heading black text-center mb30">
      <img class="img-responsive logo-size" src="<?php echo base_url();?><?php echo $logo; ?>">
    </div>
    <div class="abt_content text-center">
      <p>Establish	ed in the year 2008, BD Associates Ghana Limited, a cocoa processing facility situated in the free zone enclave in Tema, Ghana, West Africa is poised to be a market leader in the processing and sale of cocoa products.The facility currently had an annual throughput of 12,500 metric tonnes of premium Ghana cocoa beans which it processes into cocoa mass.</p>
      <p>This semi-finished product is exported mainly to Europe, Asia and the Middle East to be used as ingredients for various confectionery manufacturing establishments.BD Associates currently produces under the brand name CHOCOMAC.</p>
      <p>BD Associates is currently in the process of increasing its annual processing capacity from the current 12,500 MT to 28,500MT by the end of 2015. In addition to that BD Associates shall install presses which will enable us to press the cocoa mass produced into cocoa butter and cocoa powder to ensure that we increase the throughput and scope of our product portfolio.</p>
      <p>Option for the processing of both natural and alkalized products will also be made available to customers who might want the different types of products we can offer.</p>
    </div>
  </div>
  <div class="clearfix"></div>
</section>

<!-- Start Services Section -->
<section id="process" class="bg-process">
  <div class="container pt140 pb140">
    <div class="heading white text-center mb30">
      <h2><span class="h2bold">WHAT WE DO</span></h2>
    </div>
    <div class="row align-vertical">
      <div class="col-lg-2 col-md-6 col-sm-12 mt30 mb30 text-center">
        <div class="service-container">
          <div class="icon-container bg-icon bg-icon1">
            <i class="webicon-grow" style="background-image: url(<?php echo base_url();?>img/plant.png);"></i>
          </div>
          <div class="service-body">
            <div class="service-title white">
              <h3>Grow</h3>
            </div>
            <div class="grow_content">
              <p>Thousands acres of co	coa plantation from rich and high yielding seeds done by trained farmers of hundreds of Ghana Villages. BD Group specializes in cocoa beans from best of demography. Cocoa from every origin posses its own flavour, colour and taste.</p>
              <a href="#">Readmore</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-12 mt30 mb30 text-center">
        <div class="service-container">
          <div class="icon-container bg-icon bg-icon2">
            <i class="webicon-grow" style="background-image: url(<?php echo base_url();?>img/cocoa.png);"></i>
          </div>
          <div class="service-body">
            <div class="service-title white">
              <h3>Garner</h3>
            </div>
            <div class="grow_content">
              <p>At BD group we take care of quality right from the farm by segregating fully ripe cocopods. Wet beans obtained undergo traditional fermentation processes in our own fermentation units.</p>
              <a href="#">Readmore</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-12 mt30 mb30 text-center">
        <div class="service-container">
          <div class="icon-container bg-icon bg-icon3">
            <i class="webicon-grow" style="background-image: url(<?php echo base_url();?>img/truck.png);"></i>
          </div>
          <div class="service-body">
            <div class="service-title white">
              <h3>Procure</h3>
            </div>
            <div class="grow_content">
              <p>More than last 25 years of industrial experience we have built our transportaion and warehouse units to maintain quality of beans.</p>
              <a href="#">Readmore</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-12 mt30 mb30 text-center">
        <div class="service-container">
          <div class="icon-container bg-icon bg-icon4">
            <i class="webicon-grow" style="background-image: url(<?php echo base_url();?>img/factory.png);"></i>
          </div>
          <div class="service-body">
            <div class="service-title white">
              <h3>Process</h3>
            </div>
            <div class="grow_content">
              <p>With state-of-art infrastructure and latest technology we ensure no harm to mother nature and best of typical Ghanaian cocoa product.</p>
              <a href="#">Readmore</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-12 mt30 mb30 text-center">
        <div class="service-container">
          <div class="icon-container bg-icon bg-icon5">
            <i class="webicon-grow" style="background-image: url(<?php echo base_url();?>img/quality.png);"></i>
          </div>
          <div class="service-body">
            <div class="service-title white">
              <h3>Quality</h3>
            </div>
            <div class="grow_content">
              <p>Backed by the vast experience and sound knowledge, we deliver quality, flavour keeping a check over costs and product strategies to address all kinds of customer requirements.</p>
              <a href="#">Readmore</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-12 mt30 mb30 text-center">
        <div class="service-container">
          <div class="icon-container bg-icon bg-icon6">
            <i class="webicon-grow" style="background-image: url(<?php echo base_url();?>img/choco.png);background-size: 125px;"></i>
          </div>
          <div class="service-body">
            <div class="service-title white">
              <h3>Product</h3>
            </div>
            <div class="grow_content">
              <p>Quality of our chocolate, cocoa liquor, cocoa butter, and cocoa powder are natural outcomes of our commitment to farmer partnerships and deeper involvement in quality control right  from  the farm level.</p>
              <a href="#">Readmore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Services Section -->

<!-- Start Attributes Section -->
<section id="products" class="bg-yellow">
  <div class="container pt100 pb50">
    <div class="heading black text-center mb30">
      <h2><span class="h2bold"><?php echo $product_heading; ?></span></h2>
    </div>
    <div class="row align-vertical">
      <div class="col-lg-6 col-md-6 col-sm-12 pt10">
        <div class="feature-container">
          <div class="feature-icon">
            <i class="webicon-cocoa"></i>
          </div>
          <div class="feature-body black">
            <h3><?php echo $p1_name; ?></h3>
            <p><?php echo $p1_detail; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 pt10">
        <div class="feature-container">
          <div class="feature-icon">
            <i class="webicon-cocoa"></i>
          </div>
          <div class="feature-body black">
            <h3><?php echo $p2_name; ?></h3>
            <p><?php echo $p2_detail; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 pt10">
        <div class="feature-container">
          <div class="feature-icon">
            <i class="webicon-cocoa"></i>
          </div>
          <div class="feature-body black">
            <h3><?php echo $p3_name; ?></h3>
            <p><?php echo $p3_detail; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 pt10">
        <div class="feature-container">
          <div class="feature-icon">
            <i class="webicon-cocoa"></i>
          </div>
          <div class="feature-body black">
            <h3><?php echo $p4_name; ?></h3>
            <p><?php echo $p4_detail; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Attributes Section -->
<!--        <section class="bg-orange">
            <div class="container pt50 pb20">
                <div class="row align-vertical">
                    <div class="col-md-3 col-md-6 col-sm-6 pt10 pb10">
                        <div class="feature-container">
                         <div class="feature-icon">
                                <i class="ion-person black"></i>
                            </div>
                            <div class="feature-body black">
                                <a href="#"><h3>End User Products</h3> </a>
                                <ul>
                                    <li>70% Dark Couverture</li>
                                    <li>50% Dark Couverture</li>
                                    <li>Milk Couverture</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-6 col-sm-6 pt10 pb10">
                        <div class="feature-container">
                            <div class="feature-icon">
                                <i class="ion-arrow-graph-up-right black"></i>
                            </div>
                            <div class="feature-body black">
                                <a href="#"><h3>Industrial Products</h3></a>
                                <ul>
                                    <li>Cocoa Liquor</li>
                                    <li>Cocoa Butter</li>
                                    <li>Cocoa Powder</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-6 col-sm-6 pt10 pb10">
                        <div class="feature-container ">
                         <div class="feature-icon">
                                <i class="ion-settings black"></i>
                            </div>
                            <div class="feature-body black">
                                <a href="#"><h3>Custom Products</h3></a>
                                <ul>
                                    <li>Sugar Free Couverture</li>
                                    <li>50%-90% Dark Couverture</li>
                                    <li>Organic Couverture</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-6 col-sm-6 pt10 pb10">
                        <div class="feature-container ">
                            <div class="feature-icon">
                                <i class="ion-wand black"></i>
                            </div>
                            <div class="feature-body black">
                                <a href="#"><h3>Support / Research</h3></a>
                                <ul>
                                    <li>Moulding Requirements</li>
                                    <li>Fillings Developments</li>
                                    <li>Packaging Design</li>
                                    <li>Hands on Training</li>
                                    <li>Pilot Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>-->

<!-- Start Contact Section -->
<section id="contact" class="bg-gray">
  <div class="container pt100 pb100">
    <div class="heading black text-center mb30">
      <h4>Let's Collaborate</h4>
      <h2>Message Us</h2>
    </div>
    <form method="POST" id="cocoa_contact" class="ucf form-horizontal">
      <div class="col-sm-8 m-auto text-center">
        <fieldset>
          <div class="form-group">
            <input class="form-control" type="text" name="name" id="name" size="30" placeholder="Your Name *" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" id="email" size="30" placeholder="Your Email *" required>
          </div>
          <div class="form-group">
            <input class="form-control" type="tel" name="phone" id="phone" size="30" placeholder="Your Phone">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="subject" id="subject" size="30" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" id="message" cols="40" rows="3" placeholder="Your Message... *" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-ghost-dark">Send Message</button>
          </div>
        </fieldset>
        <div id="contact_response"></div>
      </div>
    </form>
  </div>
</section>
<!-- End Contact Section -->

<!-- Google Map -->
<section id="map" class="map"></section>
<!-- End Google Map -->

<!-- Start Footer Section -->
<footer id="footer" class="bg-dark">
  <div class="container pt100 pb80">
    <div class="row text-center">
      <div class="col-sm-4 detail">
        <i class="ion-map gray"></i>
        <h6>BD Associates Ghana Ltd<br>Heavy Industrial Area, Freezone Enclave - 4th Montreal Street<br>Temma, Ghana</h6>
        <h4 class="lspacing gray">Address</h4>
      </div>
      <div class=" col-sm-4 detail">
        <i class="ion-android-call gray"></i>
        <h6>+XX XXXX XX 0123</h6>
        <h4 class="lspacing gray">Phone Number</h4>
      </div>
      <div class="col-sm-4 detail">
        <i class="ion-email gray"></i>
        <h6 ><a class="white" href="#" >support@chocomac.com</a></h6>
        <h4 class="lspacing gray">Email</h4>
      </div>
    </div>
    <div class="col-sm-8 text-center m-auto pt40 border-top">
      <h6 class="white">© 2017 <span class="highlight">BD Associates</span> All Rights Reserved.</h6>
    </div>
  </div>
</footer>
<!-- End Footer Section -->

<!-- Start Back To Top -->
<a data-scroll id="back-to-top" href="#home"><i class="icon ion-chevron-up"></i></a>
<!-- End Back To Top -->
<script style="display: none !important;">!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script src="js/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/plugins.js"></script>
<script src="<?php echo base_url();?>js/scripts.js"></script>
<script src="<?php echo base_url();?>js/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
    });
    $("#cocoa_contact").validate({
      rules:
        {
          name: {required: true,alpha:true},
          email: {required: true,email:true},
          phone: {required: true,number:true,minlength:10,maxlength:10},
          subject:{required:true},
          message:{required:true}
        },
      messages:
        {
          name:
            {
              required: "Please enter your Name.",
              alpha:"Name should contains alphabets and space only."
            },
          email:
            {
              required: "Please enter your Email.",
              email:"Please enter a valid Email (Eg: someone@example.com)."
            },
          phone:{
            required: "Please enter your Phone Number.",
            number:"Please enter a valid Phone Number.",
            minlength:"Please enter a valid Phone Number.",
            maxlength:"Please enter a valid Phone Number.",
          },
          subject:
            {
              required:"Please enter your Subject."
            },
          message:
            {
              required:"Please enter your Message."
            }
        },
      submitHandler: function(form) {
        var name = jQuery("#name").val();
        var email = jQuery("#email").val();
        var phone = jQuery("#phone").val();
        var subject = jQuery("#subject").val();
        var message = jQuery("#message").val();

        $( "#contact_response" ).html();

        jQuery.ajax({
          url: 'submit-contact.php',
          type : "POST",
          data:{name:name,email:email,phone:phone,subject:subject,message:message},
          beforeSend : function() { },
          success: function(data, textStatus, XMLHttpRequest)
          {
            switch (data)
            {
              case '0':
                $( "#contact_response" ).html( "<p class='failed'>Sending failed! Please try again after some time.</p>" );
                break;

              case '1':
                $( "#contact_response" ).html( "<p class='success'>Your Message has been send successfully!</p>" );
                break;

              case '2':
                $( "#contact_response" ).html( "<p class='failed'>Message sending failed! Please check your inputs and try again.</p>" );
                break;

              default:
                $( "#contact_response" ).html( "<p class='failed'>Internal server error. Please try after some time</p>" );
                break;

            }
            $('#cocoa_contact')[0].reset();
          }
        });
        return false;
      },
    });

  });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC80DcXLqjIFuvMH0baxMqtA4GRnor7BRs&amp;callback=initMap" async defer></script>
<script src="<?php echo base_url();?>js/google-maps.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".grow_content a").click(function(e){
      e.preventDefault();
      $('.grow_content').find('p').removeAttr("style");
      $('.grow_content').find('a').show();
      $(this).parent('.grow_content').find('p').css('height', '100%');
      $(this).parent('.grow_content').find('a').hide();
      return false;
    });
  });
</script>
</body>
</html>
