<?php
namespace App\Controller\Pages;
/** arquivo responsável pelo controle das páginas de requisição via [GET],
    * pelo controler do titulo, do header, do conteúdo da página, do roda pé
    * @return instance do header, do conteúdo e do Footer da página
**/
use App\Views\Views;
use App\Controller\Pages\Header\Header;
use App\Controller\Pages\Footer\Footer;
//classe responsável por implementar e gerenciar de forma fixa e dinãmica as páginas [html]
abstract class Master implements MasterInterface{
    /**  @method responsável por retornar o titulo, o header, o content, e o Footer
        *@return title, @return header, @return content, @return footer
     **/
    public static function getMasterPage($title,$content)
    {
            /** @var responsável por armazenar os dados fixos e dinâmicos **/
        $content = Views::render("pages/master",[
            "title"   => $title,
            "header"  => Header::getHeader(),
            "content" => $content,
            "footer"  => Footer::getFooter()
        ]);
            /** @return content da variável**/
        return $content;
    }
}
