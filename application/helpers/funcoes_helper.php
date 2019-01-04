    <?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    if (!function_exists('minify')) {

        function minify($buffer) {
            $search = array("\n", "\t", "\r", "\r\n", "\n\r");
            $replace = array();

            $buffer = str_replace($search, $replace, trim($buffer));

            $search = array(
                '/(\s){2,}/',
                '/\>(\s)+/',
                '/(\s)+\</',
                '/\{(\s)+/',
                '/(\s)+\{/',
                '/\}(\s)+/',
                '/(\s)+\}/',
                '/\((\s)+/',
                '/(\s)+\(/',
                '/\)(\s)+/',
                '/(\s)+\)/',
                '/\=(\s)+/',
                '/(\s)+\=/',
                '/&&(\s)+/',
                '/(\s)+&&/',
                '/(\s)+!/',
                '/<!--[^\[](.*?)-->/',
                '/\/\*(.*?)\*\//',
            );

            $replace = array(' ', '>', '<', '{', '{', '}', '}', '(', '(', ')', ')', '=', '=', '&&', '&&', '!', );
            $buffer = preg_replace($search, $replace, $buffer);
            return $buffer;
        }
    }
