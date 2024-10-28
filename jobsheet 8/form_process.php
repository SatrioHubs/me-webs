<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Pengaturan email
    $to = "your-email@example.com"; // Ganti dengan alamat email penerima
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    $body = "
        <html>
        <head>
        <title>Pesan dari $fullname</title>
        </head>
        <body>
        <p><strong>Nama:</strong> $fullname</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subjek:</strong> $subject</p>
        <p><strong>Pesan:</strong><br>$message</p>
        </body>
        </html>
    ";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Email berhasil dikirim.</p>";
    } else {
        echo "<p>Terjadi kesalahan saat mengirim email. Silakan coba lagi nanti.</p>";
    }
} else {
    echo "<p>Formulir belum dikirim.</p>";
}
?>
