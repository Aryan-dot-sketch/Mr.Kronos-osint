#!/usr/bin/env python3
# ╔══════════════════════════════════════════════════════════╗
# ║           MR.KRONOS — COLOR SYSTEM v3.0                ║
# ║           Premium Classic Palette                       ║
# ╚══════════════════════════════════════════════════════════╝

"""
Kronos Color System — Navy + Gold refined CLI palette
"""


class Color:
    """Unified color class with full backward compatibility"""

    # Standard ANSI
    YELLOW2 = "\033[33m"
    YELLOW = "\033[0;93m"
    RED = "\033[31m"
    GREEN = "\033[32m"
    BLUE = "\033[94m"
    WHITE = "\033[97m"
    BANNER = "\033[41m"
    RESET = "\033[0m"

    BRIGHT_RED = "\033[91m"
    BRIGHT_GREEN = "\033[92m"
    BRIGHT_YELLOW = "\033[93m"
    BRIGHT_BLUE = "\033[94m"
    BRIGHT_MAGENTA = "\033[95m"
    BRIGHT_CYAN = "\033[96m"
    GRAY = "\033[90m"

    BOLD = "\033[1m"
    DIM = "\033[2m"
    ITALIC = "\033[3m"
    UNDERLINE = "\033[4m"

    @staticmethod
    def navy(bg=False):
        """Deep Navy #1a2744"""
        code = "48" if bg else "38"
        return f"\033[{code};2;26;39;68m"

    @staticmethod
    def gold(bg=False):
        """Warm Gold #c8a84e"""
        code = "48" if bg else "38"
        return f"\033[{code};2;200;168;78m"

    @staticmethod
    def cream(bg=False):
        """Cream #f8f5f0"""
        code = "48" if bg else "38"
        return f"\033[{code};2;248;245;240m"

    @staticmethod
    def success():
        return "\033[38;2;45;106;79m"

    @staticmethod
    def warning():
        return "\033[38;2;184;134;11m"

    @staticmethod
    def danger():
        return "\033[38;2;139;37;0m"

    @staticmethod
    def slate():
        """Slate #5a6470"""
        return "\033[38;2;90;100;112m"


class Font:
    Color = Color()
