# ORIGINAL CREATOR: Aryan
# AUTHOR: Aryan
# Copyright (C) 2021-2026 Aryan <mr.kronos@proton.me>
# License: GNU General Public License v3.0

import os

class Notifier:

    @staticmethod
    def Start(Mode):
        if Mode == "Desktop":
            if os.name == "nt":
                pass
            else:
                os.system("java Core/Support/Notification/Notification.java")
        else:
            pass