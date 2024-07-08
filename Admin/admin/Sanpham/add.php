
<div class="row2">
   <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
          <div class="row2 mb10">

            Danh mục<br>
            <select name="iddm" >
              <?php
                foreach ($listdanhmuc as $danhmuc ){
                  extract($danhmuc);
                  echo '<option value="'.$id.'">'.$name_dm.'</option>';
                }
              ?>
            
            </select>
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên sản phẩm" required>
           </div>
           <div class="row2 mb10 form_content_container">
           <label> Mã sản phẩm </label> <br>
            <input type="text" name="masp" placeholder="nhập vào mã san phẩm" disabled>
           </div>
           <div class="row2 mb10">
            <label>Gia sản phẩm </label> <br>
            <input type="text" name="giasp" placeholder="nhập vào giá sản phẩm" required>
           </div>
           <div class="row2 mb10">
            <label>Hình ảnh</label> <br>
            <input type="file" name="hinh" required>
           </div>
           <div class="row2 mb10">
            <label>Mô tả </label> <br>
            <textarea name="mota"  cols="30" rows="30" ></textarea>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">
         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>