<?php

    /**
     * libreria che genera tag HTML con un approccio
     * generalista
     */

    namespace HTML;

    /**
     * genera un tag HTML
     * @param string $tag il nome del tag
     * @param array $attr un array associativo con gli attributi del tag
     * @param string $content il contenuto del tag
     * @return string il tag HTML generato
     */
    function tag($tag, $attr = [], $content = '') {
        
        $t = '<' . $tag;
        foreach ($attr as $key => $value) {
            $t .= ' ' . $key . '="' . htmlspecialchars($value) . '"';
        }
        $t .= '>';
        if( ! empty($content) ) {
            $t .= $content . '</' . $tag . '>';
        }
        $t . PHP_EOL;

        return $t;

    }
    