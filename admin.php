<?php 
    include "global.php";
    include "model/connect.php";
    include "model/catalog.php";
    // include "model/product.php";


    
    include "admin/header.php";
    include "admin/sidebar.php";
    if(isset($_GET['act']) && $_GET['act']!=""){
        $act=$_GET['act'];
        switch ($act) {
          case 'qldm':
            if(isset($_GET['del']) && ($_GET['del']>0)){
              $id=$_GET['del'];
              $dm=new Catalog();
              $dm->deletecata($id);
            }
            if(isset($_POST['them'])&&$_POST['them']){
              $name=$_POST['catalog_name'];
              $stt= $_POST['stt'];
              
              $dm = new Catalog();
              $dm->addcata($name,$stt);
            }
            $cata=new Catalog();  
            $dsdm=$cata->getall_catalog();
            include "admin/qldm.php";
            break;
          case 'updatedm':
            if(isset($_GET['edit']) && ($_GET['edit']>0)){
              $id=$_GET['edit'];
              $dm= new Catalog();
              $dmone = $dm->getone_catalog($id);
              
              $cata=new Catalog();
              $dsdm=$cata->getall_catalog();
            
            include "admin/updatedm.php";
            
            }
            if(isset($_POST['edit'])&& $_POST['edit']){
              $id=$_POST['id'];
              $name=$_POST['catalog_name'];
              $stt=$_POST['stt'];
              $dm = new Catalog();
              $dm->editcata($name,$stt,$id);
             
              $cata=new Catalog();
              $dsdm=$cata->getall_catalog();
            
            include "admin/qldm.php";
            }
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