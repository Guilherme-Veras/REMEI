<header>
	<div class="webHeader">
		<div class="logo">
			<img src="imgs/logo/logo-remei-black.png">
		</div>
		<div class="nav">
			<ul>
				<li onclick="redir('inicio')">Home</li>
				<li onclick="redir('objetivos')">Objetivos</li>
				<li onclick="redir('alta')">Em alta</li>
				<li onclick="redir('integrantes')">Integrantes</li>
			</ul>
		</div>
		<div class="login">
			<div class="deslogado <?php if($user != 0){ echo 'hidden'; } ?>">
				<p>Entrar/Cadastrar</p>
			</div>
			<div class="logado <?php if($user == 0){ echo 'hidden'; } ?>" id="logadoDiv">
				<img src="imgs/perfil/0.png">
				<p onclick="openDropLogin()"><?php echo $userNome; ?><img src="imgs/icons/arrow-drop-down-black.svg"></p>
				<div class="dropLogin hidden" id="dropLogin">
					<ul>
						<li onclick="redir('perfil')">Ver Perfil</li>
						<hr>
						<li onclick="redir('editPerfil')">Editar Perfil</li>
						<hr>
						<li onclick="redir('novoPost')">Novo Post</li>
						<hr>
						<li onclick="redir('?loggout=1')">Sair</li>
					</ul>
				</div>
			</div>
			<script type="text/javascript">
				function openDropLogin() {
					document.getElementById('dropLogin').classList.toggle('hidden');
					document.getElementById('dropLogin').style.width = document.getElementById('logadoDiv').offsetWidth + "px";
				}
			</script>
		</div>
	</div>
	<div class="mobileHeader">
		<div class="logo">
			<img src="imgs/logo/logo-remei-black.png">
		</div>
		<div class="menuOpener">
			<p onclick="mobileNavOpener()">&#9776;</p>
		</div>
	</div>
	<div class="mobileNav hidden" id="mobileNav">
		<div class="mobileNavDentro">
			<a class="closeModal" onclick="mobileNavOpener()">&times;</a>
			<ul>
				<li onclick="redir('inicio')">Home</li>
				<li onclick="redir('objetivos')">Objetivos</li>
				<li onclick="redir('alta')">Em alta</li>
				<li onclick="redir('integrantes')">Integrantes</li>
			</ul>

			<div class="deslogado <?php if($user != 0){ echo 'hidden'; } ?>">
				<p>Entrar/Cadastrar</p>
			</div>
			<div class="logado <?php if($user == 0){ echo 'hidden'; } ?>" id="logadoDiv">
				<div class="imgNome">
					<img src="imgs/perfil/0.png">
					<p onclick="openDropLogin()"><?php echo $userNome; ?></p>
				</div>
				<ul>
					<li onclick="redir('perfil')">Ver Perfil</li>
					<li onclick="redir('editPerfil')">Editar Perfil</li>
					<li onclick="redir('novoPost')">Novo Post</li>
					<li onclick="redir('?loggout=1')">Sair</li>
				</ul>
			</div>

		</div>
	</div>
	<script type="text/javascript">
		function mobileNavOpener() {
			document.getElementById('mobileNav').classList.toggle('hidden');
		}
	</script>
</header>
<div class="loginModal">
	
</div>