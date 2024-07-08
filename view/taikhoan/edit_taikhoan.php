<div class="panel panel-default single-my-account">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-1">Edit your account information </a></h3>
                            </div>
                            <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">
                            <form action="index.php?act=edit_taikhoan" method="post">
                                <div class="panel-body">
                                    <div class="myaccount-info-wrapper">
                                        <div class="account-info-wrapper">
                                            <h4>My Account Information</h4>
                                            <h5>Your Personal Details</h5>
                                        </div>
                                        <?php
                    if(isset($POST['capnhat'])) {
                        $ten = $POST['ten'] ?? '';
                        $user = $POST['user'] ?? '';
                        $pass = $POST['pass'] ?? '';
                        $email = $POST['email'] ?? '';
                        $tel = $POST['tel'] ?? '';
                        $address = $POST['address'] ?? '';
                    }
                    ?>
                                        <div class="row">
                                            <!-- <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Họ tên</label>
                                                    <input type="text" name="ten" value="<?=$username?>" >
                                                </div>
                                            </div> -->
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Tên đăng nhập</label>
                                                    <input type="text" name="user" value="<?=$username?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Mật Khẩu</label>
                                                    <input type="password" name="pass" value="<?=$password?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="billing-info">
                                                    <label>Email</label>
                                                    <input type="email" name="email" value="<?=$email?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" name="tel" value="<?=$tel?>" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="billing-info">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" name="address" value="<?=$address?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="billing-back-btn">
                                            <div class="billing-back">
                                                <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                            </div>
                                            <div class="billing-btn">
                                                <button type="submit" name="capnhat">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>