<?php
    /*ORIGINAL CREATOR: Aryan
    AUTHOR: Aryan
    Copyright (C) 2022-2026 Aryan <mr.kronos@proton.me>
    License: GNU General Public License v3.0*/

    $filename = "../Graphs/Temp.txt";
    $reader = fopen("../Graphs/Temp.txt","r");
    $name = fgets($reader);
    fclose($reader);
    echo move_uploaded_file(
        $_FILES["upFile"]["tmp_name"],
        $name
    )? "OK":"ERROR";
?>