<?php
    function mediane ($tab){

        sort($tab);

        $longTab = count($tab);

        //Si le tableau est impaire

        if($longTab%2==1){
            $index = ($longTab+1)/2;
            echo ($tab[$index-1]);
        }

        //Si le tableau est paire

        if($longTab%2==0){
            $index = ($longTab)/2;
            echo ($tab[$index-1]) + $tab[$index]/2;
        }
    }
?>