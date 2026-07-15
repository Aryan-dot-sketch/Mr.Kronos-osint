<?php
    /*ORIGINAL CREATOR: Aryan
    AUTHOR: Aryan
    Copyright (C) 2023-2026 Aryan <mr.kronos@proton.me>
    License: GNU General Public License v3.0*/

    $filename = "../Maps/Temp.txt";
    $reader = fopen("../Maps/TempEncode.txt","r");
    $name = fgets($reader);
    fclose($reader);
    echo move_uploaded_file(
        $_FILES["upFile"]["tmp_name"],
        $name
    )? "OK":"ERROR";
?> 

