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
				getPost($posts[$i]);
			}

			?>
			
		</div>
	</div>
</section>