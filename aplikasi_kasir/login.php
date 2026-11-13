<?php
include "koneksi.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role     = $_POST['role'];

    $q = mysqli_query($koneksi, "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')");
    if ($q) {
        $pesan = "Registrasi Berhasil! Silakan Login.";
    } else {
        $pesan = "Registrasi Gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login user</title>
</head>
<body>
    <h2>FORM LOGIN PETUGAS</h2>

    <?php if(isset($pesan)) echo "<p style='color:green;'>$pesan</p>"; ?>

    <form method="POST">
        <fieldset style="width: 300px;">
            <p>
                <label>Username: </label><br>
                <input type="text" name="username" placeholder="Buat username" required>
            </p>
            <p>
                <label>Password: </label><br>
                <input type="password" name="password" placeholder="Buat password" required>
            </p>
    
            </p>
             <a href="register.php">registerr</a></p>
        </fieldset>
    </form>

   
</body>
</html>