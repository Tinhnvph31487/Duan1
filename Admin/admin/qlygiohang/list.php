

<div class="row2">
         <div class="row2 font_title">
          <h1>Danh sách giỏ hàng</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=listgh" method="POST">
           <div class="row2 mb10 formds_loai">
           <tagiohange>
           <table><tr>
                <th>Mã đơn hàng</th>
                <th>Thông tin</th>
                <th>Ngày đặt hàng</th>
                <th>Tổng giá</th>
                <th>Trạng thái</th>
                <th>Chi tiết</th>
            </tr>
            
            <?php
            foreach ($listgiohang as $giohang) { ?>
            
                <tr>
                
                <td class="product-name"><a href="#"><?=$giohang['madh']?></a></td>
                <td class="product-price-cart"><span class="amount"><?=$giohang['name']."<br>",$giohang['address']."<br>",$giohang['email']."<br>",$giohang['tel']?></span></td>
                <td class="product-subtotal"><?=$giohang['Ngaydathang']?></td>
                <td class="product-subtotal"><?=$giohang['tongdonhang']?></td>
                <td class="product-subtotal"><?php
                if($giohang['trangthai']==0){
                    echo"Đơn hàng mới";

                }elseif ($giohang['trangthai']==1) {
                    echo"Chờ xác nhận";
                }
                elseif ($giohang['trangthai']==2) {
                    echo"Đang giao hàng";
                }
                elseif ($giohang['trangthai']==3) {
                    echo"Giao thành công";
                }
                
                ?></td>
                <td class="product-wishlist-cart">
                    <!-- <a href="../index.php?act=ctdonhang"> <input  class="mr20" type="button" value="Chi tiết"></a> -->
                    <!-- <a href="../index.php?act=thanhtoan">Chi tiết</a> -->
                    <a href="admin/qlygiohang/update.php?id=<?=$giohang['id']?>"> <input  class="mr20" type="button" value="Cập nhật"></a>
               </td>
            </tr>
               <?php 
            }
            ?>
            </table>
           
           </tagiohange>
           </div>
           <div class="row mb10 ">
        
        
           </div>
          </form>
         </div>
        </div>



       
    </div>