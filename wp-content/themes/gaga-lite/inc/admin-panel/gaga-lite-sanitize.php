<?php
    /**
     * Sanitize
     */
     
function gaga_lite_sanitize_text($input){
    $all_tags = array(
        'span'=>array(
            'class'=>array()
        )
     );
    return wp_kses($input,$all_tags);
    
}

function gaga_lite_sanitize_textarea($input){
    return wp_kses_post( force_balance_tags( $input ) );
}

function gaga_lite_sanitize_url($input){
    return esc_url($input);
}

function gaga_lite_sanitize_checkbox($input){
    if($input == 1){
        return 1;
    }else{
        return '';
    }
}

function gaga_lite_sanitize_page_select($input){
    return esc_attr($input);
}

function gaga_lite_sanitize_cat_select($input){
    return esc_attr($input);
}

function gaga_lite_sanitize_font_size($input){
   
    return esc_attr($input);
    
}
function gaga_lite_sanitize_font_style($input){
    
    return esc_attr($input);
}    

function gaga_lite_sanitize_bg_repeat($input){
    
    $bg_repeat = array(
    'no-repeat'  => __('No Repeat', 'gaga-lite'),
    'repeat'     => __('Tile', 'gaga-lite'),
    'repeat-x'   => __('Tile Horizontally', 'gaga-lite'),
    'repeat-y'   => __('Tile Vertically', 'gaga-lite'),
);
    if(array_key_exists($input,$bg_repeat))
    {
        return $input;
    }
    else
    {
        return '';
    }
}
function gaga_lite_sanitize_bg_position($input){
    
       $bg_position = array(
    'left'       => __('Left', 'gaga-lite'),
    'center'     => __('Center', 'gaga-lite'),
    'right'      => __('Right', 'gaga-lite'),
);
    
    if(array_key_exists($input,$bg_position))
    {
        return $input;
    }
    else
    {
        return '';
    }
}
function gaga_lite_sanitize_bg_attachment($input){
    
    $bg_attachment = array(
    'fixed'      => __('Fixed', 'gaga-lite'),
    'scroll'     => __('Scroll', 'gaga-lite'),
);
    
    if(array_key_exists($input,$bg_attachment))
    {
        return $input;
    }
    else
    {
        return '';
    }
}