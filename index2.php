<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2373038-soal 2-prak12</title>
    <style>
        .login {
            font-size:30px;
            font-weight: bold;
        }

        span {
            font-size:20px;
            font-weight: bold;
        }
        .admin {
            font-size:40px;
            font-weight: bold;
            color:blue;
        }

        .error {
            color: red;
            font-weight: bold;
            font-size:20px;
        }

        .username {
            color:black;
        }
        a {
            font-size:20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "admin" && $password == "admin") {
            echo "<div class='login'>Login berhasil!</div>";
            echo "<span>Selamat datang,</span> <span class='admin'>admin</span>";
            echo "<br><a href='soal2_12.html'>kembali ke halaman login</a>";
        } else {
            echo "<div class='error'> Username :  <span class='username'>$username</span> Tidak Terdaftar!</div>";
            echo "<br><a href='soal2_12.html'>kembali ke halaman login</a>";
        }
        ?>
    </div>
</body>
</html>
