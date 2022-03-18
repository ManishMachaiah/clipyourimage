<!DOCTYPE html>
<html lang="en">
<?php include('links.php'); ?>

<head>
  <title>Clip Your Image - Contact Us</title>
</head>
<style>
  section.contact-us.ftr1:after {
    position: absolute;
    content: '';
    /* background-image: url(../images/footer-left-dec.png); */
    left: 0px;
    top: -340px;
    width: 267px;
    height: 396px;
    z-index: 0;
  }
</style>

<body>


  <!-- ***** Header Area Start ***** -->
  <?php include('header.php'); ?>
  <!-- ***** Header Area End ***** -->

  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h4>Say Clip Your Image</h4>
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>More Info</h6>
            <h4>Read More <em>About Us</em></h4>
          </div>
          <p>Corrections in a work makes the result attractive more than it was before. We at ClipYourImage company are
            grouped with an enthusiastic and energetic photo editing team experts. We edit the photos and images in all
            the ways that is possible. Editing of photos require a larger efforts as much as a photographer puts an
            effort to click the same. We believe that an edit is successful when the photograph captured looks as
            natural as it has the feel when it was clicked. It is because a photo is a memory that recreates the old
            days spent in a life. A person who’s not with us is also remembered through a photograph clicked.</p>
        </div>
        <div class="col-lg-6 offset-lg-1 align-self-center">
          <div class="row">
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">125</div>
                <div class="count-title">Finished Projects</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">11</div>
                <div class="count-title">Years Experience</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">87</div>
                <div class="count-title">Happy Clients</div>
              </div>
            </div>
            <div class="col-6">
              <div class="count-area-content">
                <div class="count-digit">24</div>
                <div class="count-title">Awwards Won</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact_us">
<div class="container">
<div class="row">
      <div class="col-lg-8">
        <div id="map">

          <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.6098128162353!2d77.4996193143862!3d13.060490390797584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3cd81ae630a7%3A0x8b583dbea26ad0df!2sSiddhrans%20Technologies%3A%20software%20web%20designs%20and%20developments%2C%20App%20designs%20and%20developments%2C%20graphic%20designs%2C%20digital%20marketing%20company%20in%20Bangalore!5e0!3m2!1sen!2sin!4v1645160923699!5m2!1sen!2sin" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
          <div class="row">
            <div class="col-lg-4">
              <div class="contact-info">
                <div class="icon">
                  <i class="fa fa-phone"></i>
                </div>
                <h4>Phone</h4>
                <span>8310951706</span>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contact-info">
                <div class="icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <h4>Mail</h4>
                <span>clipyourimage861@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h6>Contact us</h6>
                <h4>Say <em>Hello</em></h4>
              </div>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="Your Message"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
  </section>

  <?php include('footer.php'); ?>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <?php include('scripts-links.php'); ?>
  <?php include('common-scripts.php'); ?>

</body>

</html>