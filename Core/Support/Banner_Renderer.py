#!/usr/bin/env python3
# ╔══════════════════════════════════════════════════════════╗
# ║           MR.KRONOS — BANNER GENERATOR v3.0            ║
# ║           Premium Classic Style                         ║
# ╚══════════════════════════════════════════════════════════╝

"""Module banner renderer for all Kronos modules"""

from Core.Support import Font


BANNERS = {
    "main": """
    ╔══════════════════════════════════════════════════════════════╗
    ║                                                              ║
    ║    ██╗  ██╗██████╗  ██████╗ ███╗   ██╗ ██████╗ ███████╗   ║
    ║    ██║ ██╔╝██╔══██╗██╔═══██╗████╗  ██║██╔═══██╗██╔════╝   ║
    ║    █████╔╝ ██████╔╝██║   ██║██╔██╗ ██║██║   ██║███████╗   ║
    ║    ██╔═██╗ ██╔══██╗██║   ██║██║╚██╗██║██║   ██║╚════██║   ║
    ║    ██║  ██╗██║  ██║╚██████╔╝██║ ╚████║╚██████╔╝███████║   ║
    ║    ╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝ ╚══════╝   ║
    ║                                                              ║
    ║              ◆ THE COMPLETE OSINT FRAMEWORK ◆               ║
    ║                    MR.KRONOS v3.0                            ║
    ╚══════════════════════════════════════════════════════════════╝
    """,

    "username":   "  ◆ USERNAME INTELLIGENCE — Scan 300+ platforms",
    "phone":      "  ◆ PHONE NUMBER ANALYSIS — Carrier & geolocation",
    "website":    "  ◆ WEBSITE INTELLIGENCE — WHOIS, DNS, subdomains",
    "email":      "  ◆ EMAIL RECONNAISSANCE — Breach check & validation",
    "ports":      "  ◆ PORT SCANNER — TCP/UDP enumeration",
    "dorks":      "  ◆ GOOGLE DORKS ENGINE — Advanced search queries",
    "people":     "  ◆ PEOPLE SEARCH — Public records & profiles",
    "decode":     "  ◆ STRING DECODER — Base64, Hex, URL analysis",
    "pdf":        "  ◆ PDF REPORT GENERATOR — Professional reports",
    "transfer":   "  ◆ SECURE FILE TRANSFER — Encrypted sharing",
    "session":    "  ◆ SESSION MANAGEMENT — Save & restore",
    "config":     "  ◆ CONFIGURATION — Proxy, API, preferences",
}


def render_banner(module="main", mode="Desktop"):
    banner = BANNERS.get(module, BANNERS["main"])
    if module == "main":
        print(f"{Font.Color.navy()}{banner}{Font.Color.RESET}")
    else:
        print(f"\n{Font.Color.slate()}{'─' * 60}{Font.Color.RESET}")
        print(f"{Font.Color.navy()}{banner}{Font.Color.RESET}")
        print(f"{Font.Color.slate()}{'─' * 60}{Font.Color.RESET}\n")


def print_module_header(name, desc=""):
    print(f"\n{Font.Color.slate()}┌{'─' * 52}┐{Font.Color.RESET}")
    print(f"{Font.Color.slate()}│{Font.Color.RESET} {Font.Color.BOLD}{name}{Font.Color.RESET}" + " " * (51 - len(name)) + f"{Font.Color.slate()}│{Font.Color.RESET}")
    if desc:
        print(f"{Font.Color.slate()}│{Font.Color.RESET} {Font.Color.GRAY}{desc}{Font.Color.RESET}" + " " * max(51 - len(desc), 0) + f"{Font.Color.slate()}│{Font.Color.RESET}")
    print(f"{Font.Color.slate()}└{'─' * 52}┘{Font.Color.RESET}\n")
