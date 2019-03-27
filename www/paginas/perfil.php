<div class="page-header header-filter" data-parallax="true" style="background-image: url('imgs/capa/bg_equipe.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand text-center capa capa-historia">
                        <h1><?php echo explode(" ", $dados['usu_nome'])[sizeof(explode(" ", $dados['usu_nome']))-1]?></h1>
                        <h2 class="title text-center"><?php echo $dados['usu_nome']; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Conteúdo -->
    <div class="main main-raised">
        <div class="container">
        <?php
            if($user == $perfUser){
        ?>
        <div class="editBtn"><img class="pointer" onclick="openEditModal()" src="imgs/icons/edit-black.svg"></div>
        <?php
            }
        ?>

            <div id="integrante-Giani" class="section integrante mb-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <p class="img-integrante"><img src="imgs/perfil/<?php echo $user; ?>.jpg" alt="Giani Ito" class="rounded-circle img-fluid mx-auto"></p>
                        </div>
                        <div class="row">
                            <p class="mt-3 <?php if (strlen($dados['usu_instituicao'])==0) { echo "hidden"; } ?>"><span class="negrito">Instituição: </span><span id="perfInst"><?php echo $dados['usu_instituicao']; ?></p>
                        </div>
                        <div class="row">
                            <p class="<?php if (strlen($dados['usu_lattes'])==0) { echo "hidden"; } ?>"><span class="negrito">Lattes: </span>
                           <a id="perfLatt" href="<?php echo $dados['usu_lattes']; ?>" target="_blank"><img src="imgs/icons/lattes.png" style="width: 20px;"><span id="perfLatt2"><?php echo strlen($dados['usu_lattes']); ?></span></a></p>
                        </div>
                        <div class="row">
                            <p><span class="negrito">Email:</span><a href="mailto:<?php echo $dados['usu_email']; ?>"> <?php echo $dados['usu_email']; ?></a></p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p id="perfDesc">
                            <?php echo $dados['usu_descricao']; ?>
                        </p>
                    </div>
                </div>
            </div>

          
            <div class="section colaboradores text-center">
                <h2 class="title">Posts de <?php echo $dados['usu_nome']; ?></h2>

            <?php
                for ($i=0; $i<sizeof($posts); $i++) { 
                    getPost($posts[$i]);
                } 
            ?>

            </div>

        </div>
    </div>
<div class="editModal modal1 hidden" id="editModal">
    <div class="modalRoot">
        <div class="selectType">
            <h3>Editar perfil</h3>
            <a class="closeModal" onclick="openEditModal()">&times;</a>
        </div>
        <div class="entradas" id="login0">
            <div>
                <label>Nome:</label>
                <input type="text" maxlength="30" onkeyup="blockIlegalCharacter(this); runOnEnter(event, editar)" id="editNome" placeholder="Digite seu nome" value="<?php echo $dados['usu_nome']; ?>">
                <label class="erro hidden" id="nomeErro">Campo obrigatorio</label>
                <label class="erro hidden" id="nomeErro2">Informe o nome completo</label>
                <label>Descrição:</label>
                <textarea id="editDesc" maxlength="300" onkeyup="blockIlegalCharacter(this); runOnEnter(event, editar)" placeholder="Digite um breve descrição da sua vida academica"><?php echo $dados['usu_descricao']; ?></textarea>
                <label>Instituição:</label>
                <input type="text" maxlength="50" onkeyup="blockIlegalCharacter(this); runOnEnter(event, editar)" id="editInst" placeholder="Digite sua instituição" value="<?php echo $dados['usu_instituicao']; ?>">
                <label>Lattes:</label>
                <input type="text" maxlength="40" onkeyup="runOnEnter(event, editar)" id="editLattes" placeholder="Digite seu Lattes (http://lattes.cnpq.br/0000000000000000)" value="<?php echo $dados['usu_lattes']; ?>">
                <label class="erro hidden" id="lattesErro">Link inválido</label>
                <div>
                    <input type="submit" onclick="editar()" value="Salvar">
                </div>
            </div>
        </div>
    </div>
</div>