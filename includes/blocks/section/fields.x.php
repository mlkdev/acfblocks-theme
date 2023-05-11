<?php

	if( function_exists( 'acf_add_local_field_group' ) ) :

		acf_add_local_field_group(
			array(
				'key' => 'group_64025599b399b',
				'title' => 'Block: Section',
				'fields' => array(
					array(
						'key' => 'field_6402583669ab9',
						'label' => 'Background Color',
						'name' => 'background_color',
						'aria-label' => '',
						'type' => 'color_picker',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'enable_opacity' => 0,
						'return_format' => 'string',
					),
					array(
						'key' => 'field_6402559969ab8',
						'label' => 'Background Asset',
						'name' => 'background_asset',
						'aria-label' => '',
						'type' => 'file',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'library' => 'all',
						'min_size' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_6402607c7c325',
						'label' => 'Background Overlay',
						'name' => 'background_overlay',
						'aria-label' => '',
						'type' => 'range',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 50,
						'min' => 0,
						'max' => 100,
						'step' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_640273e88b8cb',
						'label' => 'Layout Gap',
						'name' => 'layout_gap',
						'aria-label' => '',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'gap' => 'None',
							'gap-half' => 'Reduced',
							'gap-full' => 'Full',
						),
						'default_value' => 'gap',
						'return_format' => 'value',
						'multiple' => 0,
						'allow_null' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/section',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
				'show_in_rest' => 0,
			)
		);

	endif;
