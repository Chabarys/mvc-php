<?php 

namespace App\Controller\Pages;

use \App\Utils\View;

class Page {

    /**
     * Método rsponsável por renderizar o HEADER da página
     * @return string
     */
    public static function getHeader() {
        return View::render('pages/header');
    }

    /**
     * Método rsponsável por renderizar o FOOTER da página
     * @return string
     */
    public static function getFooter() {
        return View::render('pages/footer');
    }




    /**
     * Método responsável por retornar o conteudo (View) da nossa página genérica
     * @return string
     */
    public static function getPage ($title, $content) {
        return View::render('pages/page', [
            "title" => $title,
            "content" => $content,
            "header" => self::getHeader(),
            "footer" => self::getFooter()
        ]); 
    }
}