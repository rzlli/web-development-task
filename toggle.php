<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli("sql210.infinityfree.com", "if0_42420741", "Remaz123456", "if0_42420741_myfirst");

// استقبال معرف المستخدم المطلوب تعديل حالته
$id = $_POST['id'];

// جلب قيمة الحالة الحالية للمستخدم
$result = $conn->query("SELECT status FROM user WHERE id = $id");
$row = $result->fetch_assoc();

// تبديل قيمة الحالة بين 0 و 1
if ($row['status'] == 0) {
    $new = 1;
} else {
    $new = 0;
}

// تحديث القيمة الجديدة في قاعدة البيانات
$conn->query("UPDATE user SET status = $new WHERE id = $id");

// إرجاع القيمة الجديدة ليتم عرضها في الواجهة
echo $new;

$conn->close();
?>