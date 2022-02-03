<?php
function styleTitrePost($text){
    $txt = "<h2 class='my-3 perso_policeTitre perso_textShadow border-bottom border-dark'>";
    $txt .= $text;
    $txt .= "</h2>";
    return $txt;
}

function afficherAlert($text, $type){
    $alertType = "";
    if($type === ALERT_SUCCESS) $alertType = "success";
    if($type === ALERT_DANGER) $alertType = "danger";
    if($type === ALERT_INFO) $alertType = "info";
    if($type === ALERT_WARNING) $alertType = "warning";
    $txt = '<div class="alert alert-'.$alertType.' m-2" role="alert">';
    $txt .= $text; 
    $txt .= '</div>';
    return $txt;
}
?>