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
<section class="descerBack" id="alta">
	<div class="root">
		<h3 class="tilteSec">Em alta</h3>
		<div class="carro">
			<img onclick="carroLeft()" src="imgs/icons/arrow-left-black.svg">
			<div id="postsCarro">
				<?php

				for ($i=0; $i<sizeof($posts); $i++) { 
					getPost($posts[$i]);
				}

				?>
			</div>
			<img onclick="carroRight()" src="imgs/icons/arrow-right-black.svg">
		</div>
		<div class="sobre">
			<h3 class="tilteSec">Sobre nós</h3>
			<p>Na REMEI você encontrará metodologias de ensino atuais, metodologias ativas, inovadoras e ainda ferramentas tecnológicas e computacionais para aplicação no processo de ensino em sala de aula. Nosso objetivo é desmistificar a tecnologia e a computação para os docentes e incentivar seu uso em sala de aula, mostrando que todo professor é capaz de dominar metodologias inovadoras de ensino, que também podem fazer uso de informática e computação no seu processo. </p>
		</div>
	</div>
</section>