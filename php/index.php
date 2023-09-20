<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pengelolaan Surat</title>
    <link href="style.css" rel="stylesheet" type="css">
    <!-- Tambahkan link font dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Dashboard</h1>
    </header>

    <nav>
        <a href="#">Beranda</a>
        <a href="#">Surat Masuk</a>
        <a href="#">Surat Keluar</a>
        <a href="#">Arsip Surat</a>
        <a href="#">Tentang Kami</a>
    </nav>

    <main>
        <h2>Selamat datang di Aplikasi Pengelolaan Surat!</h2>
        <p>Website ini merupakan aplikasi sederhana untuk mengelola surat-surat.</p>
        <p>Anda dapat menggunakan menu di atas untuk navigasi ke bagian yang diinginkan.</p>
    </main>

    <footer>
        <div class="footer-content">
            <div class="social-icons">

                <p class="hak-cipta">Hak Cipta &copy; 2023 By Joseph Subejo</p>
            </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const loginForm = document.getElementById("login-form");

            loginForm.addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Simulate a successful login (replace with actual logic)
                const email = loginForm.elements.email.value;
                const password = loginForm.elements.password.value;

                // Replace this with your actual authentication logic
                if (email === "user@example.com" && password === "password") {
                    // Redirect to index.php after successful login
                    window.location.href = "index.php";
                } else {
                    // Handle failed login here
                    alert("Login failed. Please check your credentials.");
                }
            });
        });
    </script>


</body>

</html>