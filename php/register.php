<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Toko Makanan</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/card.css">
    <style>
        body {
            background-image: url("../assets/food-blur.jpg");


            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .delivery {
            padding: 20px;
            border-radius: 7px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .submit input {
            background-color: #0fc70f;
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.5s;
            width: 70px;
        }

        .submit input:hover {
            width: 75px;
            transform: translateY(-7px);
        }
    </style>
</head>

<body>
    <header>
        <nav class="navigation">
            <div class="menuToggle"></div>
            <ul>
                <li class="list" style="--clr:#2196f3;">
                    <a href="../index.html">
                        <span class="icon">
                            <img src="../assets/svg/home.svg" alt="home" width="30px">
                        </span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list" style="--clr:#f44336;">
                    <a href="food.html">
                        <span class="icon">
                            <img src="../assets/svg/food.svg" alt="food" width="30px">
                        </span>
                        <span class="text">Food</span>
                    </a>
                </li>
                <li class="list" style="--clr:#0fc70f;">
                    <a href="delivery.php">
                        <span class="icon">
                            <img src="../assets/svg/chat.svg" alt="chat" width="30px">
                        </span>
                        <span class="text">Delivery</span>
                    </a>
                </li>
                <li class="list" style="--clr:#ffa177;">
                    <a href="user.php">
                        <span class="icon">
                            <img src="../assets/svg/list.svg" alt="user" width="30px">
                        </span>
                        <span class="text">List Pesanan</span>
                    </a>
                </li>
                <li class="list active" style="--clr:#b145e9;">
                    <a href="#">
                        <span class="icon">
                            <img src="../assets/svg/cart.svg" alt="cart" width="30px">
                        </span>
                        <span class="text">Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="delivery">
            <h2>Registrasi</h2>
            <br><br>
            <form action="register.php" method="post">
            <div class="input">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" required><br>
                </div>
                <br>
                <div class="input">
                    <label for="Alamat">Alamat Rumah</label>
                    <input type="text" name="alamat" id="alamat"><br>
                </div>
                <br><br>
                <div class="input">
                    <label for="nomer">Nomer Telepon</label>
                    <input type="number" name="nomer" id="nomer"><br>
                </div>
                <br><br>
                <div class="input">
                    <p>Jenis Kelamin</p>
                    <input type="radio" name="radio" id="radio" value="pria"><label for="pria">Laki-laki</label>&nbsp;
                    <input type="radio" name="radio" id="radio" value="wanita"><label for="wanita">Perempuan</label>&nbsp;
                </div>
                <br><br>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"><br>
                </div>
                <br><br>
                <div class="submit">
                    <input type="submit" value="submit" style="background-color: #b145e9;">
                </div>
            </form>
            <?php
            if (isset($_POST['nama'])) {
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $nomer = $_POST['nomer'];
                $jk = $_POST['radio'];
                $email = $_POST['email'];
                if ($nama == "" || $alamat == "" || $nomer == "" || $jk == "" || $email == "") {
                    echo "<script>alert('Data tidak boleh kosong')</script>";
                }else{
                    echo "Anda Telah Berhasil Registrasi";
                }
            }
            ?>
        </div>
    </main>
    <footer>

    </footer>
    <script src="../js/script.js"></script>
</body>

</html>