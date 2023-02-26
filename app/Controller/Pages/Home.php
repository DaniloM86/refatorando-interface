<?php
namespace App\Controller\Pages;
use App\Views\Views;


class Home extends Master{
	/** @method responsável por renderizar o conteudo da página view da home**/
	public static function getHome()
	{
		$content = Views::render("pages/home",[
			"titleHomePage" =>  "home page titulo h1"
		]);
			return parent::getMasterPage("home > page",$content);
	}
}
