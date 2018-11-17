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