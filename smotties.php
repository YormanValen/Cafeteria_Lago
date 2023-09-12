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
    <link rel="stylesheet" href="style/smotties.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <title>Smotties</title>
</head>

<body>
    <?php include("./includes/header.php") ?>
    <main>

        <section class="plato_section">

            <div class="platos_box">

                <div class="title" id="postres">
                    <h2>Smotties</h2>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Piña colada</h2>
                        <p>(piña-coco)</p>
                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 4.90</h3>
                        </div>
                    </div>
                </div>


                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Mango fresc</h2>
                        <p>(mango pera)</p>
                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 4.90</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Natural Green</h2>
                        <p>( brócoli, espinaca, apio, plátano,piña, mango)</p>
                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 4.90</h3>
                        </div>
                    </div>
                </div>


                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Red banana</h2>
                        <p>( fresa-plátano)</p>
                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 4.90</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Peach paradise</h2>
                        <p>( Melocotón, papaya y fresa)</p>
                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 4.90</h3>
                        </div>
                    </div>
                </div>

                <div class="plato_item">
                    <div class="img_ctn">
                        <img src="" alt="">
                    </div>
                    <div class="txt_ctn">
                        <h2>Tropic mix</h2>
                        <p>( piña, papaya, mango)</p>
                        <div class="precio_ctn">
                            <a href="">ver</a>
                            <h3>€ 4.90</h3>
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
            <img id="modal-img" src="" alt="">
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

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