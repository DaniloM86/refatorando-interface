<?php
namespace App\Controller\Pages;
use App\Views\Views;
class Create extends Master{
	/** @method responsável por renderizar o conteudo da página view de cadastro**/
	public static function getCreate()
	{
		//armazena o conteúdo da página de cadastro 
		$content = Views::render("pages/create",[

		]);
			/** @return método do classe [PAI] **/
		return parent::getMasterPage("edit > user",$content);
	}

}
