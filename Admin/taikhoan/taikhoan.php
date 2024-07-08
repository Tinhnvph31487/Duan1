<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=dskh" method="post">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>TÊN TÀI KHOẢN</th>
                <th>MẬT KHẨU</th>
                <th>EMAIL</th>
                <th>Họ và tên</th>
                <th>Địa chỉ</th>
                <th>ĐIỆN THOẠI</th>
                <th>VAI TRÒ</th>
                <th></th>
            </tr>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <th>'.$id.'</th>
                <td>'.$username.'</td>
                <td>'.$password.'</td>
                <td>'.$email.'</td>
                <td>'.$username.'</td>
                <td>'.$address.'</td>
                <td>'.$tel	.'</td>
                <td>'.$role.'</td>
                <td>  
                <a href="'.$suatk.'"><input type="button" value="Sửa"></a>
                <a href="'.$xoatk.'"><input type="button" value="Xoá"></a> 
            </tr>';
            }
            ?> 
           </table>
           </div>
          </form>
         </div>
        </div>
    </div>