<section>
	<div class="root">
		<div class="perfilInfos">
			<div class="imgPerfil">
				<img id="imgPerf" src="imgs/perfil/<?php echo $user; ?>.jpg" onclick="openImg()">
				<label onclick="openImg()">Trocar foto</label>
				<input type="file" class="hidden" id="imgUpload" onchange="setImg(event, <?php echo $user; ?>)">
			</div>
			<div class="perfilText">
				<?php
					if ($user == $perfUser) {
				?>
				<img class="edit" onclick="openEditModal()" src="imgs/icons/edit-black.svg">
				<?php
					}
				?>
				<div>
					<h3 id="perfNome" class="Nome"><?php echo $dados['usu_nome']; ?></h3>
					<hr>
					<p id="perfDesc" class="descricao"><?php echo $dados['usu_descricao']; ?></p>
				</div>
				<div class="uniLat">
					<p id="perfInst"><?php echo $dados['usu_instituicao']; ?></p>
					<p><a target="_black" id="perfLatt" href="<?php echo $dados['usu_lattes']; ?>"><?php if(strlen($dados['usu_lattes'])>0){ echo "Link Lattes"; } ?></a></p>
				</div>
			</div>
		</div>
		<div>
			<?php

			for ($i=0; $i<sizeof($posts); $i++) { 
				getPost($posts[$i]);
			}

			?>
		</div>
	</div>
</section>
<div class="editModal modal hidden" id="editModal">
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
				<label>Descrição:</label>
				<textarea id="editDesc" maxlength="300" onkeyup="blockIlegalCharacter(this); runOnEnter(event, editar)" placeholder="Digite um breve descrição da sua vida academica"><?php echo $dados['usu_descricao']; ?></textarea>
				<label>Instituição:</label>
				<input type="text" maxlength="40" onkeyup="blockIlegalCharacter(this); runOnEnter(event, editar)" id="editInst" placeholder="Digite sua instituição" value="<?php echo $dados['usu_instituicao']; ?>">
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