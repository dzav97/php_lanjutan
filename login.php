<?php
session_start();

// Fungsi untuk membersihkan input
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Inisialisasi variabel nama pengguna dan kata sandi
$username = $password = "";
$usernameErr = $passwordErr = "";
$loginErr = "";

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi input username
        if (empty($_POST["u"])) {
            throw new Exception("Masukkan username");
        } else {
            $username = clean_input($_POST["u"]);
        }

        // Validasi input password
        if (empty($_POST["p"])) {
            throw new Exception("Masukkan password");
        } else {
            $password = clean_input($_POST["p"]);
        }

        // Jika tidak ada error pada validasi, coba melakukan proses login
        if (empty($usernameErr) && empty($passwordErr)) {
            // Misalnya, bandingkan dengan data yang ada dalam database
            // Di sini kita asumsikan bahwa login berhasil jika username dan password tidak kosong
            if (!empty($username) && !empty($password)) {
                // Login berhasil, tetapkan session untuk menandai bahwa pengguna sudah login
                $_SESSION['loggedin'] = true;
                // Redirect ke halaman selamat datang atau halaman utama
                header("Location: welcome.php");
                exit; // Pastikan tidak ada kode lain yang dieksekusi setelah melakukan redirect
            } else {
                // Jika proses login gagal
                throw new Exception("Username atau password salah");
            }
        }
    }
} catch (Exception $e) {
    // Tangani pengecualian dengan menampilkan pesan kesalahan
    $loginErr = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-size: smaller;
        }
    </style>
</head>
<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="u" value="<?php echo $username; ?>">
        <span class="error"><?php echo $usernameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error"><?php echo $passwordErr; ?></span>
        <br><br>
        <span class="error"><?php echo $loginErr; ?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>
