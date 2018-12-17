<section class="buscaSec" id="buscaSec">
	<div class="root">
		<div class="infos">
			<p><img src="imgs/icons/person-white.svg"><a href="perfil?user=<?php echo $dados['autorId']; ?>"> <?php echo $dados['autor']; ?></a></p>
			<p><img src="imgs/icons/calendar-white.svg"> <?php echo date_format(date_create($dados['data']),"d/m/Y"); ?></p>
			<p><img src="imgs/icons/tag-white.svg"> <?php echo $dados['metodologia']." ".$dados['area']; ?></p>
		</div>
	</div>
</section>
<section class="descerBack">
	<div class="root">
		<h3 class="tilteSec"><?php echo $dados['titulo']; ?></h3>
		<div class="sobre">			
			<p><?php echo $dados['resumo']; ?></p>
			<p><?php echo $dados['descricao']; ?></p>
		</div>
	</div>
	<div class="root rancom">
		<div class="ranking">
			<div class="rank">
				<h4>Avalie esse post</h4>
				<div>
					<?php estrelas($dados['ranking'], $user, $post, $rankAtual); ?>
				</div>
			</div>
			<div class="comentarios">
				<h3 class="tilteSec">Comentários</h3>
				<div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php
/*
<section>
	<div class="root">
		<div>
			<div class="postImg">
				<img src="imgs/post/0.jpg">
			</div>
			<div class="postInfos">
	 			<div><img src="imgs/icons/person-white.svg"><a href="perfil?user=<?php echo $dados['autorId']; ?>"> <?php echo $dados['autor']; ?></a></div>
	 			<div><img src="imgs/icons/calendar-white.svg"> <?php echo date_format(date_create($dados['data']),"d/m/Y"); ?></div>
	 			<div><img src="imgs/icons/tag-white.svg"> <?php echo $dados['metodologia']." ".$dados['area']; ?></div>
			</div>
			<div class="postTexts">
				<h3><?php echo $dados['titulo']; ?></h3>
				<p class="resumo"><?php echo $dados['resumo']; ?></p>
				<p class="descricao"><?php echo $dados['descricao']; ?></p>
			</div>
		</div>
		<div class="ranking">
			<div class="rank">
				<h4>Avalie esse post</h4>
				<div>
					<?php estrelas($dados['ranking'], $user, $post, $rankAtual); ?>
				</div>
			</div>
			<div class="comentarios">
				<h3>Comentários</h3>
				<div>
					
				</div>
			</div>
		</div>
	</div>
</section>*/?>