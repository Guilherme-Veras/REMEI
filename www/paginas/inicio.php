<section class="buscaSec" id="buscaSec">
	<div class="root">
		<form action="busca" method="GET" id="buscarForm">
			<input type="hidden" name="busca" id="searchInputFinal">
			<input type="hidden" name="filtro" id="filtroInputFinal">
		</form>
		<div>
			<h2>REDE DE EDUCAÇÃO E METODOLOGIA DE ENSINO INOVADORAS</h2>
			<div class="inputsSearch">
				<input type="text" onkeyup="runOnEnter(event, buscar)" maxlength="50" class="searchInput" id="searchInput" placeholder="Pesquise aqui">
				<select class="filtrosMobile mobile	">
					<option>Todos</option>
					<option>Área</option>
					<option>Autor</option>
					<option>Metodologia</option>
					<option>Título</option>
				</select>
				<input type="submit" onclick="buscar()" class="searchSubmit" value="Buscar">
			</div>
			<div class="inputsFiltros web">
				<label>Filtrar por:</label>
				<input type="hidden" id="filtrosValue" value="0">
				<ul>
					<li onclick="changeFiltro(0)" class="filtros selected">Todos</li>
					<li onclick="changeFiltro(1)" class="filtros" >Área</li>
					<li onclick="changeFiltro(2)" class="filtros" >Autor</li>
					<li onclick="changeFiltro(3)" class="filtros" >Metodologia</li>
					<li onclick="changeFiltro(4)" class="filtros" >Título</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="descerBack">
	<div class="root">
		<h3 class="tilteSec">Em alta</h3>
		<div>
			<?php

			for ($i=0; $i<sizeof($posts); $i++) { 
				?>
					<div class="blog-card">
					 	<div class="meta">
					 		<div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
					 		<ul class="details">
					 			<li class="author"><img src="imgs/icons/person-white.svg"><a href="perfil?user=<?php echo $posts[$i]['autorId']; ?>"> <?php echo $posts[$i]['autor']; ?></a></li>
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
		<div class="sobre">
			<h3 class="tilteSec">Sobre nós</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</section>