<?php /* Template Name: Database Page */ get_header(); ?>
<main>
	<div class="fluid-container">
<<<<<<< HEAD
		<table style="text-align:center;">
			<thead>
				<th>YEAR</th>
				<th>MANU</th>
				<th>BRAND</th>
				<th>FI</th>
				<th>CON</th>
				<th>TYPES</th>
				<th>FLOORPLANS</th>
			</thead>
		</form>
		<tbody style="text-align:center;">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			if(isset($_REQUEST['types'])) {
				query_posts(array('posts_per_page' => 100, 'paged' => $paged, 'orderby' => 'title', 'order'=> 'ASC', 'post_type' => 'Models', 'tax_query' => array(
					'relation' => 'OR',
					array(
						'taxonomy' => 'type',
						'field'    => 'slug',
						'terms'    => $_REQUEST['types'],
						'operator' => 'IN',
						),
					)
				)
				);
			}
			elseif(isset($_REQUEST['manufacturer'])) {
				query_posts(array('posts_per_page' => 100, 'paged' => $paged, 'orderby' => 'title', 'order'=> 'ASC', 'post_type' => 'Models', 'tax_query' => array(
					'relation' => 'OR',
					array(
						'taxonomy' => 'brands',
						'field'    => 'slug',
						'terms'    => $_REQUEST['manufacturer'],
						'operator' => 'IN',
						),
					)
				)
				);
			}
			else {
				query_posts(array('posts_per_page' => 100, 'paged' => $paged, 'post_type' => 'Models', 'orderby' => 'title', 'order'=> 'ASC', 'post_status' => array('publish', 'pending', 'draft') ));
			}
			?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php $floorplans = get_field('floorplans'); ?>
				<tr>
					<td>2016</td>
					<td><?php echo get_brand(get_the_id()); ?></td>
					<td><a href="<?php echo get_edit_post_link(); ?>"><?php echo get_the_title(); ?></a></td>
					<td><?php if (has_post_thumbnail()) {echo 'Yes';} else {echo 'No';} ?></td>
					<td><?php $content = get_the_content(); if (!empty($content)) {echo 'Yes';} else {echo 'No';} ?></td>
					<td><?php
						$types = get_types(get_the_id());
						if ($types) :
							foreach($types as $type) {
								echo $type->name.',';
							}
							endif;
							?>
						</td>
						<?php if (is_array($floorplans)) : foreach ($floorplans as $floorplan) {	?>
							<td class="fp">
								<?php echo $floorplan['floorplan_name']; ?>
								<?php
								if (!$floorplan['floorplan_video']) {
									echo 'NEEDS VIDEO<br/>';
								}
								if (!$floorplan['floorplan_image']) {
									echo 'NEEDS IMAGE<br/>';
								}
								?>
							</td>
							<?php } endif; ?>
						</tr>
					<?php endwhile; endif; ?>
							<tr>
								<td colspan="6"><?php echo paginate_links(); ?></td>
							</tr>
				</tbody>
			</table>
		</div>
	</main>
	<?php get_footer(); ?>
=======
				<table>
					<thead>
						<th>Year</th>
						<th>Manufacturer</th>
						<th>Brand</th>
						<th>Types</th>
						<th>Floorplans</th>
					</thead>
				</form>
				<tbody>
					<?php 
					if(isset($_REQUEST['brand']) && isset($_REQUEST['types'])) {
						query_posts(array('posts_per_page' => 9999, 'post_type' => 'Models', 'orderby' => 'title', 'order' => 'ASC', 'tax_query' => array(
							'relation' => 'OR',
							array(
								'taxonomy' => 'brand',
								'field'    => 'slug',
								'terms'    => array($_REQUEST['brands']),
								),
							array(
								'taxonomy' => 'type',
								'field'    => 'slug',
								'terms'    => array($_REQUEST['types']),
								),
							)
						)
						);
					}
					else {
						query_posts(array('posts_per_page' => 9999, 'post_type' => 'Models', 'orderby' => 'title', 'post_status' => array('publish', 'pending', 'draft') ));
					}
					?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php $floorplans = get_field('floorplans'); ?>
						<tr>
							<td>2016</td>
							<td><?php echo get_brand(get_the_id())->name; ?></td>				
							<td><a href="<?php echo get_edit_post_link(); ?>"><?php echo get_the_title(); ?></a></td>
							<td><?php $types = get_types(get_the_id());  if ($types) {foreach($types as $type) {echo $type->name.',';} } ?></td>
							<?php foreach ($floorplans as $floorplan) {	?>
								<td class="fp">
									<?php echo $floorplan['floorplan_name']; ?>
									<?php
									if (!$floorplan['floorplan_video']) {
										echo 'NEEDS VIDEO<br/>';
									}
									if (!$floorplan['floorplan_image']) {
										echo 'NEEDS IMAGE<br/>';
									}
									if (!$floorplan['floorplan_year']) {
										echo 'PLEASE SET YEAR<br/>';
									}
									if (!$floorplan['floorplan_type']) {
										echo 'PLEASE SET TYPE<br/>';
									}

									?>
								</td>
								<?php } ?>
							</tr>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</tbody>
				</table>
			</div>
		</main>
		<?php get_footer(); ?>
>>>>>>> origin/master
