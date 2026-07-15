#!/usr/bin/env python3
# ╔══════════════════════════════════════════════════════════╗
# ║           MR.KRONOS — TERMINAL STYLER v3.0             ║
# ║    Premium Classic CLI Design                          ║
# ║    Palette: Navy | Gold | Cream                        ║
# ╚══════════════════════════════════════════════════════════╝

"""Kronos Terminal Styler — Refined CLI with true-color navy & gold"""

import sys
import os
import time
import threading


def supports_truecolor():
    term = os.environ.get("TERM", "")
    colorterm = os.environ.get("COLORTERM", "")
    if "truecolor" in colorterm.lower() or "24bit" in colorterm.lower():
        return True
    if term in ("xterm-kitty", "wezterm", "alacritty"):
        return True
    return hasattr(sys.stdout, 'isatty') and sys.stdout.isatty()

USE_TRUECOLOR = supports_truecolor()


# ============================================================
# KRONOS PREMIUM COLOR PALETTE
# ============================================================
class KronosColors:
    """Refined navy-and-gold palette"""

    # Standard fallbacks
    RED = "\033[31m"
    GREEN = "\033[32m"
    YELLOW = "\033[33m"
    BLUE = "\033[34m"
    MAGENTA = "\033[35m"
    CYAN = "\033[36m"
    WHITE = "\033[97m"
    GRAY = "\033[90m"
    BLACK = "\033[30m"

    BRIGHT_RED = "\033[91m"
    BRIGHT_GREEN = "\033[92m"
    BRIGHT_YELLOW = "\033[93m"
    BRIGHT_BLUE = "\033[94m"
    BRIGHT_MAGENTA = "\033[95m"
    BRIGHT_CYAN = "\033[96m"

    BG_RED = "\033[41m"
    BG_GREEN = "\033[42m"
    BG_BLUE = "\033[44m"

    BOLD = "\033[1m"
    DIM = "\033[2m"
    ITALIC = "\033[3m"
    UNDERLINE = "\033[4m"
    REVERSE = "\033[7m"
    RESET = "\033[0m"

    @staticmethod
    def rgb(r, g, b, bg=False):
        code = 48 if bg else 38
        return f"\033[{code};2;{r};{g};{b}m" if USE_TRUECOLOR else ""

    @staticmethod
    def navy(bg=False):
        """Deep navy #1a2744"""
        return KronosColors.rgb(26, 39, 68, bg)

    @staticmethod
    def gold(bg=False):
        """Warm gold #c8a84e"""
        return KronosColors.rgb(200, 168, 78, bg)

    @staticmethod
    def cream(bg=False):
        """Cream #f8f5f0"""
        return KronosColors.rgb(248, 245, 240, bg)

    @staticmethod
    def slate():
        """Slate #5a6470"""
        return KronosColors.rgb(90, 100, 112)

    @staticmethod
    def success():
        return KronosColors.rgb(45, 106, 79)

    @staticmethod
    def warning():
        return KronosColors.rgb(184, 134, 11)

    @staticmethod
    def danger():
        return KronosColors.rgb(139, 37, 0)


# ============================================================
# PROMPT & OUTPUT HELPERS
# ============================================================
def kronos_prompt(text, prompt_type="input"):
    icons = {
        "input":    f"{KronosColors.navy()}[►]{KronosColors.RESET}",
        "question": f"{KronosColors.gold()}[?]{KronosColors.RESET}",
        "info":     f"{KronosColors.slate()}[i]{KronosColors.RESET}",
        "success":  f"{KronosColors.success()}[✓]{KronosColors.RESET}",
        "warning":  f"{KronosColors.warning()}[!]{KronosColors.RESET}",
        "error":    f"{KronosColors.danger()}[✗]{KronosColors.RESET}",
        "search":   f"{KronosColors.gold()}[⌕]{KronosColors.RESET}",
    }
    icon = icons.get(prompt_type, icons["input"])
    return f"\n{icon} {KronosColors.WHITE}{text}"


def kronos_input(text, prompt_type="input"):
    prefix = kronos_prompt(text, prompt_type)
    return input(f"{prefix}{KronosColors.gold()}\n[#MR.KRONOS#]{KronosColors.RESET} --> ")


def kronos_print(text, level="info"):
    colors = {
        "info":    KronosColors.WHITE,
        "success": KronosColors.success(),
        "warning": KronosColors.warning(),
        "error":   KronosColors.danger(),
        "accent":  KronosColors.navy(),
        "gold":    KronosColors.gold(),
    }
    prefix_map = {
        "info":    f"{KronosColors.slate()}[i]{KronosColors.RESET} ",
        "success": f"{KronosColors.success()}[✓]{KronosColors.RESET} ",
        "warning": f"{KronosColors.warning()}[!]{KronosColors.RESET} ",
        "error":   f"{KronosColors.danger()}[✗]{KronosColors.RESET} ",
        "accent":  "",
        "gold":    "",
    }
    prefix = prefix_map.get(level, "")
    color = colors.get(level, KronosColors.WHITE)
    print(f"{prefix}{color}{text}{KronosColors.RESET}")


def kronos_section(title):
    width = 65
    line = "─" * ((width - len(title) - 4) // 2)
    print(f"\n{KronosColors.slate()}{line} {KronosColors.navy()}{title}{KronosColors.RESET} {KronosColors.slate()}{line}{KronosColors.RESET}")


def kronos_divider():
    print(f"{KronosColors.slate()}{'─' * 69}{KronosColors.RESET}")


# ============================================================
# BOX DRAWING
# ============================================================
BOX_STYLES = {
    "single":  ("─", "│", "┌", "┐", "└", "┘"),
    "rounded": ("─", "│", "╭", "╮", "╰", "╯"),
    "double":  ("═", "║", "╔", "╗", "╚", "╝"),
}


def draw_box(text, width=64, style="rounded"):
    h, v, tl, tr, bl, br = BOX_STYLES.get(style, BOX_STYLES["rounded"])
    c = KronosColors.navy()
    r = KronosColors.RESET
    lines = text.strip().split("\n")
    max_w = max(max(len(l) for l in lines), width - 4)
    result = f"{c}{tl}{h * (max_w + 2)}{tr}{r}\n"
    for line in lines:
        result += f"{c}{v}{r} {line.ljust(max_w)} {c}{v}{r}\n"
    result += f"{c}{bl}{h * (max_w + 2)}{br}{r}"
    return result


# ============================================================
# SPINNER
# ============================================================
class Spinner:
    FRAMES = ["⠋", "⠙", "⠹", "⠸", "⠼", "⠴", "⠦", "⠧", "⠇", "⠏"]

    def __init__(self, text="Working"):
        self.text = text
        self.running = False
        self._thread = None

    def _animate(self):
        i = 0
        while self.running:
            sys.stdout.write(f"\r{KronosColors.gold()}{self.FRAMES[i % len(self.FRAMES)]}{KronosColors.RESET} {self.text} ")
            sys.stdout.flush()
            time.sleep(0.08)
            i += 1

    def start(self):
        self.running = True
        self._thread = threading.Thread(target=self._animate, daemon=True)
        self._thread.start()

    def stop(self, message="Done"):
        self.running = False
        if self._thread:
            self._thread.join(timeout=0.3)
        sys.stdout.write(f"\r{KronosColors.success()}✓{KronosColors.RESET} {message}\n")
        sys.stdout.flush()


# ============================================================
# PROGRESS BAR
# ============================================================
def progress_bar(current, total, width=36, label=""):
    ratio = min(current / total, 1.0) if total > 0 else 0
    filled = int(width * ratio)
    bar = KronosColors.navy(bg=True) + " " * filled + KronosColors.RESET
    bar += KronosColors.GRAY + " " * (width - filled) + KronosColors.RESET
    return f"{label} {bar} {KronosColors.GRAY}{ratio*100:.0f}%{KronosColors.RESET}"


# ============================================================
# RESULT CARD
# ============================================================
def render_result_card(title, fields, status="found"):
    sc = {
        "found": KronosColors.success(),
        "notfound": KronosColors.warning(),
        "error": KronosColors.danger(),
        "info": KronosColors.navy(),
    }.get(status, KronosColors.WHITE)
    h, v, tl, tr, bl, br = BOX_STYLES["rounded"]

    print(f"\n{sc}{tl}{h * 48}{tr}{KronosColors.RESET}")
    print(f"{sc}{v}{KronosColors.RESET} {title}" + " " * (47 - len(title)) + f"{sc}{v}{KronosColors.RESET}")
    print(f"{sc}{v}{KronosColors.slate()}{'─' * 48}{KronosColors.RESET}{sc}{v}{KronosColors.RESET}")
    for key, value in fields.items():
        print(f"{sc}{v}{KronosColors.RESET}  {KronosColors.slate()}{key}:{KronosColors.RESET} {value}" + " " * max(44 - len(key) - len(str(value)), 0) + f"{sc}{v}{KronosColors.RESET}")
    print(f"{sc}{bl}{h * 48}{br}{KronosColors.RESET}\n")


# ============================================================
# KRONOS HEADER
# ============================================================
KRONOS_HEADER = r"""
    ██╗  ██╗██████╗  ██████╗ ███╗   ██╗ ██████╗ ███████╗
    ██║ ██╔╝██╔══██╗██╔═══██╗████╗  ██║██╔═══██╗██╔════╝
    █████╔╝ ██████╔╝██║   ██║██╔██╗ ██║██║   ██║███████╗
    ██╔═██╗ ██╔══██╗██║   ██║██║╚██╗██║██║   ██║╚════██║
    ██║  ██╗██║  ██║╚██████╔╝██║ ╚████║╚██████╔╝███████║
    ╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝ ╚══════╝
"""


def print_kronos_header():
    if USE_TRUECOLOR:
        lines = KRONOS_HEADER.strip("\n").split("\n")
        for line in lines:
            print(f"{KronosColors.navy()}{line}{KronosColors.RESET}")
    else:
        print(f"{KronosColors.BRIGHT_BLUE}{KRONOS_HEADER}{KronosColors.RESET}")
    print(f"{KronosColors.slate()}{'─' * 69}{KronosColors.RESET}")
    print(f"  {KronosColors.navy()}◆ THE COMPLETE OSINT FRAMEWORK ◆{KronosColors.RESET}")
    print(f"  {KronosColors.gold()}MR.KRONOS v3.0 — Premium Classic{KronosColors.RESET}")
    print(f"{KronosColors.slate()}{'─' * 69}{KronosColors.RESET}")


# ============================================================
# MENU RENDERER
# ============================================================
def render_menu(items, title="MAIN MENU"):
    print(f"\n{KronosColors.slate()}┌{'─' * 56}┐{KronosColors.RESET}")
    print(f"{KronosColors.slate()}│{KronosColors.RESET} {KronosColors.BOLD}{title}{KronosColors.RESET}" + " " * (55 - len(title)) + f"{KronosColors.slate()}│{KronosColors.RESET}")
    print(f"{KronosColors.slate()}│{KronosColors.RESET}{'─' * 56}{KronosColors.slate()}│{KronosColors.RESET}")
    for num, (icon, label, desc) in enumerate(items, 1):
        print(f"{KronosColors.slate()}│{KronosColors.RESET}  {KronosColors.gold()}[{num:02d}]{KronosColors.RESET} {icon} {label}" + " " * max(48 - len(label), 0) + f"{KronosColors.slate()}│{KronosColors.RESET}")
        if desc:
            print(f"{KronosColors.slate()}│{KronosColors.RESET}      {KronosColors.slate()}{desc}{KronosColors.RESET}" + " " * max(50 - len(desc), 0) + f"{KronosColors.slate()}│{KronosColors.RESET}")
    print(f"{KronosColors.slate()}└{'─' * 56}┘{KronosColors.RESET}")


# ============================================================
# EXPORT WRAPPER
# ============================================================
class Styler:
    Color = KronosColors()

    @staticmethod
    def box(text, style="rounded"):
        return draw_box(text, style=style)

    @staticmethod
    def prompt(text, ptype="input"):
        return kronos_input(text, ptype)

    @staticmethod
    def print(text, level="info"):
        kronos_print(text, level)

    @staticmethod
    def section(title):
        kronos_section(title)

    @staticmethod
    def header():
        print_kronos_header()

    @staticmethod
    def card(title, fields, status="found"):
        render_result_card(title, fields, status)

    @staticmethod
    def progress(current, total, label=""):
        return progress_bar(current, total, label=label)

    @staticmethod
    def spinner(text="Working"):
        return Spinner(text)


if __name__ == "__main__":
    print_kronos_header()
    print()
    kronos_print("Refined CLI system active. Navy & gold palette.", "accent")
    kronos_print("Premium classic terminal interface.", "gold")
    kronos_divider()

    menu_items = [
        ("👤", "Username Search", "Find usernames across 300+ platforms"),
        ("📱", "Phone Lookup",      "Carrier info, geolocation & fingerprint"),
        ("🌐", "Website Intel",     "WHOIS, DNS, subdomain enumeration"),
        ("⚙️", "Configuration",     "Proxy, API keys, tool preferences"),
    ]
    render_menu(menu_items, "INTELLIGENCE MODULES")

    render_result_card("Result: johndoe", {
        "Platform":   "Twitter",
        "Status":     "Found",
        "Profile":    "@johndoe",
        "Followers":  "1,234",
        "Joined":     "2021-03-15",
    }, "found")

    kronos_print("Ready. Enter your selection.", "info")
