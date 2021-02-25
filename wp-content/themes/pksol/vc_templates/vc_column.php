<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
    'column_id' => '',
    'title' =>'',
    'subtitle' =>'',
    'type' => '',
    'image' => '',
), $atts));

$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);

if($css_class != 'col-md-12'){


        if($type == 'faq'){
        $output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'">
      <div class="single-page">   <div class="panel-group panel-faq" id="accordion" role="tablist" aria-multiselectable="true">';

        $output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
        $output .= "\n\t".' </div></div></div>'.$this->endBlockComment($el_class) . "\n";


        }else{
        $output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'">';

        $output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
        $output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";

        }

}else{
if($type == 'testimonia1'){
        $output .= "\n\t".'<div class="item active">
                            <div class="thumbnails">';

        $output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
        $output .= "\n\t".' </div></div>'.$this->endBlockComment($el_class) . "\n";

        }elseif($type == 'testimonia2'){
        $output .= "\n\t".'<div class="item">
                            <div class="thumbnails">';

        $output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
        $output .= "\n\t".' </div></div>'.$this->endBlockComment($el_class) . "\n";


        }else{

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
}
}
echo wp_specialchars_decode(esc_attr($output),ENT_QUOTES);