<?php

class String
{
    /**
     * Subsitui os caracteres por vazio.
     *
     * @param $value
     * @return mixed
     */
    public static function replaceString($value)
    {
        $replace = ['.', '-', '/', '(', ')'];

        return str_replace($replace, "", $value);
    }

    /**
     * Realiza uma busca especifica por string.
     *
     * @param $string
     * @param $busca
     * @return bool|int
     */
    public static function buscaPosicaoString($string, $busca)
    {
        return strpos($string, $busca);
    }

    /**
     * Retorna uma string com todos os caracteres convertidos para maiúsculo.
     *
     * @param $string
     * @return string
     */
    public static function converteStringParaMaiusculo($string)
    {
        return strtoupper($string);
    }
}