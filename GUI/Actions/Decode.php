<?php
    /*ORIGINAL CREATOR: Aryan
    AUTHOR: Aryan
    Copyright 2022-2026 Aryan <mr.kronos@proton.me>
    License: GNU General Public License v3.0*/ 

    function Decode($content){
        $converted = base64_decode($content);
        $String = utf8_encode($converted);
        return $String;
    }
?>