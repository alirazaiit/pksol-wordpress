<?php 
$textdoimain = 'loptus';
global $pre_text;

$pre_text = 'VG ';


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Main Banner", 'loptus'),
   "base" => "banner",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Inside Text", 'loptus'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Input Text Inside", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content 1', 'loptus' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content 2', 'loptus' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link video", 'loptus'),
      "param_name" => "video",
      "value" => "",
      "description" => __("Input link video", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn video", 'loptus'),
      "param_name" => "btn2",
      "value" => "",
      "description" => __("Input Text btn video", 'loptus')
   ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Main Banner 2", 'loptus'),
   "base" => "banner2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background 1', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background 2', 'loptus' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background 3', 'loptus' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background 4', 'loptus' ),
         'param_name' => 'image4',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content', 'loptus' ),
         'param_name' => 'image5',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Main Banner 3", 'loptus'),
   "base" => "banner3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Inside Text", 'loptus'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Inside Text", 'loptus')
   ),
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Carousel', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
      )
 
    ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Main Banner 4", 'loptus'),
   "base" => "banner4",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content 1', 'loptus' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Us", 'loptus'),
   "base" => "about",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content', 'loptus' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Featured', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textfield',
          'name' => 'icon',
          'heading' => __('Class Icon', 'loptus'),
          'param_name' => 'icon',
        ),
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Us 2", 'loptus'),
   "base" => "about2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      'type' => 'param_group',
      'param_name' => 'details2',
      'heading' => __('List Content', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
      )
 
    ),
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Featured', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      )
 
    ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Us 3", 'loptus'),
   "base" => "about3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn 2", 'loptus'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Input link btn 2", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn 2", 'loptus'),
      "param_name" => "btn2",
      "value" => "",
      "description" => __("Input Text btn 2", 'loptus')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Text Image", 'loptus'),
   "base" => "text_image",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Featured', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('List Content', 'loptus'),
          'param_name' => 'title',
        ),
      )
 
    ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Image', 'loptus' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Left Image', 'loptus' ) => 'type1',
            __( 'Right Image', 'loptus' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Step Section", 'loptus'),
   "base" => "step",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Step', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textfield',
          'name' => 'number',
          'heading' => __('Number', 'loptus'),
          'param_name' => 'number',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Step Section 2", 'loptus'),
   "base" => "step2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background 2', 'loptus' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content', 'loptus' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Step', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textfield',
          'name' => 'number',
          'heading' => __('Number', 'loptus'),
          'param_name' => 'number',
        ),
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial", 'loptus'),
   "base" => "testimonial",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Testimonial', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textarea',
          'name' => 'testimonial',
          'heading' => __('Testimonial', 'loptus'),
          'param_name' => 'testimonial',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial 2", 'loptus'),
   "base" => "testimonial2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Testimonial', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textarea',
          'name' => 'testimonial',
          'heading' => __('Testimonial', 'loptus'),
          'param_name' => 'testimonial',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing", 'loptus'),
   "base" => "pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Tab 1", 'loptus'),
      "param_name" => "tab1",
      "value" => "",
      "description" => __("Input Text Tab 1", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Tab 2", 'loptus'),
      "param_name" => "tab2",
      "value" => "",
      "description" => __("Input Text Tab 2", 'loptus')
   ),
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Tab 1', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textarea',
          'name' => 'content',
          'heading' => __('List Content', 'loptus'),
          'param_name' => 'content',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
      )
 
    ),

   array(
      'type' => 'param_group',
      'param_name' => 'details2',
      'heading' => __('Item Tab 2', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textarea',
          'name' => 'content',
          'heading' => __('List Content', 'loptus'),
          'param_name' => 'content',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing 2", 'loptus'),
   "base" => "pricing2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Pricing', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textarea',
          'name' => 'content',
          'heading' => __('List Content', 'loptus'),
          'param_name' => 'content',
        ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Client", 'loptus'),
   "base" => "client",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_images',
         'heading' => __( 'Gallery Clients', 'loptus' ),
         'param_name' => 'post_gallery',
         'value' => '',
         'description' => __( 'Select image Gallery from media library to do your signature.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Client', 'loptus' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type Grid', 'loptus' ) => 'type1',
            __( 'Type Carousel', 'loptus' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Counter", 'loptus'),
   "base" => "counter",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Counter', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'number',
          'heading' => __('number', 'loptus'),
          'param_name' => 'number',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      )
 
    ),
    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Counter 2", 'loptus'),
   "base" => "counter2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Inside Text", 'loptus'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Inside Text", 'loptus')
   ),
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Counter', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'number',
          'heading' => __('number', 'loptus'),
          'param_name' => 'number',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      )
 
    ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Counter 3", 'loptus'),
   "base" => "counter3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Counter', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'number',
          'heading' => __('number', 'loptus'),
          'param_name' => 'number',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      )
 
    ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Tabs", 'loptus'),
   "base" => "tabs",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Tabs', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title1',
          'heading' => __('Title Tab', 'loptus'),
          'param_name' => 'title1',
        ),
        array(
          'type' => 'textfield',
          'name' => 'title2',
          'heading' => __('Title Content', 'loptus'),
          'param_name' => 'title2',
        ),
        array(
          'type' => 'textarea',
          'name' => 'subtitle',
          'heading' => __('Subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textarea',
          'name' => 'content',
          'heading' => __('List Content', 'loptus'),
          'param_name' => 'content',
        ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
        array(
          'type' => 'checkbox',
          'name' => 'active',
          'heading' => __('Active', 'loptus'),
          'param_name' => 'active',
        ),
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."We do", 'loptus'),
   "base" => "we_do",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("List Content", 'loptus'),
      "param_name" => "list",
      "value" => "",
      "description" => __("Input List Content", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 1', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'loptus' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 3', 'loptus' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 4', 'loptus' ),
         'param_name' => 'image4',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."We do 2", 'loptus'),
   "base" => "we_do2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("List Content", 'loptus'),
      "param_name" => "list",
      "value" => "",
      "description" => __("Input List Content", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link video", 'loptus'),
      "param_name" => "video",
      "value" => "",
      "description" => __("Input link video", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn video", 'loptus'),
      "param_name" => "btn2",
      "value" => "",
      "description" => __("Input Text btn video", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."We do 3", 'loptus'),
   "base" => "we_do3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Inside Text", 'loptus'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Inside Text", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("List Content", 'loptus'),
      "param_name" => "list",
      "value" => "",
      "description" => __("Input List Content", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 1', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'loptus' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 3', 'loptus' ),
         'param_name' => 'image3',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 4', 'loptus' ),
         'param_name' => 'image4',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link btn", 'loptus'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link btn", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."FAQ", 'loptus'),
   "base" => "faq",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item FAQ', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textarea',
          'name' => 'subtitle',
          'heading' => __('subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'checkbox',
          'name' => 'active',
          'heading' => __('Active', 'loptus'),
          'param_name' => 'active',
        ),
      )
 
    ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service", 'loptus'),
   "base" => "service",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'loptus'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'loptus')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'loptus' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'loptus' ) => 'DESC',
            __( 'ASC : lowest to highest', 'loptus' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'loptus' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'loptus' ) => 'date',
            __( 'Title', 'loptus' ) => 'title',
            __( 'Random', 'loptus') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text btn", 'loptus'),
      "param_name" => "btn",
      "value" => "",
      "description" => __("Input Text btn", 'loptus')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Service', 'loptus' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'loptus' ) => 'type1',
            __( 'Type 2', 'loptus' ) => 'type2',
            __( 'Type 3', 'loptus' ) => 'type3',
            __( 'Type 4', 'loptus' ) => 'type4',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Portfolio", 'loptus'),
   "base" => "portfolio",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'loptus'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'loptus')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'loptus' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'loptus' ) => 'DESC',
            __( 'ASC : lowest to highest', 'loptus' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'loptus' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'loptus' ) => 'date',
            __( 'Title', 'loptus' ) => 'title',
            __( 'Random', 'loptus') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Portfolio', 'loptus' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'loptus' ) => 'type1',
            __( 'Type 2', 'loptus' ) => 'type2',
            __( 'Type 3', 'loptus' ) => 'type3',
            __( 'Type 4', 'loptus' ) => 'type4',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Case Carousel", 'loptus'),
   "base" => "case",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'loptus'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'loptus')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'loptus' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'loptus' ) => 'DESC',
            __( 'ASC : lowest to highest', 'loptus' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'loptus' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'loptus' ) => 'date',
            __( 'Title', 'loptus' ) => 'title',
            __( 'Random', 'loptus') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Portfolio', 'loptus' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'loptus' ) => 'type1',
            __( 'Type 2', 'loptus' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Case Grid", 'loptus'),
   "base" => "case2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Inside Text", 'loptus'),
      "param_name" => "text",
      "value" => "",
      "description" => __("Inside Text", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 

      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Case', 'loptus' ),
         'param_name' => 'type',
         'value' => array(
            __( '3 Column', 'loptus' ) => 'type1',
            __( '2 Column', 'loptus' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
        array(
          'type' => 'checkbox',
          'name' => 'full_width',
          'heading' => __('Full Width', 'loptus'),
          'param_name' => 'full_width',
        ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'loptus'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'loptus')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'loptus' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'loptus' ) => 'DESC',
            __( 'ASC : lowest to highest', 'loptus' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'loptus' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'loptus' ) => 'date',
            __( 'Title', 'loptus' ) => 'title',
            __( 'Random', 'loptus') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Team", 'loptus'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'loptus'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'loptus')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'loptus' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'loptus' ) => 'DESC',
            __( 'ASC : lowest to highest', 'loptus' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'loptus' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'loptus' ) => 'date',
            __( 'Title', 'loptus' ) => 'title',
            __( 'Random', 'loptus') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog", 'loptus'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'loptus'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'loptus')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'loptus'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'loptus')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'loptus'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'loptus')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'loptus' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'loptus' ) => 'DESC',
            __( 'ASC : lowest to highest', 'loptus' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'loptus' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'loptus' ) => 'date',
            __( 'Title', 'loptus' ) => 'title',
            __( 'Random', 'loptus') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Blog', 'loptus' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'loptus' ) => 'type1',
            __( 'Type 2', 'loptus' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'loptus' )
      ),

    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact1", 'loptus'),
   "base" => "contact1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Content', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'subtitle',
          'heading' => __('subtitle', 'loptus'),
          'param_name' => 'subtitle',
        ),
        array(
          'type' => 'textfield',
          'name' => 'icon',
          'heading' => __('Class Icon', 'loptus'),
          'param_name' => 'icon',
        ),
      )
 
    ),
    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact2", 'loptus'),
   "base" => "contact2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'param_group',
      'param_name' => 'details',
      'heading' => __('Item Content', 'loptus'),
      'params' => array(
        array(
          'type' => 'textfield',
          'name' => 'title',
          'heading' => __('Title', 'loptus'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          'name' => 'location',
          'heading' => __('Location', 'loptus'),
          'param_name' => 'location',
        ),
        array(
          'type' => 'textfield',
          'name' => 'phone',
          'heading' => __('Phone', 'loptus'),
          'param_name' => 'phone',
        ),
        array(
          'type' => 'textfield',
          'name' => 'email',
          'heading' => __('Email', 'loptus'),
          'param_name' => 'email',
        ),
      )
 
    ),
    )));
}
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Google Maps", 'loptus'),
   "base" => "map",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Latitude", 'loptus'),
      "param_name" => "lat",
      "value" => "",
      "description" => __("Input latitude Google Maps", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Longitude", 'loptus'),
      "param_name" => "long",
      "value" => "",
      "description" => __("Input longitude Google Maps", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data zoom", 'loptus'),
      "param_name" => "zoom",
      "value" => "",
      "description" => __("Input zoom Google Maps", 'loptus')
   ),
    )));
} 
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Google Maps 2", 'loptus'),
   "base" => "map2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'loptus'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'loptus')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'loptus' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'loptus' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Latitude", 'loptus'),
      "param_name" => "lat",
      "value" => "",
      "description" => __("Input latitude Google Maps", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Longitude", 'loptus'),
      "param_name" => "long",
      "value" => "",
      "description" => __("Input longitude Google Maps", 'loptus')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Data zoom", 'loptus'),
      "param_name" => "zoom",
      "value" => "",
      "description" => __("Input zoom Google Maps", 'loptus')
   ),
    )));
} 