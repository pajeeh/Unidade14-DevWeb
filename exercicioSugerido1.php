// Desenvolvido por: Luís A. G. Dos Santos RA: 256647

<?php

$ceu = array("Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Belgica"=> "Bruxelas",
"Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "França" => "Paris",
"Eslovaquia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemanha" => "Berlim", "Grecia" =>
"Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisboa",
"Espanha"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"Londres", "Chipre"=>"Nicosia",
"Lituania"=>"Vilnius", "Republica Tcheca"=>"Praga", "Estonia"=>"Tallin", "Hungria"=>"Budapest",
"Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Polônia"=>"Varsovia");


ksort($ceu);

foreach($ceu as $pais => $capital){
    echo "A capital da $pais é $capital \n";
}
?>