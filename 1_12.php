<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Moja_Svastara
{
    public function __call($name, $args) {
        if($name=="proba_1")
        {
            if(is_array($args[0]))
            {
                return count($args[0]);
            }
            elseif(is_numeric($args[0]))
            {
                $s=0;
                foreach($args as $niz)
                {
                    $s+=$niz;
                }
               return $s; 
            }
            elseif(is_string($args[0]))
            {
                return implode(" - ", $args);
            }
            echo(trigger_error("Pogresan pristup metodu", E_USER_ERROR));
        }
        else
        {
               return implode(" ", $args); 
        }
    }
}
$obj = new Moja_Svastara();

echo "<h3>Broj elemenata u nizu je: ",$obj->proba_1(array('Pera', 'Mika')), "</h3>";
echo "<h3>Suma brojeva je: ",$obj->proba_1(22,4,66), "</h3>";
echo "<h3>Skup stringova je : ",$obj->proba_1("Ni","Ko","La"),"</h3>";
echo "<h3>Dobijeni niz je: ",$obj->proba_2("Laza","222/12",1996),"</h3>";