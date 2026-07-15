<?php
/*
 * ╔══════════════════════════════════════════════════════════╗
 * ║           MR.KRONOS — THEME CONTROLLER v3.0            ║
 * ╚══════════════════════════════════════════════════════════╝
 */

function Body_Theme($File_Name) {
    /* Always load the new Kronos Core design system */
    echo '<link rel="stylesheet" href="../Css/Kronos/Core.css">' . "\n";
    
    /* Load page-specific CSS if exists */
    $page_css = "../Css/Kronos/" . $File_Name;
    if (file_exists($page_css)) {
        echo '<link rel="stylesheet" href="' . $page_css . '">' . "\n";
    }
    
    /* Load legacy theme override from Mode.json if present for backward compat */
    $mode_file = "../Theme/Mode.json";
    if (file_exists($mode_file)) {
        $reader = file_get_contents($mode_file);
        $parser = json_decode($reader, true);
        $color = $parser["Color"]["Background"];
        $legacy_css = "../Css/$color/$File_Name";
        if (file_exists($legacy_css) && $color !== "Kronos") {
            echo '<link rel="stylesheet" href="' . $legacy_css . '">' . "\n";
        }
    }
}

function KronosLogo() {
    echo '
    <div class="Upper-card">
        <img src="../Icon/Base/KronosLogo.svg.png" alt="MR.KRONOS Logo" 
             style="max-width:160px; filter:drop-shadow(0 0 30px rgba(0,212,255,0.4));">
    </div>';
}

function Image() {
    KronosLogo();
}

function Cards() {
    $icons = [
        ['id' => 'Username', 'icon' => 'icon-username', 'label' => 'USERNAME', 'desc' => 'Search usernames across platforms', 'href' => 'Username.php', 'btn' => 'Search', 'class' => 'card-username'],
        ['id' => 'Website', 'icon' => 'icon-website', 'label' => 'WEBSITE', 'desc' => 'Domain intelligence & WHOIS', 'href' => 'Websites.php', 'btn' => 'Search', 'class' => 'card-website'],
        ['id' => 'Phone', 'icon' => 'icon-phone', 'label' => 'PHONE', 'desc' => 'Phone number lookup & analysis', 'href' => 'Phone.php', 'btn' => 'Search', 'class' => 'card-phone'],
        ['id' => 'Ports', 'icon' => 'icon-ports', 'label' => 'PORTS', 'desc' => 'Port scanning & enumeration', 'href' => 'Ports.php', 'btn' => 'Search', 'class' => 'card-ports'],
        ['id' => 'Email', 'icon' => 'icon-email', 'label' => 'EMAIL', 'desc' => 'Email reconnaissance & breach check', 'href' => 'Email.php', 'btn' => 'Search', 'class' => 'card-username'],
        ['id' => 'User', 'icon' => 'icon-shield', 'label' => 'CREATE USER', 'desc' => 'Add new user credentials', 'href' => 'New_User.php', 'btn' => 'Create', 'class' => 'card-website'],
        ['id' => 'Graph', 'icon' => 'icon-graph', 'label' => 'GRAPH', 'desc' => 'Data visualization & schemas', 'href' => 'Schema.php', 'btn' => 'Create', 'class' => 'card-phone'],
        ['id' => 'Map', 'icon' => 'icon-map', 'label' => 'MAP', 'desc' => 'Geolocation intelligence', 'href' => 'Map.php', 'btn' => 'Open', 'class' => 'card-ports'],
        ['id' => 'People', 'icon' => 'icon-people', 'label' => 'PEOPLE', 'desc' => 'Person search & profiling', 'href' => 'People.php', 'btn' => 'Search', 'class' => 'card-username'],
        ['id' => 'Author', 'icon' => 'icon-author', 'label' => 'AUTHOR', 'desc' => 'About Mr.Kronos', 'href' => 'New_User.php', 'btn' => 'Show', 'class' => 'card-website'],
    ];
    
    echo '<div class="Cards">';
    foreach ($icons as $item) {
        echo '
        <div class="card-item ' . $item['class'] . '" onclick="location.href=\'' . $item['href'] . '\'">
            <div class="card-icon">
                <svg><use href="../Assets/Svg/icons.svg#' . $item['icon'] . '"/></svg>
            </div>
            <p>' . $item['label'] . '</p>
            <div class="card-desc">' . $item['desc'] . '</div>
            <a href="' . $item['href'] . '" class="btn btn-primary btn-sm">' . $item['btn'] . '</a>
        </div>';
    }
    echo '</div>';
}

function Image2() {
    // Partnerships - modernized
    $Folder = "../Icon/Base/Companies/";
    if (!is_dir($Folder)) return;
    $images = glob($Folder . "*.png");
    if (empty($images)) return;
    
    echo '<center><div class="part"><p>PARTNERSHIPS</p>';
    foreach ($images as $pic) {
        $name = str_replace(".png", "", $pic);
        $name2 = str_replace($Folder, "", $name);
        echo '<img src="' . $pic . '" abbr title="' . $name2 . '" alt="' . $name2 . '">';
    }
    echo '</div></center>';
}
?>
