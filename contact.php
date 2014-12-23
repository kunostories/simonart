<? include("head.php"); ?>

      <div class="row">
          <form class="form" id="contactform" name="commentform" method="post" action="/simonart/mailer.php"
            data-bv-message="This value is not valid"
            data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
            data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
            data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
            >
            <div class="col-sm-4">
                <input type="text" class="form-control" id="cf_name" name="cf_name" placeholder="Your Name"
                data-bv-notempty data-bv-notempty-message="Please input your name."
                />
            </div>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="cf_email" name="cf_email" placeholder="Your Email Address"
                data-bv-notempty data-bv-notempty-message="Please include your email address. (name@gmail.com)"
                />
            </div>
            <div class="col-sm-8">
                <textarea rows="8" class="form-control" id="cf_message" name="cf_message" placeholder="Your Message"></textarea>
            </div>
                
            <div class="robotic">
              Leave this empty.<input type="url" name="url">
            </div>
            
            <div class="col-sm-8">
                <input type="text" class="form-control" id="security_code" placeholder="Type the Code" name="security_code">
                <img src="/simonart/include/captcha/CaptchaSecurityImages.php" alt="captcha">
            </div>
            <div class="col-sm-8">
                <button type="submit" value="Submit" class="btn btn-lg btn-danger" id="send_btn">Send</button>
            </div>
            </form>
        </div>

<? include("foot.php"); ?>