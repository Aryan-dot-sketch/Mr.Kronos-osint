<p align="center">
  <img width="650px" height="100px" src="Icon/Banner.png">
</p>

<p align="center">
  <img src="https://img.shields.io/github/stars/aryanhubhaimai/Mr.Kronos-OSINT">
  <img src="https://img.shields.io/github/forks/aryanhubhaimai/Mr.Kronos-OSINT">
  <img src="https://img.shields.io/badge/Maintained%3F-yes-green.svg">
  <img src="https://img.shields.io/github/license/aryanhubhaimai/Mr.Kronos-OSINT">
  <img src="https://img.shields.io/github/repo-size/aryanhubhaimai/Mr.Kronos-OSINT">
  <img src="https://img.shields.io/github/languages/count/aryanhubhaimai/Mr.Kronos-OSINT">
  <img src="https://visitor-badge.laobi.icu/badge?page_id=aryanhubhaimai.Mr.Kronos-OSINT">
</p>

# 🔮 Mr.Kronos v3.0 — The Complete OSINT Framework

**Mr.Kronos is an advanced information gathering tool (OSINT) with a fully redesigned UI/UX. The main purpose is to gain intelligence about domains, usernames and phone numbers using public sources on the internet. It leverages Google Dorks for targeted research, proxies for anonymous requests, and a WHOIS API for deep domain intelligence.**

<br>

## ✨ What's New in v3.0 (Kronos Design System)

- 🎨 **Complete UI/UX Overhaul** — 8x improvement with a premium classic aesthetic
- 🖥️ **Kronos Core CSS** — Unified modern design system with Navy + Gold + Cream palette
- 🎯 **SVG Icon Library** — Vector icons replacing all PNGs for crisp rendering at any size
- 🌈 **True-Color CLI** — 24-bit color terminal with styled prompts and result cards
- 📊 **Enhanced Dashboard** — Responsive card-based layout with smooth transitions
- 🎪 **Premium Typography** — Playfair Display + Lora serif typeface pairing
- 🛡️ **Strong Kronos Branding** — Cohesive visual identity across all surfaces
- 🇮🇳 **Made in India by Aryan** — Fully rebranded with complete ownership

<br>

# 📸 SCREENSHOTS

## 🔐 Login Portal
![Login](Screenshot/Kronos_Login_Page.png)

## 📊 Command Center Dashboard
![Dashboard](Screenshot/Kronos_Dashboard.png)

## 🔍 Intelligence Results
![Results](Screenshot/Kronos_Results_Page.png)

## 🖥️ CLI Terminal
![CLI](Screenshot/Kronos_CLI_Terminal.png)

<br>

# ⚠️ DISCLAIMER
**This Tool is Not 100% Accurate so it can fail sometimes. Also this tool is made for educational and research purposes only, I do not assume any kind of responsibility for any improper use of this tool.**

<br>

# ✅ INSTALLATION LINUX/MAC:
```bash
git clone https://github.com/aryanhubhaimai/Mr.Kronos-OSINT
cd Mr.Kronos-OSINT
sudo apt-get update
sudo chmod +x install.sh
sudo bash install.sh
```
<br>

# ✅ INSTALLATION LINUX/MAC (Venv Environment):
**If you encounter errors in Python library installation, use this method:**
```bash
git clone https://github.com/aryanhubhaimai/Mr.Kronos-OSINT
sudo apt-get update
cd Mr.Kronos-OSINT
python3 -m venv .lib_venv
sudo chmod +x install.sh
sudo bash install.sh
source .lib_venv/bin/activate
pip3 install -r requirements.txt
python3 MrKronos.py
```
<br>

# ✅ INSTALLATION WINDOWS (1st WAY)
**If you have git installed on your Windows machine:**
```cmd
git clone https://github.com/aryanhubhaimai/Mr.Kronos-OSINT
cd Mr.Kronos-OSINT
Install.cmd
```
<br>

# ✅ INSTALLATION WINDOWS (2nd WAY):
**If you download the zip file of Mr.Kronos, unzip it first then:**
```cmd
ren Mr.Kronos-OSINT-master Mr.Kronos-OSINT
cd Mr.Kronos-OSINT
Install.cmd
```
<br>

# ✅ INSTALLATION TERMUX:
```bash
pkg install proot
git clone https://github.com/aryanhubhaimai/Mr.Kronos-OSINT
cd Mr.Kronos-OSINT
proot -0 chmod +x install_Termux.sh
./install_Termux.sh
```
<br>

# 🚀 USAGE LINUX/MAC:
    cd Mr.Kronos-OSINT
    sudo python3 MrKronos.py
    OR:
    cd Mr.Kronos-OSINT
    cd Launchers
    Execute Launcher.sh

<br>
    
# 🚀 USAGE LINUX/MAC (Venv Environment):
    cd Mr.Kronos-OSINT
    source .lib_venv/bin/activate
    python3 MrKronos.py

<br>

# 🚀 USAGE TERMUX/WINDOWS:
    python3 MrKronos.py
<br>

# 🚀 USAGE WINDOWS:
    python MrKronos.py
    OR
    cd Launchers
    Execute Win_Launcher.exe

<br>

# 🔑 API KEY LINK:
    https://whois.whoisxmlapi.com
<br>

# ⚙️ SETTINGS FOLDER:
    Configuration/Configuration.ini
<br>

# ⚠️ ATTENTION
**DATABASE NOT AVAILABLE ON TERMUX**
<br>

# ⚠️ ATTENTION ON WINDOWS
**IF PYTHON AND PHP WON'T INSTALL YOU HAVE TO DOWNLOAD THEM MANUALLY:**
    
<br>

# 📋 VERSIONS LIST:
    https://mrkronos.github.io/Mr.Kronos/Pages/versions.html
<br>

# ✅ GUI THEME MODE:
```bash
cd GUI
cd Theme
edit Mode.json
write:Light=(Light-Mode)
write:Dark=(Dark-Mode) 
write:High-Contrast=(High-Contrast-Mode)
write:Kronos=(Kronos Design System v3.0) 
```
<br>

# ✅ Mode.json CODE EXAMPLE:
```json
{
    "Color": {
        "Background": "Kronos"
    }
}
```
<br>

# ✅ GUI/USERNAME/PASSWORD:
```bash
cd GUI
cd Credentials
edit Login.json
write:Status=Active/Deactive
edit Users.json
write:Username=Your Username
write:Password=Your Password
```
<br>

# ✅ Login.json CODE EXAMPLE:
```json    
{
    "Database": {
        "Status": "Active"
    }
}
```
<br>

# ✅ Users.json CODE EXAMPLE
```json
{
    "Users":[
        {
            "Username": "Your Username",
            "Password": "Your Password"
        }
    ]
}
```
<br>

# ✅ LANGUAGE SETTINGS:
```bash
cd GUI
cd Language
edit Language.json
```
<br>

# ✅ Language.json CODE EXAMPLE:
```json
{
    "Language": {
        "Preference": "English"
    }
}
```
<br>

# 🔐 DEFAULT USERNAME AND PASSWORD:
    Username: Admin
    Password: Qwerty123

<br>

# 🌍 AVAILABLE LANGUAGES:
    Italiano 🇮🇹 
    English 🏴󠁧󠁢󠁥󠁮󠁧󠁿
    Français 🇫🇷

<br>

# 📌 CURRENT VERSION:
## T.G.D-1.0.4 (Kronos Design System 3.0)

<br>

# 🗺️ INTERACTIVE MAP HAS BEEN MADE WITH:
**Leaflet: https://leafletjs.com**

<br>

# 🎨 USERNAME ENTITIES:
**The Icons in Folder: /GUI/Icon/Entities/Site_Icon have been taken from: https://www.iconfinder.com/ — all credit goes to their respective creators**

<br>

# 🔐 ENCODING:
**With this version it is Possible to Encode your reports**

<br>

# 🔓 DECODING:
**With this version it is Possible to Decode your reports**

<br>

# 🧠 HYPOTHESIS
**This version Permits generating "Hypotheses" on subjects based on their numbers on various social media including possible hobbies/interests (May not be 100% reliable)**

<br>

# 📧 EMAIL-LOOKUP:
**With this version it is possible to check if an email is connected to specific socials/services without letting the target know.**

<br>

# 📊 GRAPHS:
**This version adds the possibility to create Graphs for information scheduling.**

<br>

# 🗺️ MAPS:
**This version adds the possibility to create Interactive Maps.**

<br>

# 🔍 DORKS:
**This version allows searching Video/Sound/Images via Dorks and performing specific research with date ranges.**

<br>

# 📄 PDF:
**This version adds the possibility to convert your Graphs to PDF.**

<br>

# 🎨 AVAILABLE PDF-THEMES:
    Light 🌕
    Dark 🌗
    High-Contrast 🌗
    Kronos 🔮

<br>

# 📡 FILE-TRANSFER:
**With this version it is Possible to Transfer your reports directly to Your Phone via QR-Code**

<br>

# 🔮 KRONOS DESIGN SYSTEM (v3.0):
**The all-new Kronos theme features a premium classic aesthetic with deep navy, warm gold, and cream tones. Set `"Background": "Kronos"` in Mode.json to activate.**

<hr>
<br>


## <p align="center">⭐ STARGAZERS OVER TIME 

[![Stargazers over time](https://starchart.cc/aryanhubhaimai/Mr.Kronos-OSINT.svg)](https://starchart.cc/aryanhubhaimai/Mr.Kronos-OSINT)

<br>

## <p align="center">MADE WITH ❤️ BY ARYAN IN 🇮🇳</p>

## <p align="center">ORIGINAL CREATOR: <a href="https://github.com/aryanhubhaimai">ARYAN</a></p>

## <p align="center">LICENSE: GPL-3.0 License <br>COPYRIGHT: © 2021-2026 Aryan</p>
