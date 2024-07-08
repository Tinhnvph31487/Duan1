

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
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Sử dụng Prepared Statements để tránh SQL Injection
    $sql = "DELETE FROM bill WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Thực thi câu truy vấn
    $stmt->execute();

    // Chuyển hướng về trang danh sách sau khi xóa
    header("location:dhcuaban.php");
    exit();
} else {
    // Nếu không có ID được cung cấp, xử lý theo trường hợp bạn mong muốn
    echo "ID not provided.";
}
?>