::ORIGINAL CREATOR: Aryan
::AUTHOR: Aryan
::Copyright (C) 2021-2026 Aryan <mr.kronos@proton.me>
::License: GNU General Public License v3.0

@ECHO OFF

START /B pip3 install -r requirements.txt  2>NUL >NUL
echo INSTALLING REQUIREMENTS DO NOT CLOSE THIS WINDOW MANUALLY...
cd ../
echo path= %CD% >>Mr.Kronos/Configuration/Configuration.ini
echo Desktop>Mr.Kronos/Display/Display.txt