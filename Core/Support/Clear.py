# ORIGINAL CREATOR: Aryan
# AUTHOR: Aryan
# Copyright (C) 2021-2026 Aryan <mr.kronos@proton.me>
# License: GNU General Public License v3.0

import os

Windows = "nt"


class Screen:

    def Clear():
        os.system("cls" if os.name == Windows else "clear")
