<?php 
Class Catalog extends connect{

    function getall_catalog(){
        $sql="select * from catalog order by stt desc";
        $kq=parent::getall($sql);
        return $kq;
    }
    function gethome_catalog(){
        $sql="select * from catalog where stt>0 order by stt desc";
        $kq=parent::getall($sql);
        return $kq;
    }
    function getone_catalog($id){
        $sql="select * from catalog where id='".$id."'";
        $kq=parent::getone($sql);
        return $kq;
    }

    function getlast(){
        $sql="select id from catalog order by id desc";
        $kq=parent::getone($sql);
        return $kq;
    }
    
    function addcata($name,$stt)
    {
        $query = "INSERT INTO catalog(catalog_name,stt) VALUES ('$name','$stt')";
        parent::exec($query);
    }
    //Update sản phẩm
    function editcata($name,$stt,$id)
    {
        // if($image=""){
            $query = "UPDATE catalog set catalog_name='$name',stt='$stt' where id='$id'";
            parent::exec($query);
        // }else{
        // $query = "UPDATE catalog set name='$name',image='$image',stt='$stt' where id='$id'";
        // parent::exec($query);
    // }
    }
    //Xoá sản phẩm
    function deletecata($id)
    {
        // global $linkimg;
        // //xóa hình trên host
        // $sql="select image from catalog where id='".$id."'";
        // $onedm=parent::getone($sql);
        // if($onedm['image']!=""){
        //     $img=$linkimg.$onedm['image'];
        //     if(is_file($img)){
        //         unlink($img); //xóa file
        //     }
        // }
        //xóa db
        $query = "DELETE from catalog where id = '$id'";
        parent::exec($query);
    }

}

?>