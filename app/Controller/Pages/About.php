<?php
namespace App\Controller\Pages;
use App\Views\Views;
class About extends Master{
	public static function getAbout()
	{
		$content = Views::render("pages/about",[

			]);
		return parent::getMasterPage("about > page",$content);
	}
}
