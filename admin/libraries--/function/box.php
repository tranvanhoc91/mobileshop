<?php


function box($title, $content, $style)
{
    $str='<div class="box">
                ';
    $str .= "<h3 " .$style. ">$title</h3>";
    
    $str .= $content;
    
    $str .= '</div>';
    return $str;    
}




?>