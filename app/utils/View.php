<?php

namespace App\Utils;

class View {
    /**
     * Método responsável por retornar o conteúdo de uma View
     * @param string $nameView
     * @return string
     */
    private static function getContentView($nameView) {
        $file = __DIR__."/../../resources/view/{$nameView}.html";
        return file_exists($file) ? file_get_contents($file) : '';
    }
    
    /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @param string $view
     * @param array $arrVars (string/numeric)
     * @return string
    */
    public static function render($view, $arrVars = []) {
        $contentView = self::getContentView($view);

        $keys = array_keys($arrVars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        return str_replace($keys, array_values($arrVars), $contentView);
    }
}