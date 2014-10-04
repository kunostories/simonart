      </div><!--/.inner-->

    </div><!--/.wrap-->

    <div class="foot">
      <div class="inner">
        <p>Site design built on <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="http://shawnroe.com">S. Roe</a>.</p>
      </div>
    </div>

    <!--JScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/simonart/include/bootstrap3/js/bootstrap.min.js"></script>

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
    <script type="text/javascript">
      $(document).ready(function() {
        $('#webCarousel').carousel();
        $('.dropdown-toggle').dropdown();
      });
    </script>
   </body>
</html>