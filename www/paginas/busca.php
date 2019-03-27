<!-- Capa -->
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('imgs/capa/bg_buscar.jpg')">
        <div class="container">
            <div class="row row-buscar">
                <div class="col-lg-6 buscar-filtros">
                    <div class="row row-buscar-filtros-geral mb-3">

                       <div class="row row-buscar-filtros-h3 d-flex justify-content-center">
                            <h3>Filtros</h3>
                        </div>

                        <div class="row row-buscar-filtros-span ">
                            <span class="">Buscar Por:</span>
                        </div>

                        <div class="row row-buscar-filtros-check">
                            <div class="col-lg-4 col-md-4 align-middle">
                                <label class="check check-filtro check-active" id="checkTodos">
                                    <div class="my-check">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <input class="" id="chk-checkTodos" type="checkbox" onclick="defFiltro(0)" value="" checked> Todos
                                </label>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div>
                                    <label class="check check-filtro checkFiltro check-active" id="lbl-area" onclick="myChecked('lbl-area', 'chk-area')">
                                        <div class="my-check">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <input class="chk-checkFiltro" id="chk-area" onclick="defFiltro(1)" type="checkbox" value="" checked> Área
                                    </label>
                                </div>
                                <div>
                                    <label class="check check-filtro checkFiltro check-active" id="lbl-autor" onclick="myChecked('lbl-autor', 'chk-autor')">
                                        <div class="my-check">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <input class="chk-checkFiltro" id="chk-autor" onclick="defFiltro(2)" type="checkbox" value="" checked> Autor
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div>
                                    <label class="check check-filtro checkFiltro check-active" id="lbl-metodologia" onclick="myChecked('lbl-metodologia', 'chk-metodologia')">
                                        <div class="my-check">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <input class="chk-checkFiltro" id="chk-metodologia" onclick="defFiltro(3)" type="checkbox" value="" checked> Metodologia
                                    </label>
                                </div>
                                <div>
                                    <label class="check check-filtro checkFiltro check-active" id="lbl-post" onclick="myChecked('lbl-post', 'chk-post')">
                                        <div class="my-check">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <input class="chk-checkFiltro" id="chk-post" onclick="defFiltro(4)" type="checkbox" value="" checked> Post
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 buscar-campos">
                    <h3>Buscaaaaaaaaar!</h3>
                    <form class="input-group" method="get" accept-charset="utf-8">
                        <input type="hidden" name="filtro" id="filtroId" value="0">
                        <div class="form-group bmd-form-group align-middle">
                            <label for="exampleInput1" class="bmd-label-floating">
                                Busque Agora! :)
                            </label>
                            <input class="form-control" name="busca" id="exampleInput1">
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

    <!-- Conteúdo -->
    <div class="main main-raised conteudo-busca">
        <div class="container">
            <div class="section text-center">
                <h2>Foram encontrados</h2>
            </div>
            <div class="card card-nav-tabs card-plain">
                <!--div class="card-header card-header-primary "-->
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <!--div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">

                                <li class="nav-item" id="link-posts">
                                    <a class="nav-link active show" href="#Posts" data-toggle="tab">
                                        Posts
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item"  id="link-metodologia">
                                    <a class="nav-link" href="#Metodologias" data-toggle="tab">
                                        Metodologias
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item" id="link-autores">
                                    <a class="nav-link" href="#Autores" data-toggle="tab">
                                        Autores
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div-->

                <div class="card-body ">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="Posts">
                            <span> Aproximadamente <?php echo sizeof($posts)?> resultados<br></span>

                            <?php
                            if(sizeof($posts)==0){
                                echo "Não foi achado nenhum post";
                            }
                            for ($i=0; $i<sizeof($posts) and $i<10; $i++) { 
                                getPost($posts[$i]);
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
