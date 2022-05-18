<?php 

//
// File reads dms.csv and convert coordinates to lat, lon
//

if ($file = fopen("dms.csv", "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        $line = preg_replace( '/[^0-9 ]/i', '', $line);
        $pieces = explode(" ", $line);
        //print_r($pieces);
        $lat = round (substr($pieces[0],0,2) + substr($pieces[0],2,2)/60 + substr($pieces[0],4,2)/3600,6);
        $lon = round (substr($pieces[1],1,2) + substr($pieces[1],3,2)/60 + substr($pieces[1],5,2)/3600,6);
        echo '['.$lon.', '.$lat.'],';
        echo PHP_EOL;
    }
    fclose($file);
}   
?> 