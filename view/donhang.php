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
<h2 style="text-align: center;">Chúc mừng bạn đã đặt hàng thành công</h2>
<h3>ID đươn hàng : <?=$iddh?></h3>
<div class="cart-main-area pt-90 pb-100">
    
    <div class="container">
        <h3 class="cart-page-title">Đơn hàng của bạn</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
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
                            </div>
                        </div>
                    </div>
                    <h3>Thông tin của bạn</h3>
                        <div class="row">
                            <input type="hidden" name="tongdonhang" value="<?=$tong?>">
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Họ và tên</label>
                                    <input type="text" name="giohang" placeholder="Nhập họ tên" value="<?=$name?>" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="address" placeholder="Nhập địa chỉ" value="<?=$address?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Số điện thoại</label>
                                    <input type="number" name="tel" placeholder="Nhập số điện thoại" value="<?=$tel?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>EMAIL</label>
                                    <input type="text" name="email" placeholder="Nhập email của bạn" value="<?=$email?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Ngày đặt hàng</label>
                                    <input type="text" name="ngaydathang" placeholder="Nhập email của bạn" value="<?=$ngaydathang?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Phương thức thanh toán</label><br>
                                   <input type="text " name="pttt" 
                                   value="<?php
                                   if ($pttt==0) {
                                    echo"Thanh toán khi nhận hàng";
                                   }elseif ($pttt==1) {
                                   echo"Thanh toán qua visa";
                                   }elseif($pttt==2){
                                    echo"Thanh toán chuyển khoản";
                                   }
                                   ?>">
                                </div>
                            </div>
                            <td>
                            </td>
                        </div>