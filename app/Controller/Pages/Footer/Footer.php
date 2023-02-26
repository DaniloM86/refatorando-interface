<?php
namespace App\Controller\Pages\Footer;
use App\Views\Views;
class Footer implements FooterInterface{
    public static function getFooter()
    {
        return Views::render("pages/footer/footer");
    }
}
