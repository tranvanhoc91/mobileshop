<?php

defined('_JEXEC') or die('Restricted access');
class ProductHelperQuery{
    
    static function OrderBy($orderby){
        switch($orderby){
            case 'time':
                $orderby = 'p.created_date';
                break;
            case 'price':
                $orderby = 'p.created_date';
                break;
        }
    }
    
    static function fieldSelect(){
    	
    }
}