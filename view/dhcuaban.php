
<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM bill";
$bil = $conn->query($sql);

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flone - Minimal eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="../assets/css/icons.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<header class="header-area header-in-container clearfix">
    
    <div class="header-bottom sticky-bar header-res-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="" src="../assets/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="main-menu">
                        <nav>
                            <ul>        
                <li>
                    <a href="../index.php ">Home</a>/
                </li>
                <li class="active">Shop Details </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                       <div class="header-right-wrap">
                        <div class="same-style header-search">
                            <a class="search-active" href="#"><i class="pe-7s-search"></i></a>
                            <div class="search-content">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button class="button-search"><i class="pe-7s-search"></i></button>
                                </form>
                            </div> 
                        </div>
                        <div class="same-style account-satting">
                            <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
                            <div class="account-dropdown">
                                <ul>
                                    <li><a href="login-register.html">Login</a></li>
                                    <li><a href="login-register.html">Register</a></li>
                                    <li><a href="wishlist.html">Wishlist  </a></li>
                                    <li><a href="my-account.html">my account</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="same-style header-wishlist">
                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="same-style cart-wrap">
                            <button class="icon-cart">
                                <i class="pe-7s-shopbag"></i>
                                <span class="count-style">02</span>
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            
                            
                            
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
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
                                    <th>Mã đơn hàng</th>
                                    <th>Thông tin</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Tổng giá</th>
                                    <th>Trạng thái</th>
                                    <th>Chi tiết</th>
                                    <th> Cập nhật đơn hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($bil as $bl) { ?>
                                
                                    <tr>
                                    
                                    <td class="product-name"><a href="#"><?=$bl['madh']?></a></td>
                                    <td class="product-price-cart"><span class="amount"><?=$bl['name']."<br>",$bl['address']."<br>",$bl['email']."<br>",$bl['tel']?></span></td>
                                    <td class="product-subtotal"><?=$bl['Ngaydathang']?></td>
                                    <td class="product-subtotal"><?=$bl['tongdonhang']?></td>
                                    <td class="product-subtotal"><?php
                                    if($bl['trangthai']==0){
                                        echo"Đơn hàng mới";

                                    }elseif ($bl['trangthai']==1) {
                                        echo"Chờ xác nhận";
                                    }
                                    elseif ($bl['trangthai']==2) {
                                        echo"Đang giao hàng";
                                    }
                                    elseif ($bl['trangthai']==3) {
                                        echo"Giao thành công";
                                    }
                                    
                                    ?></td>
                                    <td class="product-wishlist-cart">
                                        <a href="../index.php?act=ctdonhang" >Chi tiết</a><br>
                                        
                                        <!-- <button type="submit"><a href="Deletedh.php?id=<?=$value['id']?>">Xoá</a></button> -->
                                   </td>
                                   <td class="product-wishlist-cart"><a href="Deletedh.php?id=<?=$bl['id']?>">Huỷ đơn hàng</a></td>
                                </tr>
                                   <?php 
                                }
                                ?>
                                
                                <!-- <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/cart-2.png" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$150.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$150.00</td>
                                    <td class="product-wishlist-cart">
                                        <a href="#">Chi tiết</a>
                                    </td>
                                </tr> -->
                                <!-- <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/cart-1.png" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$170.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$170.00</td>
                                    <td class="product-wishlist-cart">
                                        <a href="#">Chi tiết</a>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>