<?php
function insert_taikhoan($user,$pass,$email){
   
    $sql="insert into taikhoan (username,password,email) values ('$user','$pass','$email')";
    // echo $sql;die;
    pdo_execute($sql);
}
function checkuser($user,$pass){
    $sql="select * from taikhoan where username='".$user."' AND password='".$pass."'";
    $sp=pdo_query_one($sql);    
    return $sp;
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);    
    return $sp;
}

function update_capnhat_tk($id,$user,$pass,$email,$tel,$address){
$sql=" UPDATE taikhoan set username='".$user."', password='".$pass."',email='".$email."',tel='".$tel."',address='".$address."' where id=".$id;
    pdo_execute($sql);  
}
function loadall_taikhoan(){
    $sql="SELECT * FROM taikhoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return  $listtaikhoan;
}
?>