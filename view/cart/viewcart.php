
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.php" >Home</a>
                </li>
                <li class="active">Cart Page </li>
            </ul>
        </div>
    </div>
</div>
<div class="cart-main-area pt-90 pb-100">
    <div class="container">
        <h3 class="cart-page-title">Giỏ hàng của bạn</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Thực hiện</th>
                                </tr>
                            </thead>
                            <tbody>                        
                            <?php
                            $tong=0;
                            $i=0;
                            $img_path="upload/";
                            foreach ($_SESSION['mycart'] as $cart) {
                                $hinh= $img_path.$cart[2];
                                $ttien=$cart[3]*$cart[4];
                                $tong=$tong+$ttien;
                                $xoa ='<a href="index.php?act=delcart&idcart='.$i.'">Xoá';
                                echo'
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="'.$hinh.'" class="product-image"></a>
                                        </td>
                                        <td class="product-name"><a href="#">'.$cart[1].'</a></td>
                                        <td class="product-price-cart"><span class="amount">'.$cart[3].'</span></td>
                                        <td class="product-quantity">
                                            <div >
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="'.$cart[4].'">
                                            </div>
                                        </td>
                                        <td class="product-subtotal">'.$ttien.'</td>
                                        <td class="product-remove">
                                        
                                        '.$xoa.'
                                    </td>
                                    </tr>
                                   
                                ';
                                echo '
                                        <style>
                                        .cart-plus-minus-box{
                                            text-align: center;
                                            width:80px;
                                        }
                                            .product-image {
                                                width: 70px; /* Adjust the width as needed */
                                                height: auto; /* Maintain aspect ratio */
                                            }
                                        </style>
                                    ';
                                $i+=1;
                            }
                            echo'
                            <tr>
                                       <td class="product-name" colspan="4" ><a href="#">Tổng tiền</a></td>
                                       <td class="product-subtotal">'.$tong.'đ</td>
                                           
                                    </td>
                                    </tr>
                            ';
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="index.php">tiếp tục mua sắm</a>
                                </div>
                                <div class="cart-clear">
                                    
                                    <a href="index.php?act=delcart">Xoá hết giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Thông tin của bạn</h3>
                    <form action="index.php?act=thanhtoan" method="post">
                        <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Họ và tên</label>
                                    <input type="text" name="name" placeholder="Nhập họ tên" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" placeholder="Nhập địa chỉ" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Số điện thoại</label>
                                    <input type="number" name="tel" placeholder="Nhập số điện thoại"required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>EMAIL</label>
                                    <input type="text" name="email" placeholder="Nhập email của bạn" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Ngày đặt hàng</label>
                                    <input type="date" name="ngaydathang" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Phương thức thanh toán</label><br>
                                    <input type="radio" name="pttt" value="0" id="cashOnDelivery"required>
                                Thanh toán khi nhận hàng<br>

                                    <input type="radio" name="pttt" value="1" id="visaPayment" required>
                                    <label for="visaPayment">Thanh toán qua visa</label><br>

                                    <input type="radio" name="pttt" value="2" id="bankTransfer" required>
                                    <label for="bankTransfer">Thanh toán chuyển khoản</label><br>
                                </div>
                            </div>
                            <td>
                            </td>
                        </div>
                        <div class="cart-clear">
                            <input type="submit" value="Thanh toán" name="thanhtoan">
                    </div>
                </form>
                