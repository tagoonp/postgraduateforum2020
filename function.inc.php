<?php

function get_configuration($conn, $position, $lang, $domain){
    // include "../config.class.php";
    $strSQL = "SELECT * FROM wwt_configuration WHERE conf_key = '$position' AND conf_lang = '$lang' AND conf_use = '1' AND conf_domain = '$domain' LIMIT 1";
    $query = mysqli_query($conn, $strSQL);
    if($query){
      $row = mysqli_fetch_assoc($query);
      return $row['conf_value'];
    }else{
     return  $strSQL;
    }
    mysqli_close($conn);
    die();
}

function add_class_active($ref_type, $ref){
    if($ref_type == 'main-menu'){
        $pagename = basename($_SERVER['PHP_SELF']);
        $b = explode('.', $pagename);
        if($ref == 'index.php'){
            if(($b[0] == '') || ($b[0] == 'index')){
                echo "menu-active";
                // die();
            }
        }else if($ref == 'page'){
        if(($b[0] == 'modules-page-list') || ($b[0] == 'modules-page-new') || ($b[0] == 'modules-page-tags') || ($b[0] == 'modules-page-group')){
            echo "active";
        }
        }else if($ref == 'post'){
        if(($b[0] == 'modules-post-list') || ($b[0] == 'modules-post-new') || ($b[0] == 'modules-post-category')){
            echo "active";
        }
        }else if($ref == 'stat'){
        if(($b[0] == 'modules-stat-overview') || ($b[0] == 'modules-stat-hits') || ($b[0] == 'modules-stat-pageandpost') || ($b[0] == 'modules-stat-access-location')){
            echo "active";
        }
        }
        else if($ref == 'subdomain'){
        if(($b[0] == 'modules-subdomain-list') || ($b[0] == 'modules-subdomain-add')){
            echo "active";
        }
        }
        else if($ref == 'person'){
        if(($b[0] == 'modules-person-list') || ($b[0] == 'modules-person-group')){
            echo "active";
        }
        }
        else if($ref == 'publication'){
        if(($b[0] == 'modules-publication-list')){
            echo "active";
        }
        }
        else if($ref == 'alumni'){
        if(($b[0] == 'modules-alumni-list') || ($b[0] == 'modules-alumni-group')){
            echo "active";
        }
        }
        else if($ref == 'album'){
        if(($b[0] == 'modules-album-list') || ($b[0] == 'modules-album-new')){
            echo "active";
        }
        }
    }else{
        $pagename = basename($_SERVER['PHP_SELF']);
        $b = explode('.', $pagename);
        if(sizeof($b) > 0){
        if($b[0] == $ref){
            echo "active";
        }
        }else{
        if($b[0] == $ref){
            echo "active";
        }
        }
    }
}

?>