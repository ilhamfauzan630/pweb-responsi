<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Toko Makanan</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/input.css">
    <style>
        body {
            background-image: url("../assets/food-blur.png");


            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .delivery
        {
            padding: 20px;
            border-radius: 7px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="list" style="--clr:#f44336;">
                    <a href="food.html">
                        <span class="icon">
                            <ion-icon name="fast-food-outline"></ion-icon>
                        </span>
                        <span class="text">Food</span>
                    </a>
                </li>
                <li class="list active" style="--clr:#0fc70f;">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="text">Messages</span>
                    </a>
                </li>
                <li class="list" style="--clr:#ffa177;">
                    <a href="user.php">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="text">About</span>
                    </a>
                </li>




                <li class="list" style="--clr:#b145e9;">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="text">Settings</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="delivery">
            <h2>Order Makanan</h2>
            <form action="message.php" method="post">
                <div class="input">
                    <input type="text" name="nama" id="nama" required><br>
                    <label for="nama">Nama Lengkap</label>
                </div>
                <div class="input">
                    <input type="text" name="alamat" id="alamat" required><br>
                    <label for="Alamat">Alamat Rumah</label>
                </div>
                <div class="input">
                    <input type="number" name="nomer" id="nomer"><br>
                    <label for="nomer">Nomer Telepon</label>
                </div>
                
                <div class="input">
                    <label for="makanan">Pilih Pesanan</label>
                    <select name="makanan" id="makanan">
                        <option value="batagor">Batagor</option>
                        <option value="bakso">Bakso</option>
                        <option value="mie">Mie Goreng</option>
                        <option value="cuanki">Bakso cuanki</option>
                    </select>
                </div>
                <div class="input">
                    <p>Pedas</p>
                    <input type="radio" name="radio" id="radio" value="level 1"><label for="lev1">Level 1</label>
                    <input type="radio" name="radio" id="radio" value="level 2"><label for="lev2">Level 2</label>
                    <input type="radio" name="radio" id="radio" value="level 3"><label for="lev3">Level 3</label>
                    <input type="radio" name="radio" id="radio" value="level 4"><label for="lev4">Level 4</label>
                    <input type="radio" name="radio" id="radio" value="level 5"><label for="lev5">Level 5</label>
                </div>
                <div class="submit">
                    <input type="submit" value="Order">
                </div>
            </form>
            <?php
            if (isset($_POST['nama'])) {
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $nomer = $_POST['nomer'];
                $makanan = $_POST['makanan'];
                $radio = $_POST['radio'];
                $total = 0;
                if($makanan == "batagor")
                {
                    $total = $total + 10000;
                }
                else if($makanan == "bakso")
                {
                    $total = $total + 15000;
                }
                else if($makanan == "mie")
                {
                    $total = $total + 20000;
                }
                else if($makanan == "cuanki")
                {
                    $total = $total + 25000;
                }
                echo "<h3>$nama</h3>";
                echo "<h3>$alamat</h3>";
                echo "<h3>$nomer</h3>";
                echo "<h3>$makanan</h3>";
                echo "<h3>$radio</h3>";
                echo "<h3>$total</h3>";
            }
            $fp = fopen("message.txt", "a+");
            fwrite($fp, "$nama|$alamat|$nomer|$makanan|$radio|$total\n");
            fclose($fp);
            ?>
        </div>
    </main>
    <footer>

    </footer>
    <script src="../js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>