<section class="buscaSec" id="buscaSec">
	<div class="root">
		<div class="infos">
			<p><img src="imgs/icons/person-white.svg"><a href="perfil?user=<?php echo $user; ?>"> <?php echo $userNome; ?></a></p>
			<p><img src="imgs/icons/calendar-white.svg"> <?php echo date("d/m/Y"); ?></p>
			<p onclick="openMetoModal()"><img src="imgs/icons/tag-white.svg"> <span id="metoAreaSpan">Clique para selecionar uma metodologia e uma area</span></p>
		</div>
	</div>
</section>
<section class="descerBack">
	<div class="root">
		<form method="post" id="sumbitForm">
			<input type="hidden" id="metoFinal" name="metodologia" value="0">
			<input type="hidden" id="areaFinal" name="area" value="0">
			<input type="text" name="titulo" class="titInp" onblur="resuRefil(this)" value="Clique para alterar o titulo">
			<div class="sobre">		
				<textarea name="resumo" onkeydown="resizeTextArea(this)" onblur="resuRefil(this)">Clique para alterar o resumo</textarea>
				<textarea name="descricao" onkeydown="resizeTextArea(this)" onblur="resuRefil(this)">Clique para alterar o texto</textarea>
			</div>
		</form>
			<div class="sumbitDiv">
				<input class="sumbitBtn" onclick="submitForm()" type="submit" value="Publicar">
			</div>
	</div>
</section>
<div class="newMetoModal modal hidden" id="metoModal">
	<div class="modalRoot">
		<div class="selectType">
			<h3>Metodologia e Area</h3>
			<a class="closeModal" onclick="openMetoModal()">&times;</a>
		</div>
	
		<div class="entradas">
			<div>
				<label>Metodologia:</label>
				<input type="text" onkeyup="metoEntra(this)" id="metoNome" placeholder="Digite o nome da metodologia">
				<input type="hidden" id="metodol">
				<div id="caixaBuscaMeto" class="caixaBusca">
				</div>
			</div>
			<div>
				<label>Area:</label>
				<input type="text" onkeyup="areaEntra(this)" id="metoArea" placeholder="Digite o nome da area">
				<input type="hidden" id="areass">
				<div id="caixaBuscaArea" class="caixaBusca">
					
				</div>
			</div>
		</div>
		<div class="btnAreaMeto">
			<input type="submit" onclick="salvarMetoArea()" value="Salvar">
		</div>
	</div>
</div>




<?php 
/*

 <section>
	<div class="root">
		<h2>Novo post</h2>
		<form method="POST" id="sumbitForm">
			<input type="hidden" id="forTitulo"      name="titulo">
			<input type="hidden" id="forResumo"      name="resumo">
			<input type="hidden" id="forDescricao"   name="descricao">
			<input type="hidden" id="forMetodologia" name="metodologia">
			<input type="hidden" id="forArea"        name="area">
			<input type="hidden" name="novoPost"     value="1">
		</form>
		<div class="entradas">
			<label>Título</label>
			<input type="text" maxlength="50" id="inpTitulo">
			<div class="dois">
				<div>
					<label>Metodologias</label>
					<input type="text" id="selectorInp1" onkeydown="changeBySeta1(event, this)" onblur="setTimeout(someSelector1, 400);">
					<label class="selectorRes1 hidden" id="selectorRes1"></label>
					<input type="hidden" id="inpMetodologia">
					<div class="selector hidden" id="selector1">
					</div>
				</div>
				<div>
					<label>Áreas</label>
					<input type="text" id="selectorInp2" onkeydown="changeBySeta2(event, this)" onblur="setTimeout(someSelector2, 400);">
					<label class="selectorRes2 hidden" id="selectorRes2"></label>
					<input type="hidden" id="inpArea">
					<div class="selector hidden" id="selector2">
					</div>
				</div>
			</div>
			<label>Resumo</label>
			<textarea maxlength="500" id="inpResumo"></textarea>
			<label>Texto</label>
			<textarea id="inpDescricao"></textarea>
			<div>
				<input type="submit" onclick="submitForm()" value="Postar">
			</div>
		</div>
	</div>
</section>
<div class="newMetoModal modal hidden" id="metoModal">
	<div class="modalRoot">
		<div class="selectType">
			<h3>Nova metodologia</h3>
			<a class="closeModal" onclick="openMetoModal()">&times;</a>
		</div>
	
		<div class="entradas">
			<div>
				<label>Nome:</label>
				<input type="text" onkeyup="runOnEnter(event, criarMeto)" id="metoNome" placeholder="Digite o nome da metodologia">
				<label>descrição:</label>
				<textarea id="metoDesc" onkeyup="runOnEnter(event, criarMeto)" placeholder="Digite a descrição da metodologia"></textarea>
				<div>
					<input type="submit" onclick="criarMeto()" value="Criar">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="newAreaModal modal hidden" id="areaModal">
	<div class="modalRoot">
		<div class="selectType">
			<h3>Nova area</h3>
			<a class="closeModal" onclick="openAreaModal()">&times;</a>
		</div>
	
		<div class="entradas">
			<div>
				<label>Nome:</label>
				<input type="text" onkeyup="runOnEnter(event, criarArea)" id="areaNome" placeholder="Digite o nome da area">
				<div>
					<input type="submit" onclick="criarArea()" value="Criar">
				</div>
			</div>
		</div>
	</div>
</div>*/?>