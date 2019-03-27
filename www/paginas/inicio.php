
    <!-- Capa -->
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('imgs/capa/bg_remei.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto ">
                    <div class="brand text-center capa-index">
                        <h1>REMEI</h1>
                        <h3 class="text-center">Rede de Educadores e Metodologias Inovadoras de Ensino</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Conteúdo -->
    <div class="main main-raised">
        <!-- area-buscar  -->
        <div id="area-buscar" class="section section-busca">
            <div class="container">
                <h2 class="title">Buscar</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <p>
                            <span class="destaque">Chega de chatice!</span> Procure a metodologia que melhor adapta à você e à seus alunos.
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <form class="input-group" action="busca" method="GET" accept-charset="utf-8">
                            <div class="form-group bmd-form-group align-middle">
                                <label for="exampleInput1" class="bmd-label-floating">
                                    Busque Agora! :)
                                </label>
                                <input name="busca" class="form-control" id="exampleInput1">
                                <span class="bmd-help">
                                    Pequisar metolodogias, posts ou docentes...
                                </span>
                            </div>
                            <div id="busca-index" class="input-group-prepend align-items-center">
                                <span class="input-group-text">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <hr> -->
        <!-- area-EmAlta  -->
        <div id="area-EmAlta" class="section section-EmAlta">
            <div class="container">
                <h2 class="title">Em Alta</h2>
                <div class="row ">

                    <div id="carouselExampleIndicators" class="carousel slide col-lg-12 mx-auto" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <?php

                            for ($i=0; $i<sizeof($posts); $i++) { 
                                ?>
                            <div class="carousel-item <?php if($i==0){ echo 'active'; } ?>">
                                <?php
                                getPost($posts[$i]);
                                ?>
                            </div>
                                <?php
                            }

                            ?>
                        </div>

                        <a class="carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fas fa-angle-left" style=""></i>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fas fa-angle-right" style=""></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>