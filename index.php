<?php
include "header.php"
?>

<?php
include "carosaul.php"
?>



<!--Search Button-->
<br>

<div class ="col-md-4"></div>




<!-- Page Content -->
<section style="background-color: lavenderblush; padding-top:0!important;">
  <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-6">
            <?php
                include "search.php";
                ?>
                
            </div>
            <div class="col-sm-6" >
            <?php
                include "weatherApi.php";
                ?>
                </div>
          </div>
          <div style="padding-bottom:100px; padding-top:100px; margin-left: 50px;"class="row">
              <div class="col-sm-12">
                  <h3 style="font-size: 42px; font-weight: bold;">Search for your favourite food here</h3>

                  <p style="font-size: 22px"> We provide delivery service 24/7 365 days. Our customer base are people who work late but crave for food.</p>
              </div>
            </div>
   


  </div>
</section>
<section style="padding-top:50px; padding-bottom:50px;" class="fd__service__area bg-image--2 section-padding--xlg">
  <div class="container">
      <div class="service__wrapper bg--white" style="padding-top:20px; padding-bottom:20px;">
          <div class="row" >
              <div class="col-md-12 col-lg-12">
                  <div style="text-align:center;">
                      <h2 style="font-size: 42px; font-weight: bold;">The process of our service</h2>
                      <p>How it works</p>
                      
                  </div>
              </div>
          </div>
          <div class="row mt--30">
              <!-- Start Single Service -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="service">
                      <div class="service__title">
                          <div class="ser__icon">
                              <img src="images/kfcbanner.jpg"alt="icon image" class="bordered-images animated bounce">
                          </div>
                          <h2><p>Choose restaurant</p></h2>
                      </div>
                      <div class="service__details">
                          <p>Choose your top favorite restaurants that cater to your every need. We serve you a large range of restaurants that delivers quality food.</p>
                      </div>
                  </div>
              </div>
              <!-- End Single Service -->
              <!-- Start Single Service class="animated bounceInDown" -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="service">
                      <div class="service__title">
                          <div class="ser__icon">
                              <img src="images/grilled.jpg" alt="icon image" class="bordered-images animated bounce slow">
                          </div>
                          <h2><p>Select, you love to eat</p></h2>
                      </div>
                      <div class="service__details">
                          <p>A list of delicious meals at your doorstep. We provide you with different delicacies of the world from our chosen best restaurants.</p>
                      </div>
                  </div>
              </div>
              <!-- End Single Service -->
              <!-- Start Single Service -->
              <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="service">
                      <div class="service__title">
                          <div class="ser__icon">
                              <img src="images/mushroom.jpg"  alt="icon image" class="bordered-images animated bounce slow">
                          </div>
                          <h2><p>Pickup or delivery</p></h2>
                      </div>
                      <div class="service__details">
                          <p>You are not feeling like going out? No problem we will reach you at your doorstep with your hot meals.</p>
                      </div>
                  </div>
              </div>
              <!-- End Single Service -->
          </div>
      </div>
  </div>
</section>

<?php
include "footer.php";
?>

