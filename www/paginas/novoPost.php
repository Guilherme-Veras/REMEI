<section>
	<div class="root">
		<h2>Novo post</h2>
		<form method="POST">
			<input type="hidden" id="forTitulo"      name="titulo">
			<input type="hidden" id="forResumo"      name="resumo">
			<input type="hidden" id="forDescricao"   name="descricao">
			<input type="hidden" id="forMetodologia" name="metodologia">
			<input type="hidden" id="forAreas"       name="areas">
			<input type="hidden" name="novoPost"     value="1">
		</form>
		<div class="entradas">
			<label>Titulo</label>
			<input type="text" id="inpTitulo">
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
					<label>Areas</label>
					<input type="text" onkeydown="changeBySeta2(event, this)" onblur="setTimeout(someSelector2, 200);">
					<label class="selectorRes2 hidden" id="selectorRes2"></label>
					<input type="hidden" id="inpArea">
					<div class="selector hidden" id="selector2">
					</div>
				</div>
			</div>
			<label>Resumo</label>
			<textarea id="inpResumo"></textarea>
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
				<input type="text" id="metoNome" placeholder="Digite o nome da metodologia">
				<label>descrição:</label>
				<textarea id="metoDesc" placeholder="Digite a descrição da metodologia"></textarea>
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
				<input type="text" id="areaNome" placeholder="Digite o nome da area">
				<div>
					<input type="submit" onclick="criarArea()" value="Criar">
				</div>
			</div>
		</div>
	</div>
</div>