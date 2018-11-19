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
			<div class="blog-card">
			 	<div class="meta">
			 		<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
			 		<ul class="details">
			 			<li class="author"><img src="imgs/icons/person-white.svg"><a href="#"> Giani</a></li>
			 			<li class="date"><img src="imgs/icons/calendar-white.svg"> 11/11/2018</li>
			 			<li class="tags">
			 				<ul>
					            <li><img src="imgs/icons/tag-white.svg"> <a href="#">Learn</a></li>
					            <li><a href="#">Code</a></li>
					            <li><a href="#">HTML</a></li>
					            <li><a href="#">CSS</a></li>
					        </ul>
					    </li>
					</ul>
			    </div>
			    <div class="description">
			      <h1>Titulo titulo</h1>
			      <!--h2>Opening a door to the future</h2-->
				  <p>
					Descricap Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation.
					</p>
					<p class="card-rodape">
						<fieldset class="rating">
							<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
						</fieldset>

						<p class="read-more">
							<a class="read-more-link" href="#">Ler mais </a>
						</p>
					</p>
			    </div>
			</div>
			<div class="blog-card">
			 	<div class="meta">
			 		<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
			 		<ul class="details">
			 			<li class="author"><img src="imgs/icons/person-white.svg"><a href="#"> Giani</a></li>
			 			<li class="date"><img src="imgs/icons/calendar-white.svg"> 11/11/2018</li>
			 			<li class="tags">
			 				<ul>
					            <li><img src="imgs/icons/tag-white.svg"> <a href="#">Learn</a></li>
					            <li><a href="#">Code</a></li>
					            <li><a href="#">HTML</a></li>
					            <li><a href="#">CSS</a></li>
					        </ul>
					    </li>
					</ul>
			    </div>
			    <div class="description">
			      <h1>Titulo titulo</h1>
			      <!--h2>Opening a door to the future</h2-->
				  <p>
					Descricap Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation.
					</p>
					<p class="card-rodape">
						<fieldset class="rating">
							<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
						</fieldset>

						<p class="read-more">
							<a class="read-more-link" href="#">Ler mais </a>
						</p>
					</p>
			    </div>
			</div>
			<div class="blog-card">
			 	<div class="meta">
			 		<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
			 		<ul class="details">
			 			<li class="author"><img src="imgs/icons/person-white.svg"><a href="#"> Giani</a></li>
			 			<li class="date"><img src="imgs/icons/calendar-white.svg"> 11/11/2018</li>
			 			<li class="tags">
			 				<ul>
					            <li><img src="imgs/icons/tag-white.svg"> <a href="#">Learn</a></li>
					            <li><a href="#">Code</a></li>
					            <li><a href="#">HTML</a></li>
					            <li><a href="#">CSS</a></li>
					        </ul>
					    </li>
					</ul>
			    </div>
			    <div class="description">
			      <h1>Titulo titulo</h1>
			      <!--h2>Opening a door to the future</h2-->
				  <p>
					Descricap Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation.
					</p>
					<p class="card-rodape">
						<fieldset class="rating">
							<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
						</fieldset>

						<p class="read-more">
							<a class="read-more-link" href="#">Ler mais </a>
						</p>
					</p>
			    </div>
			</div>
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