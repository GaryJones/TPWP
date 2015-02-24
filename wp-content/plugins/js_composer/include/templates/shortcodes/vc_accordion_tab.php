<?php
$output = $title = '';

extract(shortcode_atts(array(
	'title' => __("Section", "js_composer")
), $atts));

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $this->settings['base'], $atts );
$output .= "\n\t\t\t" . '<div class="'.$css_class.'">';
    $output .= "\n\t\t\t\t" . '<h3>' . $title . '</h3><div class="vc_clearfix">';
        $output .= ($content=='' || $content==' ') ? __("Empty section. Edit page to add content here.", "js_composer") : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
        $output .= "\n\t\t\t\t" . '</div>';
    $output .= "\n\t\t\t" . '</div> ';

echo $output;