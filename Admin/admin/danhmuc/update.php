<?php
if ( is_array($dm)) {
    extract($dm);
}
?>
<div class="row2">
   <div class="row2 font_title">
          <h1>Thay đổi tên danh mục giày</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã thể loại </label> <br>
            <input type="text" name="maloai" placeholder="nhập vào mã loại" disabled>
           </div>
           <div class="row2 mb10">
            <label>Tên thể loại phim</label> <br>
            <input type="text" name="tenloai" placeholder="nhập vào tên" value="<?php if(isset($name_dm)&&($name_dm!="")) echo $name_dm;?>" required>
           </div>
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
         <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listtl"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>