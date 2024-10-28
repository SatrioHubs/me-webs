<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        /* Gaya sederhana untuk form */
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <form id="contactForm" method="POST" action="form_process.php">
        <label for="fullname">Nama Lengkap:</label>
        <input type="text" id="fullname" name="fullname" required>
        <span class="error" id="fullnameError"></span><br><br>
        
        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" required>
        <span class="error" id="emailError"></span><br><br>
        
        <label for="subject">Subjek:</label>
        <input type="text" id="subject" name="subject" required>
        <span class="error" id="subjectError"></span><br><br>
        
        <label for="message">Pesan:</label>
        <textarea id="message" name="message" required></textarea>
        <span class="error" id="messageError"></span><br><br>
        
        <button type="submit">Kirim</button>
    </form>

    <script src="jquery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
                let isValid = true;

                // Validasi Nama Lengkap
                const fullname = $('#fullname').val();
                if (fullname.length < 3) {
                    $('#fullnameError').text('Nama lengkap minimal 3 karakter.');
                    isValid = false;
                } else {
                    $('#fullnameError').text('');
                }

                // Validasi Alamat Email
                const email = $('#email').val();
                const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                if (!emailPattern.test(email)) {
                    $('#emailError').text('Alamat email tidak valid.');
                    isValid = false;
                } else {
                    $('#emailError').text('');
                }

                // Validasi Subjek
                const subject = $('#subject').val();
                if (subject === '') {
                    $('#subjectError').text('Subjek tidak boleh kosong.');
                    isValid = false;
                } else {
                    $('#subjectError').text('');
                }

                // Validasi Pesan
                const message = $('#message').val();
                if (message === '') {
                    $('#messageError').text('Pesan tidak boleh kosong.');
                    isValid = false;
                } else {
                    $('#messageError').text('');
                }

                if (!isValid) {
                    e.preventDefault(); // Mencegah pengiriman form jika tidak valid
                }
            });
        });
    </script>
</body>
</html>
