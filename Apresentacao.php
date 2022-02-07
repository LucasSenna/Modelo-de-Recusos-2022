<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">

            <div class="bg-cinza mb-5 mx-auto text-center">
                <img src="imagens/bgcapa.png" class="img-fluid img-t" alt="Capa do curso Gestão de Indicadores" width="600  " height="500">
            </div>

                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">



                    <h2 class="Titulo">Apresentação</h2>
                    <hr>



                    <br><br><!-- SCRIPT LIGHTBOX -->
                    <script>
                        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                            event.preventDefault();
                            $(this).ekkoLightbox();
                        });

                        $('#myModal').on('shown.bs.modal', function() {
                            $('#myInput').trigger('focus')
                        })
                    </script>

                </div> <!-- CLASS PAGE TITLE FIM -->

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
            <a href="Referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
        </div>

    </div> <!-- CONTEUDO FIM -->

    <!-- FOOTER -->
    <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>