# ORIGINAL CREATOR: Aryan
# AUTHOR: Aryan
# Copyright (C) 2023-2026 Aryan <mr.kronos@proton.me>
# License: GNU General Public License v3.0 

import random
from configparser import ConfigParser


class Select:
   
    nomefile = "Configuration/Configuration.ini"
    parser = ConfigParser()
    parser.read(nomefile)
    useragent_file = parser["Settings"]["useragent_List"]
    f = open(useragent_file, "r")
    value = f.readlines()
    f.close()
    agent = random.choice(value).replace("\n","")