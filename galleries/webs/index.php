<? include("../../head.php"); ?>
        <div id="blueimp-gallery" class="blueimp-gallery">
          <!-- The container for the modal slides -->
          <div class="slides"></div>
          <!-- Controls for the borderless lightbox -->
          <h3 class="title"></h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="close">×</a>
          <a class="play-pause"></a>
          <ol class="indicator"></ol>
          <!-- The modal dialog, which will be used to wrap the lightbox content -->
          <div class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" aria-hidden="true">&times;</button>
                          <h4 class="modal-title"></h4>
                      </div>
                      <div class="modal-body next"></div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left prev">
                              <i class="glyphicon glyphicon-chevron-left"></i>
                              Previous
                          </button>
                          <button type="button" class="btn btn-inverse next">
                              Next
                              <i class="glyphicon glyphicon-chevron-right"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div id="links">
          <p>Click any image to view gallery.</p>
            <a href="23.jpg" title="web" data-gallery>
                <img src="thumbs/23.jpg" alt="web">
            </a>
            <a href="26.jpg" title="web" data-gallery>
                <img src="thumbs/26.jpg" alt="web">
            </a>
            <a href="29.jpg" title="web" data-gallery>
                <img src="thumbs/29.jpg" alt="web">
            </a>
            <a href="32.jpg" title="web" data-gallery>
                <img src="thumbs/32.jpg" alt="web">
            </a>
            <a href="34.jpg" title="web" data-gallery>
                <img src="thumbs/34.jpg" alt="web">
            </a>
            <a href="42.jpg" title="web" data-gallery>
                <img src="thumbs/42.jpg" alt="web">
            </a>
        </div>

<? include("../../foot.php"); ?>