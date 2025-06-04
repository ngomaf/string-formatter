<?php

namespace Ngomafortuna\StringFormatter;


/**
 * <b>StringFormatter</b>
 * This class is a helper, to formatter string
 * 
 * copyright (c) 2025, ngoma m. fortuna of the mostarda tec
 */
class StringFormatter
{
    public static function cat(string $txt, int $limita = 100, bool $limpar = true):string 
    {
        
        if($limpar == true) {
            $txt = strip_tags($txt);
        }
        
        if(strlen($txt) <= $limita) {
            return $txt;
        }
        
        $limita_txt = substr($txt, 0, $limita);
        $ultimo = strrpos($limita_txt, ' ');
        
        $txt = substr($txt, 0, $ultimo);
    
        return $txt . ' ...';
    }
    
    public static function slug(string $phrase):string 
    {
        $phrase = strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($phrase, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
        $phrase = implode("-",explode("---",trim($phrase,"-")));
        $phrase = implode("-",explode("--",trim($phrase,"-")));
    
        return $phrase;
    }

}