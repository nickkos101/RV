<?php /* Template Name: Database Page */ get_header(); ?>
<main>
	<div class="fluid-container">
		<form action="<?php echo get_site_url(); ?>/#">
			<select name="brand" value="<?php echo $_REQUEST['brand']; ?>">
				<option value="">Any</option>
				<?php $terms = get_terms( 'brands', 'orderby=count&hide_empty=0' );
				foreach ($terms as $term) {
					?>
					<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
					<?php } ?>
				</select>
				<select name="types" value="<?php echo $_REQUEST['type']; ?>">
					<option value="">Any</option>
					<?php $terms = get_terms( 'type', 'orderby=count&hide_empty=0' );
					foreach ($terms as $term) {
						?>
						<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
						<?php } ?>
					</select>
					<button>Filter</button>
				</form>
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
						query_posts(array('posts_per_page' => 9999, 'post_type' => 'Models', 'orderby' => 'title'));
					}
					?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php $floorplans = get_field('floorplans'); ?>
					<tr>
						<td>2016</td>
						<td><?php echo get_brand(get_the_id())->name; ?></td>				
						<td><?php echo get_the_title(); ?></td>
						<td><?php $types = get_types(get_the_id()); foreach($types as $type) {echo $type->name.',';} ?></td>
						<?php foreach ($floorplans as $floorplan) {	?>
						<td class="fp">
							<?php echo $floorplan['floorplan_name']; ?>
							<?php if ($floorplan['footage_shot'] == 1) { ?>
							<input type="checkbox" checked>
							<?php } else { ?>
							<input type="checkbox">
							<?php } ?>
							<span class="location"><?php echo $floorplan['location_shot']; ?></span>
						</td>
						<?php } ?>
					</tr>
				<?php endwhile; endif; ?>
			</tbody>
		</table>
	</div>
</main>
<?php get_footer(); ?>