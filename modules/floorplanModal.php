<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
$floorplans = get_field('floorplans');
?>
<div id="vidModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Adrensline <span class="planName">25WB</span> Floorplan</h4>
			</div>
			<div class="modal-body">
				<img id="floorplan-modal-image" src="<?php echo $floorplans[0]['floorplan_image']; ?>">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>