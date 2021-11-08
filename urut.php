<?php 
    function susun(&$listNama){
        sort($listNama);
    }


    $listNama = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

    susun($listNama);

    echo "Susun kata (larine, aduh, qifuat, toda, anevi, samid, kifuat)";
    echo "<br><br>";

    $i = 0;
    foreach($listNama as $nama){
        if($i < count($listNama)-1){
            echo $nama." | ";
        }else{
            echo $nama;
        }
        $i++;
    }
?>