#!/bin/bash
# ORIGINAL CREATOR: Aryan
# AUTHOR: Aryan
# Copyright (C) 2021-2026 Aryan <mr.kronos@proton.me>
# License: GNU General Public License v3.0

GREEN=$(tput setaf 2)
LIGHTBLUE=$(tput setaf 6)
WHITE=$(tput setaf 15)

function check {
  attempts=5;
  Password=$(sed -nr "/^\[Settings\]/ { :l /^password[ ]*=/ { s/.*=[ ]*//; p; q;}; n; b l;}" <Configuration/Configuration.ini)
  printf "${LIGHTBLUE}\nINSERT YOUR UPDATE PASSWORD YOU HAVE $attempts ATTEMPTS\n\n"
  while [[ $attempts>0 ]];
    do
      read -sp "$GREEN[#MR.KRONOS#]$WHITE-->" pass
      while [[ $pass == "" ]]
      do
        printf "${LIGHTBLUE}\n\nINSERT YOUR UPDATE PASSWORD YOU HAVE $attempts ATTEMPTS\n\n"
        read -sp "$GREEN[#MR.KRONOS#]$WHITE-->" pass
      done
      if [ "$pass" == "$Password" ];
        then
        printf "${LIGHTBLUE}\n\nPASSWORD CORRECT!\n"
        update
      fi
        ((attempts=attempts-1))
        printf "$LIGHTBLUE\n\nWRONG PASSWORD REMAINING: $attempts ATTEMPTS\n\n"
    done
    printf "${WHITE}\n\nYOU HAVE: $attempts PRESS ENTER TO EXIT"
    read -p
    exit 1
}

function update {
  Update_path=$(sed -nr "/^\[Settings\]/ { :l /^path[ ]*=/ { s/.*=[ ]*//; p; q;}; n; b l;}" <Configuration/Configuration.ini)
  cd $Update_path
  mv Mr.Kronos Mr.Kronos2  &>/dev/null
  git clone https://github.com/aryanhubhaimai/Mr.Kronos-OSINT &>/dev/null | printf "$WHITE\nUPDATING MR.KRONOS..\n"

  if [ $? -eq  0 ];
    then
    cd $Update_path
    printf "${WHITE}\nWOULD YOU LIKE TO DELETE THE OLD FILES?(1)YES(2)NO\n\n"
    read -p "$GREEN[#MR.KRONOS#]$WHITE-->" conf
    if [ $conf = 1 ];
      then
      rm -r Mr.Kronos2 &>/dev/null | printf "${LIGHTBLUE}\nDELETING OLD MR.KRONOS FILES"
    else
      printf "${LIGHTBLUE}\nKEEPING OLD MR.KRONOS FILES"
    fi
    sleep 2
    printf "${WHITE}\n\nMR.KRONOS UPDATED CORRECTLY\n\n"
    read -p "$GREEN[#MR.KRONOS#]$WHITE-->" confvar
    printf "${WHITE}\nPRESS ENTER TO EXIT"
    read -p
    exit 1

  fi
    printf "${LIGHTBLUE}\n\nMR.KRONOS NOT INSTALLED HAVE YOU CHECKED YOUR INTERNET CONNECTION?\n\n"
    mv Mr.Kronos2 Mr.Kronos
    exit 1
}
check
