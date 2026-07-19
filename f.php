<!DOCTYPE html>
<html>
<head>
    <title>Task</title>
</head>
<body>

    <!-- نموذج إدخال بيانات المستخدم -->
    <form action="m.php" method="post">
        Name: <input type="text" name="name" required>
        Age: <input type="text" name="age" required>
        <input type="submit" value="Submit">
    </form>

    <br>

    <!-- جدول عرض البيانات من قاعدة البيانات -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        // الاتصال بقاعدة البيانات MySQL
        $conn = new mysqli("sql210.infinityfree.com", "if0_42420741", "Remaz123456", "if0_42420741_myfirst");
        
        // جلب جميع السجلات من جدول المستخدمين
        $result = $conn->query("SELECT * FROM user");
        
        // طباعة البيانات داخل أسطر الجدول
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            // تحديد معرف فرعي لتحديث الحالة مباشرة عبر الجافاسكريبت
            echo "<td id='status_" . $row['id'] . "'>" . $row['status'] . "</td>";
            // زر التبديل يمرر معرف المستخدم عند النقر
            echo "<td><button onclick='toggleStatus(" . $row['id'] . ")'>Toggle</button></td>";
            echo "</tr>";
        }
        $conn->close();
        ?>
    </table>

    <script>
    // دالة لتحديث الحالة فوراً في الخلفية بدون إعادة تحميل الصفحة
    function toggleStatus(id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // تحديث قيمة الحالة في الجدول مباشرة
                document.getElementById("status_" + id).innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "toggle.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id);
    }
    </script>

</body>
</html>

 