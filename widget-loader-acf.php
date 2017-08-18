<?php

$key = 'widget_mosaic-grid';
$choices = self::$config['image_choices'];
$widgetplacement = self::$config['tab_placement'];
$post_types = self::$config['post_types'];

$widget_config = array (
  'key' => $key,
  'name' => 'mosaic-grid',
  'label' => 'Mosaic Grid',
  'display' => 'block',
  'sub_fields' => array (
    array (
      'key' => $key . '_blocks',
      'label' => 'Blocks',
      'name' => 'blocks',
      'type' => 'repeater',
      'instructions' => 'Add the blocks ',
      'required' => 1,
      'min' => 1,
      'max' => 12,
      'layout' => 'block',
      'button_label' => 'Add inner block',
      'sub_fields' => array (
        array (
          'key' => $key . '_basic_details_tab',
          'label' => 'Basic Details',
          'type' => 'tab',
		  'placement' => $widgetplacement,
        ),
        array (
          'key' => $key . '_image',
          'label' => 'Image',
          'name' => 'image',
          'type' => 'image',
          'return_format' => 'array',
          'preview_size' => 'full',
          'library' => 'all',
        ),
        array (
          'key' => $key . '_link',
          'label' => 'Link',
          'name' => 'link',
          'type' => 'url',
        ),
        array (
          'key' => $key . '_line_one',
          'label' => 'Line One',
          'name' => 'line_one',
          'type' => 'text',
        ),
        array (
          'key' => $key . '_line_two',
          'label' => 'Line Two',
          'name' => 'line_two',
          'type' => 'text',
        ),
        array (
          'key' => $key . '_button_text',
          'label' => 'Button Text',
          'name' => 'button_text',
          'type' => 'select',
          'instructions' => 'Select the text to be displayed on the button',
          'choices' => array (
            'Click Here' => 'Click Here',
            'Enter Now' => 'Enter Now',
            'Buy Now' => 'Buy Now',
            'Click Here To Enter' => 'Click Here To Enter',
            'Click For More' => 'Click For More',
            'Get Tickets' => 'Get Tickets',
            'Shop Now' => 'Shop Now',
            'Watch Here' => 'Watch Here',
            'Find Out More' => 'Find Out More',
            'Click For Tickets' => 'Click For Tickets',
            'Download Voucher' => 'Download Voucher',
            'Closed' => 'Closed'
          ),
          'default_value' => array (
            'Click Here' => 'Click Here',
          ),
        ),
        array (
          'key' => $key . '_advanced_details_tab',
          'label' => 'Advanced Details',
          'type' => 'tab',
          'placement' => 'left',
        ),
        array (
          'key' => $key . '_no_text',
          'label' => 'No Text',
          'name' => 'no_text',
          'type' => 'true_false',
          'layout' => 'horizontal',
        ),
        array (
          'key' => $key . '_text_color',
          'label' => 'Text Colour',
          'name' => 'text_color',
          'type' => 'color_picker',
          'layout' => 'horizontal'
        ),
        array (
          'key' => $key . '_button_color',
          'label' => 'Button Colour',
          'name' => 'button_color',
          'type' => 'color_picker',
          'layout' => 'vertical',
        ),
      ),
    ),
  ),
  );

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
