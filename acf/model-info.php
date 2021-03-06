<?php
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_56724bf663d21',
		'title' => 'Model Info',
		'fields' => array (
<<<<<<< HEAD
		array (
						'key' => 'field_484hrghre',
						'label' => 'Search Name',
						'name' => 'search_override',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 75,
							'class' => '',
							'id' => '',
							),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
						),
=======
>>>>>>> origin/master
			array (
				'key' => 'field_56724bfa5b857',
				'label' => 'Floorplans',
				'name' => 'floorplans',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
<<<<<<< HEAD
					),
				'min' => '',
				'max' => '',
				'layout' => 'block',
				'button_label' => 'Add Row',
				'sub_fields' => array (
				array (
					'key' => 'field_56eb574ae5225',
					'label' => 'Hidden?',
					'name' => 'hidden',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
						),
					'message' => '',
					'default_value' => 0,
					),
=======
					),
				'min' => '',
				'max' => '',
				'layout' => 'block',
				'button_label' => 'Add Row',
				'sub_fields' => array (
>>>>>>> origin/master
					array (
						'key' => 'field_56724c6b698f7',
						'label' => 'Floorplan Name',
						'name' => 'floorplan_name',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
<<<<<<< HEAD
							'width' => 75,
=======
							'width' => 100,
>>>>>>> origin/master
							'class' => '',
							'id' => '',
							),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
						),
					array (
<<<<<<< HEAD
=======
						'key' => 'field_56eb574ae5225',
						'label' => 'Hidden?',
						'name' => 'hidden',
						'type' => 'true_false',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
							),
						'message' => '',
						'default_value' => 0,
						),
					array (
>>>>>>> origin/master
						'key' => 'field_56724c0c7ab3b',
						'label' => 'Floorplan Video',
						'name' => 'floorplan_video',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
							),
						'default_value' => '',
						'placeholder' => '',
						),
					array (
						'key' => 'field_56724c1b18a67',
						'label' => 'Floorplan Image',
						'name' => 'floorplan_image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
							),
						'return_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
						),
<<<<<<< HEAD
=======
					array (
						'key' => 'field_56724c41222c7',
						'label' => 'Inventory Link',
						'name' => 'inventory_link',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
							),
						'default_value' => '',
						'placeholder' => '',
						),
					array (
						'key' => 'field_56e4910bbc902',
						'label' => 'Floorplan Year',
						'name' => 'floorplan_year',
						'type' => 'taxonomy',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '50',
							'class' => '',
							'id' => '',
							),
						'taxonomy' => 'years',
						'field_type' => 'radio',
						'allow_null' => 0,
						'add_term' => 1,
						'save_terms' => 0,
						'load_terms' => 0,
						'return_format' => 'id',
						'multiple' => 0,
						),
					array (
						'key' => 'field_56e4912abc903',
						'label' => 'Floorplan Type',
						'name' => 'floorplan_type',
						'type' => 'taxonomy',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '50',
							'class' => '',
							'id' => '',
							),
						'taxonomy' => 'type',
						'field_type' => 'checkbox',
						'allow_null' => 0,
						'add_term' => 1,
						'save_terms' => 0,
						'load_terms' => 0,
						'return_format' => 'id',
						'multiple' => 0,
						),
>>>>>>> origin/master
					),
				),
			),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'models',
					),
				),
			),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
		));

endif;
?>
