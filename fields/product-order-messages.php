<?php

if( function_exists('acf_add_local_field_group') ):
	
	acf_add_local_field_group(array(
		'key' => 'group_5bd6d0b84c682',
		'title' => 'Product Order Messages',
		'fields' => array(
			array(
				'key' => 'field_5bd6d0b853d28',
				'label' => '',
				'name' => 'wom_order_messages',
				'type' => 'repeater',
				'instructions' => '<p>Messages placed here will appear in the order confirmation receipts and emails that get sent out when a customer purchases this product. Messages from any purchased product and <a href="admin.php?page=wom-order-messages" target="_blank">global messages</a> will be shown simultaneously. Use the menu order option to put important messages on top (lower numbers on top, negative values are ok).</p>',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Add Order Message',
				'sub_fields' => array(
					array(
						'key' => 'field_5bd6d0b870466',
						'label' => 'Location',
						'name' => 'location',
						'type' => 'radio',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'above-details' => 'Above order details',
							'below-details' => 'Below order details',
							'bottom' => 'Bottom of receipt',
						),
						'allow_null' => 0,
						'other_choice' => 0,
						'default_value' => 'above-details',
						'layout' => 'vertical',
						'return_format' => 'value',
						'save_other_choice' => 0,
					),
					array(
						'key' => 'field_5bd6d0b8704e4',
						'label' => 'Statuses',
						'name' => 'statuses',
						'type' => 'checkbox',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'pending' => 'Pending (No payment)',
							'processing' => 'Processing (Payment received)',
							'completed' => 'Completed',
							'cancelled' => 'Cancelled',
							'on-hold' => 'On hold',
							'refunded' => 'Refunded',
							'failed' => 'Failed',
						),
						'allow_custom' => 0,
						'default_value' => array(
						),
						'layout' => 'vertical',
						'toggle' => 1,
						'return_format' => 'value',
						'save_custom' => 0,
					),
					array(
						'key' => 'field_5bd6d0b87055c',
						'label' => 'Receipt Type',
						'name' => 'type',
						'type' => 'checkbox',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'website' => 'Website',
							'email' => 'Email',
						),
						'allow_custom' => 0,
						'default_value' => array(
						),
						'layout' => 'vertical',
						'toggle' => 0,
						'return_format' => 'value',
						'save_custom' => 0,
					),
					array(
						'key' => 'field_5bd6d6e7c8abf',
						'label' => 'Menu Order',
						'name' => 'menu_order',
						'type' => 'number',
						'instructions' => 'Lower numbered messages appear on top with a default of 0.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => 0,
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
					),
					array(
						'key' => 'field_5bd6d0b8705d9',
						'label' => 'Content',
						'name' => 'content',
						'type' => 'wysiwyg',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 0,
						'delay' => 0,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
				),
			),
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'wom-order-messages',
				),
			),
		),
		'menu_order' => 100,
		'position' => 'normal',
		'style' => 'acftc-group-0',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

endif;