<?php
    function CharlieBitesMe(){
        $probabilidad = rand(0,100);
        if ($probabilidad > 50) {
            echo "true";
        } else {
            echo "false";
        }
    }
    
    CharlieBitesMe();
?>