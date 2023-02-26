<?php
namespace App\Controller\Pages\Header;
use App\Views\Views;
class Header implements HeaderInterface{
    public static function getHeader()
    {
        return Views::render("pages/header/header");
    }
}
