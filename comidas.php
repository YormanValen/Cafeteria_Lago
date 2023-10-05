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
    <link rel="stylesheet" href="style/comidas.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <title>Comidas</title>
</head>

<body>
    <?php include("./includes/header.php") ?>
    <main>

        <section class="desayunos_slide">

            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <a href="#desayunos">Desayunos</a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#sopas">Sopas</a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#platos_combinados">Platos Combinados</a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#raciones">Raciones</a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#ensaladas">Ensalada</a>
                    </div>

                </div>

            </div>

        </section>

        <section class="desayunos_section">

            <div class="desayunos_container">
                <div class="title_principal">
                    <h1>Desayunos</h1>
                </div>
                <div class="desayunos_box" id="desayunos">

                    <div class="title" id="español_tradicional">
                        <h2>Español tradicional</h2>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Churros_Con_Cafe.webp" onerror="this.onerror=null;this.src='./media/png/comida/Churros_Con_Cafe.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Churros y café</h2>
                            <p>Descripción</p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Churros_Con_Cafe.png">ver</a>
                                <h3>€ 3,50</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Porras_Con_Cafe.webp" onerror="this.onerror=null;this.src='./media/png/comida/Porras_Con_Cafe.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Porras y café</h2>
                            <p>Descripción</p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Porras_Con_Cafe.png">ver</a>
                                <h3>€ 3,50</h3>
                            </div>
                        </div>
                    </div>


                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Barrita_De_Pan_Multisemilla.webp" onerror="this.onerror=null;this.src='./media/png/comida/Barrita_De_Pan_Multisemilla.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Pan multisemilla</h2>
                            <p> con aceite, tomate y café </p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Barrita_De_Pan_Multisemilla.png">ver</a>
                                <h3>€ 3,50</h3>
                            </div>
                        </div>
                    </div>


                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Barrita_De_Pan_Tostado_Con_Tomate_y_Aceite.webp" onerror="this.onerror=null;this.src='./media/png/comida/Barrita_De_Pan_Tostado.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Barrita de pan tostado</h2>
                            <p> con aceite, tomate y café </p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Barrita_De_Pan_Tostado.png">ver</a>
                                <h3>€ 3,50</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Croissant_A_La_Plancha.webp" onerror="this.onerror=null;this.src='./media/png/comida/Croissant_A_La_Plancha.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Croissant a la plancha</h2>
                            <p>con mermelada y mantequilla</p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Croissant_A_La_Plancha.png">ver</a>
                                <h3>€ 3,50</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Sandwich_Mixto.webp" onerror="this.onerror=null;this.src='./media/png/comida/Sandwich_Mixto.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Sándwich mixto y café </h2>
                            <p></p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Sandwich_Mixto.png">ver</a>
                                <h3>€ 4,20</h3>
                            </div>
                        </div>
                    </div>


                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Desayuno_Con_Toritilla.webp" onerror="this.onerror=null;this.src='./media/png/comida/Desayuno_Con_Toritilla.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Barrita de pan tostado</h2>
                            <p>con tortilla Española y café</p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Desayuno_Con_Toritilla.png">ver</a>
                                <h3>€ 4,50</h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="desayunos_box">

                    <div class="title" id="americano">
                        <h2>Americano</h2>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Barrita_De_Pan_Tostado_Huevos_Y_Cafe.webp" onerror="this.onerror=null;this.src='./media/png/comida/Barrita_De_Pan_Tostado_Huevos_Y_Cafe.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Barrita de pan tostado, huevos a la plancha y café </h2>
                            <p></p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Barrita_De_Pan_Tostado_Huevos_Y_Cafe.png">ver</a>
                                <h3>€ 6,50</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Desayuno_Americano.webp" onerror="this.onerror=null;this.src='./media/png/comida/Desayuno_Americano.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Arepa de maíz, huevo revuelto</h2>
                            <p>con cebolla y tomate, queso y café</p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Desayuno_Americano.png">ver</a>
                                <h3>€ 7,50</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Tortita_Pancakes.webp" onerror="this.onerror=null;this.src='./media/png/comida/Tortita_Pancakes.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Tortitas pancakes</h2>
                            <p>con nata, sirope y café </p>
                            <div class="precio_ctn">
                                <a href="./media/png/comida/Tortita_Pancakes.png">ver</a>
                                <h3>€ 4,50</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="desayunos_box">
                    <div class="title" id="ingles">
                        <h2>Inglés</h2>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Desayuno_Ingles.webp" onerror="this.onerror=null;this.src='./media/png/comida/Desayuno_Ingles.png';" alt="">

                        </div>
                        <div class="txt_ctn">
                            <h2>Pan frito, huevos a la plancha.
                            </h2>
                            <p>salchicha, tomate, salchichón, alubia, champiñones y café</p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Desayuno_Ingles.png">ver</a>
                                <h3>€ 9,50</h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="desayunos_box">

                    <div class="title" id="ranchero">
                        <h2>Ranchero</h2>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Desayuno_Ranchero.webp" onerror="this.onerror=null;this.src='./media/png/comida/Desayuno_Ranchero.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Barrita de pan tostado
                            </h2>
                            <p>huevos a la plancha, salchichas, bacon y café</p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Desayuno_Ranchero.png">ver</a>
                                <h3>€ 6,50</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Zumo.webp" onerror="this.onerror=null;this.src='./media/png/comida/Zumo.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Zumo de naranja natural
                            </h2>
                            <p></p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Zumo.png">ver</a>
                                <h3>€ 3,50</h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="desayunos_box">

                    <div class="title" id="bolleria">
                        <h2>Bollería</h2>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Tostada_De_Pan_Bimbo.webp" onerror="this.onerror=null;this.src='./media/png/comida/Tostada_De_Pan_Bimbo.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Tostada de pan Bimbo
                            </h2>
                            <p></p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Tostada_De_Pan_Bimbo.png">ver</a>
                                <h3>€ 1,50</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Croissant.webp" onerror="this.onerror=null;this.src='./media/png/comida/Croissant.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Croissant
                            </h2>
                            <p></p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Croissant.png">ver</a>
                                <h3>€ 1,80</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Napolitana_De_Cacao.webp" onerror="this.onerror=null;this.src='./media/png/comida/Napolitana_De_Cacao.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Napolitana de cacao
                            </h2>
                            <p></p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Napolitana_De_Cacao.png">ver</a>
                                <h3>€ 1,80</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Ensaimada.webp" onerror="this.onerror=null;this.src='./media/png/comida/Ensaimada.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Ensaimada
                            </h2>
                            <p></p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Ensaimada.png">ver</a>
                                <h3>€ 1,80</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Pan_Trensado.webp" onerror="this.onerror=null;this.src='./media/png/comida/Pan_Trensado.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Trenza de manzana y crema
                            </h2>
                            <p></p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Pan_Trensado.png">ver</a>
                                <h3>€ 2,30</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Pan_Trenzado_Cacao.webp" onerror="this.onerror=null;this.src='./media/png/comida/Pan_Trenzado_Cacao.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Maple pecan
                            </h2>
                            <p></p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Pan_Trenzado_Cacao.png">ver</a>
                                <h3>€ 2,20</h3>
                            </div>
                        </div>
                    </div>

                    <div class="plato_item">
                        <div class="img_ctn">
                            <img src="./media/webp/png/comida/Gofre.webp" onerror="this.onerror=null;this.src='./media/png/comida/Gofre.png';" alt="">
                        </div>
                        <div class="txt_ctn">
                            <h2>Gofre
                            </h2>
                            <p></p>

                            <div class="precio_ctn">
                                <a href="./media/png/comida/Gofre.png">ver</a>
                                <h3>€ 6,50</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="desayunos_box">

                <div class="title_principal" id="sopas">
                    <h2>Sopas</h2>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" onerror="this.onerror=null;this.src='';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Verduras con pollo
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 5,80</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Sopa_De_Calabacin.webp" onerror="this.onerror=null;this.src='./media/png/comida/Sopa_De_Calabacin.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Crema de calabacín
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Sopa_De_Calabacin.png">ver</a>
                            <h3>€ 6,10</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Sopa_De_Lentejas.webp" onerror="this.onerror=null;this.src='./media/png/comida/Sopa_De_Lentejas.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Sopa de lentejas
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Sopa_De_Lentejas.png">ver</a>
                            <h3>€ 5,50</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desayunos_box">

                <div class="title_principal" id="platos_combinados">
                    <h2>Platos Combinados</h2>
                </div>

                <div class="plato_item">

                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Filete_De_Pollo_Plancha.webp" onerror="this.onerror=null;this.src='./media/png/comida/Filete_De_Pollo_Plancha.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Pechuga de pollo a la plancha
                        </h2>
                        <p>huevos y patatas fritas, (ensalada opcional)</p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Filete_De_Pollo_Plancha.png">ver</a>
                            <h3>€ 9,70</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Cinta_De_Lomo_A_La_Plancha.webp" onerror="this.onerror=null;this.src='./media/png/comida/Cinta_De_Lomo_A_La_Plancha.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Cinta de lomo a la plancha
                        </h2>
                        <p>huevos y patatas fritas</p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Cinta_De_Lomo_A_La_Plancha.png">ver</a>
                            <h3>€ 9,50</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Filete_De_Ternera_Plancha.webp" onerror="this.onerror=null;this.src='./media/png/comida/Filete_De_Ternera_Plancha.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Filete de ternera a la plancha
                        </h2>
                        <p>huevos y patatas</p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Filete_De_Ternera_Plancha.png">ver</a>
                            <h3>€ 11,40</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desayunos_box">

                <div class="title_principal" id="raciones">
                    <h2>Raciones</h2>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Jamon_Con_Oregano.webp" onerror="this.onerror=null;this.src='./media/png/comida/Jamon_Con_Oregano.png';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Jamón con orégano
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Jamon_Con_Oregano.png">ver</a>
                            <h3>€ 6,50</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Alitas_A_La_bbq.webp" onerror="this.onerror=null;this.src='./media/png/comida/Alitas_A_La_bbq.png';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Alitas fritas a la barbacoa
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Alitas_A_La_bbq.png">ver</a>
                            <h3>€ 6,50</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Patatas_Bravas.webp" onerror="this.onerror=null;this.src='./media/png/comida/Patatas_Bravas.png';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Patatas bravas
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Patatas_Bravas.png">ver</a>
                            <h3>€ 7,60</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Patatas_Alioli.webp" onerror="this.onerror=null;this.src='./media/png/comida/Patatas_Alioli.png';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Patatas ali-oli
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Patatas_Alioli.png">ver</a>
                            <h3>€ 7,60</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">

                        <img src="./media/webp/png/comida/Patatas_5_Salsas.webp" onerror="this.onerror=null;this.src='./media/png/comida/Patatas_5_Salsas.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Patatas 5 Salsas
                        </h2>
                        <p>( kepchup, mayonesa, rosa, ali-oli y queso)</p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Patatas_5_Salsas.png">ver</a>
                            <h3>€ 8,50</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">

                        <img src="./media/webp/png/comida/Oreja_De_Cerdo_A_La_Plancha.webp" onerror="this.onerror=null;this.src='./media/png/comida/Oreja_De_Cerdo_A_La_Plancha.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Oreja de cerdo a la plancha
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Oreja_De_Cerdo_A_La_Plancha.png">ver</a>
                            <h3>€ 10,20</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Huevos_Rotos.webp" onerror="this.onerror=null;this.src='./media/png/comida/Huevos_Rotos.png';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Huevos rotos con jamón
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Huevos_Rotos.png">ver</a>
                            <h3>€ 8,80</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" onerror="this.onerror=null;this.src='';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Melón con jamón
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 9,50</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">

                        <img src="./media/webp/png/comida/Calamares_A_La_Romana.webp" onerror="this.onerror=null;this.src='./media/png/comida/Calamares_A_La_Romana.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Calamares a la Romana
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Calamares_A_La_Romana.webp">ver</a>
                            <h3>€ 11,20</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="./media/webp/png/comida/Sepia.webp" onerror="this.onerror=null;this.src='./media/png/comida/Sepia.png';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Sepia a la plancha
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Sepia.png">ver</a>
                            <h3>€ 12,50</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" onerror="this.onerror=null;this.src='';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Tabla de quesos
                        </h2>
                        <p>(Curado, semicurado, tierno)</p>

                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 18,50</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">

                        <img src="./media/webp/png/comida/Tabla_De_Embutido_Iberico.webp" onerror="this.onerror=null;this.src='./media/png/comida/Tabla_De_Embutido_Iberico.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Tabla de ibéricos
                        </h2>
                        <p>(jamón, chorizo, salchichón, Lomo y queso)</p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Tabla_De_Embutido_Iberico.png">ver</a>
                            <h3>€ 22,50</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="desayunos_box">

                <div class="title_principal" id="ensaladas">
                    <h2>Ensaladas</h2>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">

                        <img src="./media/webp/png/comida/Ensalada_Mixta.webp" onerror="this.onerror=null;this.src='./media/png/comida/Ensalada_Mixta.png';" alt="">


                    </div>
                    <div class="txt_ctn">
                        <h2>Ensalada mixta
                        </h2>
                        <p></p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Ensalada_Mixta.png">ver</a>
                            <h3>€ 6,70</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">

                        <img src="./media/webp/png/comida/Ensalada_De_Tomate.webp" onerror="this.onerror=null;this.src='./media/png/comida/Ensalada_De_Tomate.png';" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Ensalada con bonito
                        </h2>
                        <p>con bonito</p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Ensalada_De_Tomate.png">ver</a>
                            <h3>€ 8,20</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">

                        <img src="./media/webp/png/comida/Ensalada_De_Cabrales.webp" onerror="this.onerror=null;this.src='./media/png/comida/Ensalada_De_Cabrales.png';" alt="">

                    </div>
                    <div class="txt_ctn">
                        <h2>Ensalada gourmet
                        </h2>
                        <p>con queso de cabra</p>

                        <div class="precio_ctn">
                            <a href="./media/png/comida/Ensalada_De_Cabrales.png">ver</a>
                            <h3>€ 10,50</h3>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <?php include("./includes/footer.php") ?>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modal-img" src="" onerror="this.onerror=null;this.src='';" alt="">
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 2, // Muestra al menos dos elementos a la vez

            centeredSlides: true, // Centra los elementos visibles
            effect: 'slide', // Cambia el efecto de transición a "fade"


            autoplay: {
                delay: 4000, // Tiempo en milisegundos entre deslizamientos
                disableOnInteraction: false, // Evita que se detenga cuando el usuario interactúa
            },

        });


        // Obtener elementos del DOM
        const modal = document.getElementById("myModal");
        const modalImg = document.getElementById("modal-img");
        const modalTitle = document.getElementById("modal-title");
        const modalDescription = document.getElementById("modal-description");

        // Elementos que abren el modal
        const openButtons = document.querySelectorAll(".plato_item a");

        // Elemento para cerrar el modal
        const closeButton = document.querySelector(".close");

        // Función para abrir el modal
        function openModal(event) {
            event.preventDefault();
            modal.style.display = "block";
            src_img = event.currentTarget.parentElement.parentElement.parentElement.querySelector("img").src;
            modalImg.src = src_img;
            modalTitle.textContent = event.currentTarget.parentElement.parentElement.querySelector("h2").textContent;
            modalDescription.textContent = event.currentTarget.parentElement.parentElement.querySelector("p").textContent;
        }

        // Función para cerrar el modal
        function closeModal() {
            modal.style.display = "none";
        }

        // Agregar eventos a los botones "ver" y al botón de cierre
        openButtons.forEach((button) => {
            button.addEventListener("click", openModal);
        });

        closeButton.addEventListener("click", closeModal);

        // Cerrar el modal si se hace clic fuera de él
        window.addEventListener("click", (event) => {
            if (event.target == modal) {
                closeModal();
            }
        });
    </script>

</body>

</html>