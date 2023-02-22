<?php 
    include "global.php";
    include "model/connect.php";
    include "model/catalog.php";
    include "model/product.php";
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
              if(isset($_GET['del']) && ($_GET['del']>0)){
                $id=$_GET['del'];
                $sp=new Product;
                $sp->Deleteproduct($id);
              }
              
              if(isset($_POST['themsp']) && $_POST['themsp']){
                $tensanpham=$_POST['product_name'];
                $price=$_POST['price'];
                $mathang =$_POST['catalog_id'];
                $mota=$_POST['descript'];
                $soluong = $_POST['amount'];
                $image=$_FILES['product_image']['name'];
                if($image!=""){
                  $sp = new Product();
                  $sp1 = $sp->getlast();
                  $sp1 = $sp1['id'] + 1; 
                  $rand=rand(0,999999);
                  $tach=explode(".",$image);
                  $image=$sp1.$rand.$tach[0].".".$tach[1]; 
                  $target=$linkprod.$image; 
                  move_uploaded_file($_FILES['product_image']['tmp_name'],$target);
                }
                $sp = new Product();
                $sp->Addproduct($tensanpham,$image,$price,$mota,$mathang,$soluong);
              }
      
                $prod = new Product();
                $dssp = $prod->getall_product();
              
                include "admin/qlsp.php";
                break;
            
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