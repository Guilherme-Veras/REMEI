<section>
	<div class="root">
		<h5>Exibindo resultados para: <i><?php echo $_GET['busca']; ?></i></h5>
		<form class="filtros" method="GET" id="searchForm">
			<input type="hidden" name="busca" value="<?php echo $_GET['busca']; ?>">
			<input type="hidden" name="filtro" id="filtroValue" value="<?php echo $_GET['filtro']; ?>">
			<label>Filtro: </label>
			<ul>
				<li onclick="changeFiltro(0)" class="filtros <?php if($_GET['filtro']==0) echo 'selected'; ?>">Todos</li>
				<li onclick="changeFiltro(1)" class="filtros <?php if($_GET['filtro']==1) echo 'selected'; ?>">Área</li>
				<li onclick="changeFiltro(2)" class="filtros <?php if($_GET['filtro']==2) echo 'selected'; ?>">Autor</li>
				<li onclick="changeFiltro(3)" class="filtros <?php if($_GET['filtro']==3) echo 'selected'; ?>">Metodologia</li>
				<li onclick="changeFiltro(4)" class="filtros <?php if($_GET['filtro']==4) echo 'selected'; ?>">Título</li>
			</ul>
		</form>
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
	</div>
</section>