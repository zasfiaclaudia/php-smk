<?php 

    // array dimensi

    // $nama = array("joni","tejo","budi","siti",100,2.5);

    // var_dump($nama);

    // echo "<br><br>";

    // echo $nama[5];

    // echo "<br><br>";

    // // for ($i=0; $i < 6 ; $i++) { 
    // //     // echo $i;
    // //     echo $nama[$i]. '<br>';
    // // }

    //     foreach ($nama as $key) {
    //         echo $key. '<br>';
    //     }


    // array assosiatif

        // $nama = array(
        //     "joni" => "Surabaya",
        //     "budi" => "Malang Raya",
        //     "tejo" => "Jakarta",
        //     "siti" => "Sidoarjo"
        // );

        $nama["joni"]="Surabaya";
        $nama["budi"]="Malang Raya";
        $nama["tejo"]="Jakarta";
        $nama["siti"]="Sidoarjo";
        $nama["edi"]="Semarang";


        var_dump($nama);

        echo '<br><br>';

        // echo $nama['budi'];

        foreach ($nama as $key => $value) {
            echo $key. " => ".$value;

            echo '<br>';
        }



?>