<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./includes/assets.php") ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta description="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Menú Lago</title>
</head>

<body>
    <?php include("./includes/header.php") ?>
    <main>


        <section class="menu_section">


            <div class="menu_items">

                <a href="comidas.php" class="menu_item">
                    <div class="title">
                        <h2>Comidas</h2>
                    </div>
                    <div class="img_box">
                        <img src="./media/webp/png/sandwich.webp" onerror="this.onerror=null;this.src='./media/png/sandwich.png';" alt="breakfast">
                    </div>
                </a>

                <a href="bocadillos.php" class="menu_item">
                    <div class="title">
                        <h2>Bocadillos</h2>
                    </div>
                    <div class="img_box">
                        <img src="./media/webp/png/ensalada.webp" onerror="this.onerror=null;this.src='./media/png/ensalada.png';" alt="ensalada">
                    </div>
                </a>

                <a href="postres.php" class="menu_item">
                    <div class="title">
                        <h2>Postres</h2>
                    </div>
                    <div class="img_box">
                        <img class="helado_img" src="./media/webp/png/helado.webp" onerror="this.onerror=null;this.src='./media/png/helado.png';"
                            alt="helado">
                    </div>
                </a>

                <a href="smotties.php" class="menu_item">
                    <div class="title">
                        <h2>Smoothies</h2>
                    </div>
                    <div class="img_box">
                        
                    </div>
                </a>

                <a href="refrescos.php" class="menu_item">
                    <div class="title">
                        <h2>Refrescos</h2>
                    </div>
                    <div class="img_box">
                        <img class="refrescos_img" src="./media/webp/png/refrescos.webp" onerror="this.onerror=null;this.src='./media/png/refrescos.png';"
                            alt="refrescos">
                    </div>
                </a>

                <a href="cafes.php" class="menu_item">
                    <div class="title">
                        <h2>Cafés</h2>
                    </div>
                    <div class="img_box">
                        <img class="cafe_img" src="./media/webp/png/cafe.webp" onerror="this.onerror=null;this.src='./media/png/cafe.png';"
                            alt="cafes">
                    </div>
                </a>

                <a href="alcoholicas.php" class="menu_item">
                    <div class="title">
                        <h2>Bebidas <br> Alcoholicas</h2>
                    </div>
                    <div class="img_box">
                        <img class="alcoholicas_img" src="./media/webp/png/alcoholicas.webp" onerror="this.onerror=null;this.src='./media/png/alcoholicas.png';"
                            alt="bebidas alcoholicas">
                    </div>
                </a>

                <a href="extras.php" class="menu_item">
                    <div class="title">
                        <h2>Extras</h2>
                    </div>
                    <div class="img_box">
                    </div>
                </a>

            </div>

        </section>

    </main>
    <?php include("./includes/footer.php") ?>



</body>

</html>
