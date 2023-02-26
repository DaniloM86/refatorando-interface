<?php
namespace App\Views;
/**
 * interface da views
 */
interface ViewsInterface
{
    public static function render($views,$vars = []);
}
