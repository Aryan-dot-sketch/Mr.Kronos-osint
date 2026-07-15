<!--
╔══════════════════════════════════════════════════════════╗
║           MR.KRONOS — COMMAND CENTER                   ║
║           Premium Classic Design                        ║
╚══════════════════════════════════════════════════════════╝
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1a2744">
    <meta name="description" content="MR.KRONOS — Advanced OSINT Intelligence Command Center">
    <title>MR.KRONOS — Command Center</title>
    
    <link rel="stylesheet" href="../Css/Kronos/Core.css">
    <link rel="icon" href="../Icon/KronosFavicon.png" type="image/png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&family=Source+Code+Pro:wght@400;500;600&display=swap" rel="stylesheet">
    
    <?php
        require_once("../Actions/Language_Controller.php");
        require_once("../Actions/Theme_Controller.php");
        require_once("../Actions/Session_Checker.php");
        Total_Languages();
        $File_Name = "Style.css";
        Body_Theme($File_Name);
        Check_Session();
    ?>
    
    <style>
        .dashboard-wrapper {
            max-width: 1240px;
            margin: 0 auto;
            padding: var(--space-8) var(--space-8);
        }
        
        .hero-section {
            text-align: center;
            padding: var(--space-16) var(--space-8) var(--space-10);
            position: relative;
        }
        
        .hero-section .ornament-top {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--space-4);
            margin-bottom: var(--space-8);
        }
        
        .hero-section .ornament-top .rule {
            width: 60px;
            height: 1px;
            background: var(--kronos-gold);
        }
        
        .hero-section .ornament-top .dot {
            width: 6px;
            height: 6px;
            background: var(--kronos-navy);
            border-radius: 50%;
        }
        
        .hero-section h1 {
            font-family: var(--font-display);
            font-size: 2.6rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            color: var(--kronos-navy);
            margin-bottom: var(--space-4);
        }
        
        .hero-section .subtitle {
            font-family: var(--font-body);
            font-size: var(--text-lg);
            font-style: italic;
            color: var(--text-secondary);
            max-width: 620px;
            margin: 0 auto var(--space-3);
            line-height: 1.7;
        }
        
        .hero-section .accent-rule {
            width: 48px;
            height: 2px;
            background: var(--kronos-gold);
            margin: 0 auto var(--space-8);
        }
        
        .hero-section .stats-row {
            display: flex;
            justify-content: center;
            gap: var(--space-12);
            margin-top: var(--space-8);
        }
        
        .hero-section .stat-value {
            font-family: var(--font-display);
            font-size: 2.4rem;
            font-weight: 700;
            color: var(--kronos-navy);
            line-height: 1;
        }
        
        .hero-section .stat-label {
            font-family: var(--font-body);
            font-size: 0.6rem;
            color: var(--text-tertiary);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-top: var(--space-2);
        }
        
        .section-header {
            display: flex;
            align-items: center;
            gap: var(--space-5);
            margin: var(--space-8) 0 var(--space-6);
            padding: 0 var(--space-2);
        }
        
        .section-header h2 {
            font-family: var(--font-display);
            font-size: var(--text-xl);
            font-weight: 600;
            color: var(--kronos-navy);
            white-space: nowrap;
            letter-spacing: 0.04em;
        }
        
        .section-header .line {
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, rgba(26, 39, 68, 0.15), transparent);
        }
        
        .quick-actions {
            display: flex;
            justify-content: center;
            gap: var(--space-4);
            margin: var(--space-8) 0;
            flex-wrap: wrap;
        }
        
        .quick-actions .action-btn {
            display: flex;
            align-items: center;
            gap: var(--space-2);
            padding: var(--space-3) var(--space-6);
            background: transparent;
            border: 1px solid rgba(26, 39, 68, 0.12);
            color: var(--text-secondary);
            font-family: var(--font-body);
            font-size: 0.7rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all var(--transition-fast);
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }
        
        .quick-actions .action-btn:hover {
            color: var(--kronos-navy);
            border-color: var(--kronos-navy);
            background: rgba(26, 39, 68, 0.02);
        }
        
        @media (max-width: 600px) {
            .hero-section h1 { font-size: 1.8rem; }
            .hero-section .stats-row { gap: var(--space-6); }
            .hero-section .stat-value { font-size: 1.6rem; }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="Top-bar" id="topbar">
        <p style="font-size:1rem;">MR.KRONOS</p>
        <div style="display:flex;align-items:center;gap:var(--space-6);">
            <a href="Main.php" class="active">Dashboard</a>
            <div class="languages">
                <button id="Current" onclick="toggleLangDropdown()">EN</button>
                <div class="Content" id="LangDropdown">
                    <?php 
                        require_once("../Actions/Language_Controller.php");
                        $Modality = "_Login()";
                        List_Languages($Modality);
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="dashboard-wrapper">
        <!-- Hero -->
        <div class="hero-section">
            <div class="ornament-top">
                <div class="rule"></div>
                <div class="dot"></div>
                <div class="rule" style="width:30px;"></div>
                <div class="dot" style="width:4px;height:4px;"></div>
                <div class="rule"></div>
            </div>
            
            <?php Image(); ?>
            
            <h1>Command Center</h1>
            <div class="accent-rule"></div>
            <p class="subtitle">Your unified OSINT intelligence dashboard. Execute investigations, manage data, and generate reports — all from one refined interface.</p>
            
            <div class="stats-row">
                <div class="stat-item"><div class="stat-value">300+</div><div class="stat-label">Platforms</div></div>
                <div class="stat-item"><div class="stat-value">15</div><div class="stat-label">Modules</div></div>
                <div class="stat-item"><div class="stat-value">3.0</div><div class="stat-label">Version</div></div>
                <div class="stat-item"><div class="stat-value">24/7</div><div class="stat-label">Active</div></div>
            </div>
        </div>
        
        <!-- Intelligence Modules -->
        <div class="section-header">
            <h2>Intelligence Modules</h2>
            <div class="line"></div>
        </div>
        
        <?php Cards(); ?>
        
        <!-- Quick Actions -->
        <div class="section-header">
            <h2>Tools &amp; Utilities</h2>
            <div class="line"></div>
        </div>
        
        <div class="quick-actions">
            <a href="Username.php" class="action-btn">Quick Search</a>
            <a href="Schema.php" class="action-btn">Graph View</a>
            <a href="Map.php" class="action-btn">Map View</a>
            <a href="New_User.php" class="action-btn">Add User</a>
            <a href="Email.php" class="action-btn">Email Intel</a>
            <a href="Ports.php" class="action-btn">Port Scanner</a>
        </div>
        
        <!-- Partnerships -->
        <?php Image2(); ?>
        
        <!-- Arrow -->
        <a href="#topbar"><div id="Arrow"></div></a>
        
        <!-- Footer -->
        <div class="Footer">
            <img src="../Icon/Base/KronosLogo.svg.png" alt="Kronos" style="height:32px;">
            <p style="margin-top:var(--space-3);color:var(--text-tertiary);font-size:0.65rem;font-family:var(--font-body);letter-spacing:0.04em;">
                MR.KRONOS <span style="color:var(--kronos-navy);font-weight:600;">v3.0</span> &nbsp;&mdash;&nbsp; 
                OSINT Intelligence Framework &nbsp;&mdash;&nbsp; 
                &copy; 2026
            </p>
        </div>
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
        
        window.addEventListener('scroll', function() {
            const bar = document.getElementById('topbar');
            if (window.scrollY > 20) bar.classList.add('scrolled');
            else bar.classList.remove('scrolled');
        });
    </script>
</body>
</html>
