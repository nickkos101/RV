<div id="cta-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Check Availibility</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <?php
            if ( shortcode_exists( 'contact-form-7' ) ) {
              echo do_shortcode('[contact-form-7 id="1006" title="Interested in Model Form"]');
            }
            ?>
          </div>
          <div class="col-md-4 col-xs-12">
            <?php

            $queryString = 'http://www.giantrv.com/DealerFiles/DealerList.asp?newused=N&Model=';
            if (get_field('search_override')) {
              $queryString .= get_field('search_override');
            }else {
            $queryString .= get_the_title();
          }

            ?>
            <a class="btn button btn-lg" style="background-color:#e70e0e;" href="<?php echo $queryString; ?>" target="_blank">See Inventory</a>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</div>
