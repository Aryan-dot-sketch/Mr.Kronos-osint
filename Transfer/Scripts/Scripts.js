/*ORIGINAL CREATOR: Aryan
AUTHOR: Aryan
Copyright (C) 2023-2026 Aryan <mr.kronos@proton.me>
License: GNU General Public License v3.0*/


function download(){
    var text = document.getElementById("Download");
    text.innerHTML="DOWNLOAD WILL START IN 0 SECONDS";
    var clickerLink = document.getElementById("clicker");
    clickerLink.click();
}
function Count(){
    var text = document.getElementById("Download");
    text.innerHTML="DOWNLOAD WILL START IN 5 SECONDS";
    const myTimeout = setTimeout(download, 5000);
}