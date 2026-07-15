<!--
╔══════════════════════════════════════════════════════════╗
║           MR.KRONOS — AUTHENTICATION PORTAL            ║
║           Premium Classic Design                        ║
╚══════════════════════════════════════════════════════════╝
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1a2744">
    <meta name="description" content="MR.KRONOS — Advanced OSINT Intelligence Framework">
    <title>MR.KRONOS — Authentication</title>
    
    <link rel="stylesheet" href="../Css/Kronos/Core.css">
    <link rel="icon" href="../Icon/KronosFavicon.png" type="image/png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&family=Source+Code+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    
    <?php
        require_once("../Actions/Language_Controller.php");
        Total_Languages();
        require_once("../Actions/Theme_Controller.php");
        $File_Name = "Login.css";
        Body_Theme($File_Name);
        $Modality = "Login";
        Get_Language($Modality);
    ?>
    
    <style>
        .login-bg {
            position: fixed;
            inset: 0;
            z-index: 0;
            background-color: #f8f5f0;
            background-image:
                linear-gradient(rgba(26, 39, 68, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(26, 39, 68, 0.03) 1px, transparent 1px);
            background-size: 80px 80px;
        }
        
        .login-wrapper {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: var(--space-8);
        }
        
        .brand-topline {
            display: flex;
            align-items: center;
            gap: var(--space-4);
            margin-bottom: var(--space-8);
        }
        
        .brand-topline .rule {
            width: 48px;
            height: 1px;
            background: var(--kronos-gold);
        }
        
        .brand-topline .diamond {
            width: 8px;
            height: 8px;
            background: var(--kronos-navy);
            transform: rotate(45deg);
        }
        
        .login-card {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border: 1px solid rgba(26, 39, 68, 0.06);
            border-radius: var(--radius-md);
            padding: var(--space-12) var(--space-10);
            box-shadow: 0 4px 32px rgba(26, 39, 68, 0.05);
            animation: fadeSlideUp 0.5s ease;
        }
        
        .login-card .login-header {
            text-align: center;
            margin-bottom: var(--space-10);
        }
        
        .login-card .login-header .monogram {
            width: 72px;
            height: 72px;
            margin: 0 auto var(--space-5);
            border: 2px solid var(--kronos-gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-size: 2rem;
            font-weight: 700;
            color: var(--kronos-navy);
            transition: all var(--transition-base);
            letter-spacing: 0;
        }
        
        .login-card .login-header h1 {
            font-family: var(--font-display);
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            color: var(--kronos-navy);
            margin-bottom: var(--space-2);
        }
        
        .login-card .login-header .tagline {
            color: var(--text-secondary);
            font-size: var(--text-sm);
            font-style: italic;
            font-family: var(--font-body);
        }
        
        .login-card .accent-rule {
            width: 40px;
            height: 2px;
            background: var(--kronos-gold);
            margin: var(--space-4) auto;
        }
        
        .login-card form {
            display: flex;
            flex-direction: column;
            gap: var(--space-6);
        }
        
        .login-card .field-row {
            display: flex;
            flex-direction: column;
            gap: var(--space-2);
        }
        
        .login-card .field-row label {
            font-family: var(--font-body);
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-secondary);
        }
        
        .login-card .field-row input {
            width: 100%;
            padding: 14px var(--space-4);
            background: #faf9f7;
            border: 1px solid rgba(26, 39, 68, 0.1);
            border-radius: var(--radius-xs);
            color: var(--text-primary);
            font-size: 0.9rem;
            font-family: var(--font-body);
            transition: all var(--transition-fast);
        }
        
        .login-card .field-row input:focus {
            border-color: var(--kronos-navy);
            box-shadow: 0 0 0 2px rgba(26, 39, 68, 0.05);
            outline: none;
            background: #fff;
        }
        
        .login-card .field-row input::placeholder {
            color: var(--text-tertiary);
            font-style: italic;
        }
        
        .login-card button[type="submit"] {
            width: 100%;
            padding: 15px;
            background: var(--kronos-navy);
            color: #f8f5f0;
            font-family: var(--font-body);
            font-weight: 700;
            font-size: 0.75rem;
            border: 2px solid var(--kronos-navy);
            cursor: pointer;
            transition: all var(--transition-fast);
            text-transform: uppercase;
            letter-spacing: 0.14em;
            margin-top: var(--space-3);
        }
        
        .login-card button[type="submit"]:hover {
            background: var(--kronos-navy-light);
            border-color: var(--kronos-navy-light);
        }
        
        .footer-credit {
            position: fixed;
            bottom: var(--space-6);
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
            font-size: 0.65rem;
            color: var(--text-tertiary);
            text-align: center;
            font-family: var(--font-body);
            letter-spacing: 0.04em;
        }
        
        .footer-credit span {
            color: var(--kronos-navy);
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="login-bg"></div>
    
    <!-- Top Brand Bar -->
    <div class="Top-bar" style="position:fixed; background:rgba(255,255,255,0.95);">
        <p style="font-size:1rem;">MR.KRONOS</p>
        <div class="languages">
            <button id="Current" onclick="toggleLangDropdown()">
                English
            </button>
            <div class="Content" id="LangDropdown">
                <?php 
                    require_once("../Actions/Language_Controller.php");
                    $Modality = "_Login()";
                    List_Languages($Modality);
                ?>
            </div>
        </div>
    </div>
    
    <!-- Login Form -->
    <div class="login-wrapper">
        <div class="brand-topline">
            <div class="rule"></div>
            <div class="diamond"></div>
            <div class="rule" style="width:24px;"></div>
            <div class="diamond" style="width:5px;height:5px;"></div>
            <div class="rule"></div>
        </div>
        
        <div class="login-card">
            <div class="login-header">
                <div class="monogram">K</div>
                <h1>MR.KRONOS</h1>
                <div class="accent-rule"></div>
                <p class="tagline">Advanced OSINT Intelligence Framework</p>
            </div>
            
            <form action="../Actions/Credentials_Controller.php" method="POST">
                <div class="field-row">
                    <label for="username">Username</label>
                    <input type="text" 
                           id="username" 
                           name="username" 
                           placeholder="Enter your username"
                           autocomplete="off"
                           required>
                </div>
                
                <div class="field-row">
                    <label for="password">Password</label>
                    <input type="password" 
                           id="password" 
                           name="password" 
                           placeholder="Enter your password"
                           required>
                </div>
                
                <button type="submit" name="Button">
                    Authenticate
                </button>
            </form>
        </div>
    </div>
    
    <div class="footer-credit">
        MR.KRONOS <span>v3.0</span> &nbsp;—&nbsp; OSINT Framework &nbsp;—&nbsp; &copy; 2026
    </div>
    
    <script>
        function toggleLangDropdown() {
            document.getElementById('LangDropdown').classList.toggle('active');
        }
        
        document.addEventListener('click', function(e) {
            const dd = document.getElementById('LangDropdown');
            const btn = document.getElementById('Current');
            if (!btn.contains(e.target) && !dd.contains(e.target)) {
                dd.classList.remove('active');
            }
        });
    </script>
</body>
</html>
