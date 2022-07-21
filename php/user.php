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
            background-image: url("../assets/food-blur.png");


            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .user
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
                <li class="list" style="--clr:#0fc70f;">
                    <a href="message.php">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="text">Messages</span>
                    </a>
                </li>
                <li class="list active" style="--clr:#ffa177;">
                    <a href="#">
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
        <div class="user">
            <h2>list Pesanan</h2>
        </div>
    </main>
    <footer>

    </footer>
    <script src="../js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>