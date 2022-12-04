<?php 

    function belajar (){
        echo "Saya Belajar PHP";
    }


    function luasPersegi ($p, $l ){
        $luas = $p * $l;
    
        echo $luas;
    }

    function luas($p=5, $l=3){
        $luas = $p * $l;
    
        return $luas;
    }

    function output (){
        return "Belajar Function";
    }

    echo luas (50*3) * 5;
    

?>