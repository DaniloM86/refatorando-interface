<?php
namespace App\Views;
class Views implements ViewsInterface
{
    private static function getContentView($views)
    {
        //var responsável por verificar o arquivo da view [html]
        $file = __DIR__."/../../public/views/".$views.".html";
            return file_exists($file) ? file_get_contents($file) : "";
    }
    public static function render($views,$vars = [])
    {
        $contentView = self::getContentView($views);
        $key = array_keys($vars);
        $key = array_map(function($items){
            return "{{".$items."}}";
        },$key);
            return str_replace($key,array_values($vars),$contentView);
    }
}
