<section>
	<div class="root">
		<div class="perfilInfos">
			<div class="imgPerfil">
				<img src="imgs/perfil/0.png">
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
					<p id="perfLatt"><?php echo $dados['usu_lattes']; ?></p>
				</div>
			</div>
		</div>
		<div>
			<?php

			for ($i=0; $i<sizeof($posts); $i++) { 
				?>
					<div class="blog-card">
					 	<div class="meta">
					 		<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
					 		<ul class="details">
					 			<li class="author"><img src="imgs/icons/person-white.svg"><a href="#"> <?php echo $posts[$i]['autor']; ?></a></li>
					 			<li class="date"><img src="imgs/icons/calendar-white.svg"> <?php echo date_format(date_create($posts[$i]['data']),"d/m/Y"); ?></li>
					 			<li class="tags">
					 				<ul>
							            <li><img src="imgs/icons/tag-white.svg"> <?php echo $posts[$i]['metodologia']; ?></li>
							            <li><?php echo $posts[$i]['area']; ?></li>
							        </ul>
							    </li>
							</ul>
					    </div>
					    <div class="description">
					      <h1><?php echo $posts[$i]['titulo']; ?></h1>
					      <!--h2>Opening a door to the future</h2-->
						  <p><?php echo $posts[$i]['resumo']; ?></p>
							<p class="card-rodape">
								<fieldset class="rating">
									<?php estrelas($posts[$i]['ranking'], 0, 0) ?>
								</fieldset>

								<p class="read-more">
									<a class="read-more-link" href="post?post=<?php echo $posts[$i]['id']; ?>">Ler mais </a>
								</p>
							</p>
					    </div> 
					</div>
				<?php
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
				<input type="text" id="editNome" placeholder="Digite seu nome" value="<?php echo $dados['usu_nome']; ?>">
				<label>Descrição:</label>
				<textarea id="editDesc" placeholder="Digite um breve descrição da sua vida academica"><?php echo $dados['usu_descricao']; ?></textarea>
				<label>Instituição:</label>
				<input type="text" id="editInst" placeholder="Digite sua instituição" value="<?php echo $dados['usu_instituicao']; ?>">
				<label>Lattes:</label>
				<input type="text" id="editLattes" placeholder="Digite seu Lattes" value="<?php echo $dados['usu_lattes']; ?>">
				<div>
					<input type="submit" onclick="editar()" value="Salvar">
				</div>
			</div>
		</div>
	</div>
</div>