<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_logintest');

if (isset($_POST['btn-register'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($nama == "" or $username == "" or $password == "") {
        $alert = "Masukan Data Dengan Lengkap";
    } else {
        mysqli_query($conn, "insert into tbl_admin (`nama`, `username`, `password`) VALUES ('$nama', '$username', '$password') ");
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <style>
        .header h1 {
            font-size: 25px;
            font-weight: lighter;
            font-family: sans-serif;
        }
        .form-regis .alrt p {
            height: 30px;
            font-size: 14px;
            color: red;
            position: relative;
            top: -8px;
        }

        .reg {
            background: #007AFF;
            border: none;
            outline: none;
            box-shadow: none;
            color: whitesmoke;
            padding: 6px 85px;
            border-radius: 25px;
            font-family: sans-serif;
            letter-spacing: 0.5px;
        }
        .form-regis input {
            margin-bottom: 12px;
        }
    </style>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg pb-4">
                    <div class="card-body">
                        <div class="header text-center">
                            <p class="my-2"> <img src="avatar.svg" width="90px" alt=""></p>
                            <h1 class="mt-4">Silahkan Register </h1>
                        </div>
                        <form action="" method="post">
                            <div class="form-regis">
                                <label for="">Nama</label>
                                <input type="text" name="nama" placeholder="Masukan Nama Anda" class="form-control" required>
                                <label for="">Username</label>
                                <input type="text" name="username" placeholder="Masukan Username Anda" class="form-control">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Masukan Password Anda" class="form-control">
                                <div class="alrt">
                                    <p><?php if (isset($alert)) {
                                            echo $alert;
                                        } ?></p>
                                </div>
                                <div class="but text-center">
                                    <button class="btn btn-primary mt-2 reg" type="submit" name="btn-register">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>