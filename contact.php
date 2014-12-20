<? include("head.php"); ?>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <form class="form-horizontal" id="contactform" name="commentform" method="post" action="/simonart/mailer.php"
            data-bv-message="This value is not valid"
            data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
            data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
            data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
            >
               <div class="form-group">
                    <label class="control-label col-md-4" for="cf_name">Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="cf_name" name="cf_name" placeholder="Your Name"
                        data-bv-notempty data-bv-notempty-message="Please input your name."
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="cf_email">Email</label>
                    <div class="col-md-6">
            <input type="email" class="form-control" id="cf_email" name="cf_email" placeholder="your@email.com"
                        data-bv-notempty data-bv-notempty-message="Please include your email address. (name@gmail.com)"
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="cf_message">Message</label>
                    <div class="col-md-6">
                        <textarea rows="6" class="form-control" id="cf_message" name="cf_message" placeholder="Your question or message here."></textarea>
                    </div>
                </div>
                
                <div class="robotic">
                  Leave this empty.<input type="url" name="url">
                </div>
            
                <div class="form-group">
                  <label for="security_code" class="control-label col-md-4">Type the code</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="security_code" name="security_code">
                    <img src="/simonart/include/captcha/CaptchaSecurityImages.php" alt="captcha">
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit" value="Submit" class="btn btn-lg pull-right" id="send_btn"><span class="glyphicon glyphicon-send"></span> Send Message</button>
                    </div>
                </div>
            </form>
        </div>
      </div><!--/#art-contact-->

<? include("foot.php"); ?>