<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_home(){
        $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,8";
        
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }
    function loadall_sanpham($kyw,$iddm){
        $sql="SELECT * FROM sanpham where 1";
        if ($kyw!="") {
            $sql.=" and name like '%".$kyw."%'";
        }
        if ($iddm>0) {
            $sql.=" and iddm='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }
    function load_ten_dm($iddm){
        if ($iddm>0) {
            $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql); 
            extract($dm);
            // return $iddm;
        }else{
            return "";
        }
    }
    // function load_ten_dm($iddm){
    //     if ($iddm>0) {
    //         $sql="select * from danhmuc where id=".$iddm;
    //         $dm=pdo_query_one($sql); 
    //         extract($dm)   ;
    //         return $name;
    //     }else{
    //         return "";
    //     }
    // }
    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);    
        return $sp;
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql="select * from sanpham where iddm=".$iddm." AND id <>".$id;
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }
    function update_sanpham($idSP,$iddm,$tensp,$giasp,$hinh,$mota){
        if($hinh!=""){
        $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',img='".$hinh."',mota='".$mota."' where id=".$idSP;
    }
    else
    $sql="update sanpham set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$idSP;
        pdo_execute($sql);  
    }
?>