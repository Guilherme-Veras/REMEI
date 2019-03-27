
                <form method="post" id="sumbitForm">
    <!-- Capa -->
   <div class="page-header header-filter" data-parallax="true" style="background-image: url('imgs/capa/bg_padrao.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto ">
                    <div class="brand text-center capa">
                        <h1><input type="text" name="titulo" class="titInp" id="titInp" onblur="resuRefil(this)" value="Clique para alterar o titulo"></h1>
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
                            <a href="">
                                <p class="img m-1">
                                    <img src="imgs/perfil/<?php echo $user; ?>.jpg" alt="Giani Ito" class="rounded-circle img-fluid mx-auto">
                                </p>
                                    <?php echo $userNome; ?>
                            </a>
                        </p>
                    </div>

                    <div class="col-9">
                        <div class="row mb-2 d-flex justify-content-end">
                            <span class="">Postado em <?php echo date("d/m/Y"); ?></span>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-6"><p onclick="openMetoModal()"> <span class="negrito">Metodologia: </span><span id="metoSpan">Clique para selecionar</span></p></div>
                    <div class="col-6"><p onclick="openAreaModal()"> <span class="negrito">Área: </span><span id="areaSpan">Clique para selecionar</span></p></div>
                </div>
                <div class="row">
                    <input type="hidden" id="metoFinal" name="metodologia" value="0">
                    <input type="hidden" id="areaFinal" name="area" value="0">
                    <input type="hidden" id="randFinal" name="rand" value="0">
                    <div class="col-12">
                        <p>
                            <textarea name="resumo" class="textAreaNovoPost" onkeydown="resizeTextArea(this)" onblur="resuRefil(this)">Clique para alterar o resumo</textarea>
                        </p>
                        <p>
                            <textarea name="descricao" class="textAreaNovoPost" onkeydown="resizeTextArea(this)" onblur="resuRefil(this)">Clique para alterar o texto</textarea>
                        </p>
                    </div>
                </div>
            </div>
                <div class="endNovoPostSubmit">
                   <input class="btn btn-primary btn-round" type="submit" onclick="submitForm()" value="Salvar">
                </div>

        </div>
        <!-- <hr> -->
        <!-- area-EmAlta  -->
        <!--div id="area-EmAlta" class="section section-Comentarios">
            <div class="container">
                <h2 class="title">Upload de arquivos</h2>
            <div class="files">
                <div id="caixaDeDrop" class="caixaDeDrop">
                    <p>Arreste imagens e videos para aqui</p>
                </div>
                <div id="result" class="result">
                </div>
            </div>
            </div>
        </div-->
    </div>

                </form>


<div class="newMetoModal modal1 hidden" id="metoModal">
    <div class="modalRoot">
        <div class="selectType">
            <h3>Metodologia</h3>
            <a class="closeModal" onclick="openMetoModal()">&times;</a>
        </div>
    
        <div class="entradas">
            <div>
                <label>Metodologia:</label>
                <input type="text" onkeyup="metoEntra(this)" id="metoNome" placeholder="Digite o nome da metodologia">
                <input type="hidden" id="metodol">
                <input type="hidden" id="metodolNome">
                <div id="caixaBuscaMeto" class="caixaBusca">
                </div>
            </div>
        </div>
        <div class="btnAreaMeto">
            <input type="submit" onclick="salvarMeto()" value="Salvar">
        </div>
    </div>
</div>

<div class="newMetoModal modal1 hidden" id="areaModal">
    <div class="modalRoot">
        <div class="selectType">
            <h3>Area</h3>
            <a class="closeModal" onclick="openAreaModal()">&times;</a>
        </div>
    
        <div class="entradas">
            <div>
                <label>Area:</label>
                <input type="text" onkeyup="areaEntra(this)" id="metoArea" placeholder="Digite o nome da area">
                <input type="hidden" id="areass">
                <input type="hidden" id="areassNome">
                <div id="caixaBuscaArea" class="caixaBusca">
                    
                </div>
            </div>
        </div>
        <div class="btnAreaMeto">
            <input type="submit" onclick="salvarArea()" value="Salvar">
        </div>
    </div>
</div>
