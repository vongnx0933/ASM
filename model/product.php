<?php
class Product extends connect{
    function getall_product(){
        $sql="select * from products order by id desc";
        $kq=parent::getall($sql);
        return $kq;
    }
    function getall_product_cate($id,$kyw){
        $sql="select * from products where 1";
        if($id>0){
            $sql.=" and idcata='".$id."'"; 
        } 
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'"; 
        }
        $sql.=" order by id desc";
        $kq=parent::getall($sql);
        return $kq;
    }
    function getone_product($id){
        $sql="select * from products where 1";
        if($id>0){
            $sql.=" and id='".$id."'";
        }
        $kq=parent::getone($sql);
        return $kq;
    }
    function gethome_product($type){
        $sql="select * from products where 1";
        // sp hot
        if($type==1){
            $sql.=" and hot=1";
        }
        // sp km
        if($type==2){
            $sql.=" and promo>0";
        }
        //sp moi
        $sql.=" order by id desc limit 3";
        $kq=parent::getall($sql);
        return $kq;
    }
    function getlast(){
        $sql="select id from products order by id desc";
        $kq=parent::getone($sql);
        return $kq;
    }
    //Thêm sản phẩm mới
    function Addproduct($tensanpham,$image,$price,$mota,$mathang,$soluong)
    {
           $db = new connect();
           $query = "INSERT INTO products(product_name,product_image,price,descript,catalog_id,amount) VALUES ('$tensanpham','$image','$price','$mota','$mathang','$soluong')";
           $db->exec($query);
    }
    // //Update sản phẩm
    function Editproduct($tensanpham,$image,$price,$mota,$mathang,$soluong,$id)
    {
        $db = new connect();
        $query = "UPDATE products set product_name='$tensanpham',product_image='$image',price='$price',descript='$mota',catalog_id= '$mathang', amount='$soluong' where id='$id'";
        $db->exec($query);
    }
    // //Xoá sản phẩm
    function Deleteproduct($id)
    {
        $db = new connect();
        $query = "delete from products where id = '$id'";
        $db->exec($query);
    }
}
?>