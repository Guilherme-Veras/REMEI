
    <!-- Capa -->
   <div class="page-header header-filter" data-parallax="true" style="background-image: url('imgs/capa/bg_padrao.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto ">
                    <div class="brand text-center capa">
                        <h1><?php echo $dados['titulo']; ?></h1>
                        <!-- <h3 class="title text-center">Nome do(a) autor(a)</h3> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Conteúdo -->
    <div class="main main-raised">
        <!-- area-buscar  -->
        <div class="section section-TextoPost">
            <div class="container">
                <!-- <h2 class="title">Buscar</h2> -->
                <div class="row">
                    <div class="col-3">
                        <p class="mt-1">
                            <a href="perfil?user=<?php echo $dados['autor_id']; ?>"">
                                <p class="img m-1">
                                    <img src="imgs/perfil/<?php echo $dados['autor_id']; ?>.jpg" alt="Giani Ito" class="rounded-circle img-fluid mx-auto">
                                </p>
                                    <?php echo $dados['autor']; ?>
                            </a>
                        </p>
                    </div>

                    <div class="col-9">
                        <div class="row mb-2 d-flex justify-content-end">
                            <span class="">Postado em <?php echo date_format(date_create($dados['data']),"d/m/Y"); ?></span>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <?php
                                if ($dados['autor_id']==$user) {
                                    ?>
                                        <a href="editPost?i=<?php echo $dados["pos_id"]; ?>"><i class="fas fa-pencil-alt mr-3"></i></a>
                                        <i class="fas fa-trash-alt" onclick="delPost(<?php echo $dados["pos_id"]; ?>)"></i>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-6"><p> <span class="negrito">Metodologia: </span><?php echo $dados['metodologia']; ?></p></div>
                    <div class="col-6"><p> <span class="negrito">Área: </span><?php echo $dados['area']; ?></p></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>
                            <?php echo $dados['resumo']; ?>
                        </p>
                        <p>
                            <?php echo $dados['descricao']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <hr> -->
        <!-- area-EmAlta  -->
        <!--div id="area-EmAlta" class="section section-Comentarios">
            <div class="container">
                <h2 class="title">Comentários</h2>
                <div class="row ">

                </div>
            </div>
        </div-->
    </div>
