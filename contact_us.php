<?php
include "header.php"
?>
<?php
include "carosaul.php"
?>
    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <h1>Contact Us</h1>
        
      <!-- Contact us form-->
      <div class="container">
<div class="col-md-5" id="contact_form">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both;">
                    <h3 style="margin-bottom: 25px; text-align: center;"></h3>
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <!-- <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                     -->
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
        </form>
    </div>
</div>
</div>
</section>

<?php
include "footer.php"
?>