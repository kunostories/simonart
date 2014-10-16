<? include("head.php"); ?>

      <div id="art-contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <form class="form-horizontal" role="form" action="/simonart/mailer.php" method="post">
                <?php
                // check for a successful form post  
                if (isset($_GET['s'])) { ?>
                <div id="contact-alert" class="col-sm-9 col-sm-offset-3 alert alert-danger" role="alert">
                  <?= $_GET['s']; ?>
                </div>
                <? }; ?>
                <div class="form-group has-feedback has-feedback-left">
                  <label for="cf-name" class="col-sm-3 control-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="cf-name" id="cf-name" placeholder="Your Name">
                    <i class="form-control-feedback glyphicon glyphicon-user"></i>
                  </div>
                </div>
                <div class="form-group has-feedback has-feedback-left">
                  <label for="cf-email" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="cf-email" id="cf-email" placeholder="your@email.com">
                    <i class="form-control-feedback glyphicon glyphicon-envelope"></i>
                  </div>
                </div>
                <div class="form-group has-feedback has-feedback-left">
                  <label for="cf-message" class="col-sm-3 control-label">Message</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="7" name="cf-message" id="cf-message" placeholder="Your message here."></textarea>
                    <i class="form-control-feedback glyphicon glyphicon-pencil"></i>
                  </div>
                </div>
                <div class="robotic">
                  Leave this empty.<input type="url" name="url">
                </div>
                <div class="form-group has-feedback">
                  <label for="security_code" class="col-sm-3 control-label">Type the code:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="security_code" name="security_code">
                    <img src="/simonart/include/captcha/CaptchaSecurityImages.php" alt="captcha">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-1 col-sm-9">
                    <button type="submit" class="btn btn-lg btn-default">
                    <span class="glyphicon glyphicon-send"></span> Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

<? include("foot.php"); ?>