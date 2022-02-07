<?php
// HEADER
$page = 'Topico03';
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
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">
                        <h2 class="Titulo">Planejamento de Metas</h2>
                        <hr>

                        <h4>Clique nos botões para saber passo a passo de como planejar melhor suas metas: </h4>
                        <br>
                        <div class="row">
                            <!-- Button trigger modal -->
                            <div class="col">
                                <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#modal1">
                                    1º PASSO
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel " aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                Não tenha medo de definir metas grandiosas.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"><button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#modal2">
                                    <h5>2º PASSO</h5>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <strong>Descrever em detalhes qual a sua meta: </strong> Quanto mais descrever a meta, melhor será para conseguir alcançá-la, pois você saberá exatamente aonde você quer chegar.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"><button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModal">
                                    3º PASSO
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <strong>Descrever em detalhes qual a sua meta: </strong> Quanto mais descrever a meta, melhor será para conseguir alcançá-la, pois você saberá exatamente aonde você quer chegar.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>


                            <div class="col"><button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModal">
                                    4º PASSO
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <strong>Descrever em detalhes qual a sua meta: </strong> Quanto mais descrever a meta, melhor será para conseguir alcançá-la, pois você saberá exatamente aonde você quer chegar.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"><button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModal">
                                    5º PASSO
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <strong>Descrever em detalhes qual a sua meta: </strong> Quanto mais descrever a meta, melhor será para conseguir alcançá-la, pois você saberá exatamente aonde você quer chegar.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><br><br><br>

                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $('#myModal').on('shown.bs.modal', function() {
                                $('#myInput').trigger('focus')
                            })

                            $(document).ready(function() {
                                $("#awnser").submit(function(e) {
                                    e.preventDefault();

                                    const resultado = {
                                        selecionado: $("input:checked")[0],
                                        certo: $("[data-resultado='true")[0],
                                    }

                                    if (resultado.selecionado == resultado.certo) {
                                        $(resultado.selecionado).parent().addClass("resultado_certo");
                                    } else {
                                        $(resultado.selecionado).parent().addClass("resultado_errado");
                                        $(resultado.certo).parent().addClass("resultado_certo");
                                    }
                                    $("input[type=submit]").prop("disabled", true);

                                })
                            });
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>