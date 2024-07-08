<?php
$host="127.0.0.1";
$username= "root";
$password= "";
$dbname= "duan1";

try {
    // Chuỗi kết nối
    $conn=new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
    // Set thuộc tính ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Lỗi kết nối CSDL: ".$e->getMessage();
}

// Lấy giá trị id từ URL hoặc từ nguồn khác
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $trangthai= $_POST['trangthai'];
    

    $sql = "UPDATE `bill` SET `trangthai`='$trangthai' WHERE `id`='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('location:update.php');
    die;
}

// Truy vấn cơ sở dữ liệu để lấy dữ liệu của dòng cần chỉnh sửa
$sql_get_data = "SELECT * FROM `bill` WHERE `id`='$id'";
$stmt_get_data = $conn->prepare($sql_get_data);
$stmt_get_data->execute();
$bill = $stmt_get_data->fetch();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="">Trạng thái</label><br>
    <input type="text" name="trangthai" value="<?= isset($bill['trangthai']) ? $bill['trangthai'] : "" ?>" required>
    <br><br>
    <!-- <label for="">Ảnh đại diện</label>
    <input type="file" name="avatar"  >
    <input type="hidden" name="avatar" value="<?= $data['avatar']?>">
    <br><br>
    <label for="">Ngày sinh</label>
    <input type="date" name="birtday" value="<?= isset($data['birtday']) ? $data['birtday'] : "" ?>" required>
    <br><br>
    <label for="">Email</label>
    <input type="email" name="email" value="<?= isset($data['email']) ? $data['email'] : "" ?>" required>
    <br><br>
    <label for="">Địa chỉ</label>
    <input type="text" name="address" value="<?= isset($data['address']) ? $data['address'] : "" ?>" required>
    <br><br>
    <label for="">Sở thích</label>
    <input type="text" name="hobbie" value="<?= isset($data['hobbie']) ? $data['hobbie'] : "" ?>" required>
    <br><br>
    <label for="">Skill</label>
    <input type="text" name="skill" value="<?= isset($data['skill']) ? $data['skill'] : "" ?>" required>
    <br><br>
    <label for="">Lớp học</label>
    <select name="majors_id">
        <?php foreach ($majors as $mj): ?>
            <option value="<?= $mj['id'] ?>" <?php echo (isset($data['majors_id']) && $mj['id'] == $data['majors_id']) ? 'selected' : ''; ?>>
                <?= $mj['majors_name'] ?>
            </option>
        <?php endforeach; ?>
    </select> -->
    
    <button type="submit">Chỉnh sửa</button>
</form>
</body>
</html>



<!-- 






















<div class="row2">
   <div class="row2 font_title">
          <h1>Thay đổi tên danh mục giày</h1>
         </div>
         <div class="row2 form_content ">
          <form action="update.php" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã thể loại </label> <br>
            <input type="text" name="maloai" placeholder="nhập vào mã loại" disabled>
           </div>
           <div class="row2 mb10">
            <label>Tên thể loại phim</label> <br>
           
             <select name="id">
                    <option value="0" selected>0</option>
                    <option value="1" selected>1</option>
                    <option value="2" selected>2</option>
                    <option value="3" selected>3</option>
                    
                </select>
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
        </div> -->