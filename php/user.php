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

        .delivery{
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
                <li class="list" style="--clr:#0fc70f;">
                    <a href="delivery.php">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="text">Delivery</span>
                    </a>
                </li>
                <li class="list active" style="--clr:#ffa177;">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="text">List Pesanan</span>
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
            <h2>list pesanan</h2>
            <?php
            $fp = fopen("message.txt", "r");
            while($isi = fgets($fp, 100)){
                $pisah = explode("|", $isi);
                echo "<br>";
                echo "nama : ".$pisah[0];
                echo "<br>";
                echo "Alamat : ".$pisah[1];
                echo "<br>";
                echo "No HP : ".$pisah[2];
                echo "<br>";
                echo "Pesanan : ".$pisah[3];
                echo "<br>";
                echo "level pedas : ".$pisah[4];
                echo "<br>";
                echo "total Harga : ".$pisah[5];
                echo "<br>";
                echo "<hr><hr><hr><hr>";
            }
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