<?php 
    include "admin/header.php";
    include "admin/sidebar.php";
    if(isset($_GET['act']) && $_GET['act']!=""){
        $act=$_GET['act'];
        switch ($act) {
          case 'qldm':
            include "admin/qldm.php";
            break;
          case 'qlsp':
            include "admin/qlsp.php";
          default:
        include "admin/home.php";
        break;
    
        }
    }
        else
        {
            include "admin/home.php";
        }
    include "admin/footer.php";
?>