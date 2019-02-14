<section class="buscaSec" id="buscaSec">
	<div class="root">
		<div class="infos">
			<p><img src="imgs/icons/person-white.svg"><a href="perfil?user=<?php echo $user; ?>"> <?php echo $userNome; ?></a></p>
			<p><img src="imgs/icons/calendar-white.svg"> <?php echo date_format(date_create($dados['data']),"d/m/Y"); ?></p>
			<p onclick="openMetoModal()"><img src="imgs/icons/tag-white.svg"> <span id="metoAreaSpan"><?php echo $dados['metodologia']." - ".$dados['area']; ?></span></p>
		</div>
	</div>
</section>
<section class="descerBack">
	<div class="root">
		<form method="post" id="sumbitForm">
			<input type="hidden" id="metoFinal" name="metodologia" value="<?php echo $dados['met_id']; ?>">
			<input type="hidden" id="areaFinal" name="area" value="<?php echo $dados['are_id']; ?>">
			<input type="hidden" id="randFinal" name="rand" value="0">
			<input type="text" name="titulo" class="titInp" onblur="resuRefil(this)" value="<?php echo $dados['titulo']; ?>">
			<div class="sobre">		
				<textarea name="resumo" onkeydown="resizeTextArea(this)" onblur="resuRefil(this)"><?php echo $dados['resumo']; ?></textarea>
				<textarea name="descricao" onkeydown="resizeTextArea(this)" onblur="resuRefil(this)"><?php echo $dados['descricao']; ?></textarea>
			</div>
			<div class="files">
				<div id="caixaDeDrop" class="caixaDeDrop">
					<p>Arreste imagens e videos para aqui</p>
				</div>
				<div id="result" class="result">
					
				</div>
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
				<input type="hidden" id="metodolNome">
				<div id="caixaBuscaMeto" class="caixaBusca">
				</div>
			</div>
			<div>
				<label>Area:</label>
				<input type="text" onkeyup="areaEntra(this)" id="metoArea" placeholder="Digite o nome da area">
				<input type="hidden" id="areass">
				<input type="hidden" id="areassNome">
				<div id="caixaBuscaArea" class="caixaBusca">
					
				</div>
			</div>
		</div>
		<div class="btnAreaMeto">
			<input type="submit" onclick="salvarMetoArea()" value="Salvar">
		</div>
	</div>
</div>