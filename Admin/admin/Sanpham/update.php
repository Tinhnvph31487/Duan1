<?php
if ( is_array($sp)) {
    extract($sp);
}

$hinhpath="../upload/".$img;
if (is_file($hinhpath)) {
$hinh="<img src='".$hinhpath."' height=80px>";
}else{
echo "Không có hình tải lên";
}
?>

<div class="row2">
   <div class="row2 font_title">
          <h1>SỬA CHỮA TÊN HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
        
         <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
            
           <label> Mã sản phẩm </label> <br>
           <?php
          // echo $idSP;
          ?>
           <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                        foreach ($listdanhmuc as $danhmuc ){
                        extract($danhmuc);      
                          if ($iddm==$id) $s="selected"; else $s="";
                          echo '<option value="'.$id.'" >'.$name_dm.'</option>';
                    }
                ?>
                </select>
                <?php
          // echo $idSP;
          ?>
           </div>
         
           <div class="row2 mb10">
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên sản phẩm" value="<?=$name?>">
           </div>
         
           <div class="row2 mb10">
            <label>Gia sản phẩm </label> <br>
            <input type="text" name="giasp" placeholder="nhập vào giá sản phẩm" value="<?=$price?>">
           </div>

           <div class="row2 mb10">
            <label>Hình ảnh</label> <br>
            <input type="file" name="hinh" >
            <?=$hinh?>
           </div>

           <div class="row2 mb10">
            <label>mô tả</label> <br>
            <textarea name="mota"  cols="30" rows="30"><?=$mota?></textarea>
           </div>

           
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?php echo $idSP?>">
         <button class="mr20" type="submit" name="capnhat" value="Cập nhật"> Cập nhật </button>
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>