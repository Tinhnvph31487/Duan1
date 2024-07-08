<?php
function taodonhang($madh, $tongdonhang, $pttt, $name, $address, $tel, $email,$ngaydathang){
    $conn =pdo_get_connection();
    $sql = "INSERT INTO bill(madh, tongdonhang, pttt, name, address, tel, email,ngaydathang) 
            VALUES ('$madh', '$tongdonhang', '$pttt', '$name', '$address', '$tel', '$email','$ngaydathang')";
    pdo_execute($sql);

    $last_id = $conn->lastInsertId();
    return $last_id;
}

    function loadall_giohang(){
        $sql="SELECT * FROM bill";
        $listgiohang=pdo_query($sql);
        return $listgiohang;
    }
    function adtocart($iddh,$idpro,$tensp,$img,$soluong,$thanhtien){
        $conn =pdo_get_connection();
        $sql = "INSERT INTO cart(iddh, idpro, tensp, img, soluong, thanhtien) 
                VALUES ('$iddh', '$idpro', '$tensp', '$img', '$soluong', '$thanhtien')";
        pdo_execute($sql);
    $conn->exec($sql);
        
        
    }
?>  