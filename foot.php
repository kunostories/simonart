      </div><!--/.inner-->

    </div><!--/.wrap-->

    <!-- TODO: fix footer to push below gallery thumbnails
    <div class="foot clearfix">
      <div class="inner">
        <p>Site design built on <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="http://shawnroe.com">S. Roe</a>.</p>
      </div>
    </div>
    -->

    <!--JScript-->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/simonart/include/bootstrap3/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
      });
    </script>

    <!-- BlueImp gallery scripts -->
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script>
      document.getElementById('links').onclick = function (event) {
          event = event || window.event;
          var target = event.target || event.srcElement,
              link = target.src ? target.parentNode : target,
              options = {index: link, event: event},
              links = this.getElementsByTagName('a');
          blueimp.Gallery(links, options);
      };
    </script>

    <!-- Bootstrap Validator scripts -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
   </body>
</html>