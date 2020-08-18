<?php
// not full my idea
class Color_generator 
{
    public function unlimited_colors_generator_for_chart( $param_names_for_md5_colors, $color_alpha = 0.8 ) {
        $rgba = array();
        if (is_array($param_names_for_md5_colors)) {
            foreach ($param_names_for_md5_colors as $key => $value) {
                $md5 = md5($param_names_for_md5_colors[$key]);
                $hex = ('#' . substr($md5, 0, 6));
                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                $rgba[] = '"rgba('.$r.', '.$g.', '.$b.', 1)"';
            } 
        }
        else {
            $md5 = md5($param_names_for_md5_colors);
            $hex = ('#' . substr($md5, 0, 6));
            list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
            $rgba[] = '"rgba('.$r.', '.$g.', '.$b.', 1)"';
        }
        return $rgba;
    }
}

// For example, you can use it so: 
//
// $generate_color = new Color_generator();
// echo implode(', ', $generate_color->unlimited_colors_generator_for_chart($array__of_variables_name, 0.8));