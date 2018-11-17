<header>
	<div class="webHeader">
		<div class="logo">
			<img onclick="redir('inicio')" src="imgs/logo/logo-remei-black.png">
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
				<p onclick="openLoginModal()">Entrar/Cadastrar</p>
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
			<img onclick="redir('inicio')" src="imgs/logo/logo-remei-black.png">
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
				<p onclick="openLoginModal()">Entrar/Cadastrar</p>
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
<div class="loginModal hidden" id="loginModal">
	<div class="modalRoot">
		<div class="selectType">
			<ul>
				<li class="selected" id="loginSele0" onclick="chengeLoginTab(0)">Entrar</li>
				<li id="loginSele1" onclick="chengeLoginTab(1)">Cadastrar</li>
			</ul>
			<a class="closeModal" onclick="openLoginModal()">&times;</a>
		</div>
		<div class="entradas" id="login0">
			<div>
				<label>Email:</label>
				<input type="text" name="" placeholder="Digite seu email">
				<label>Senha:</label>
				<input type="password" name="" placeholder="Digite sua senha">
				<a>Esqueceu a senha?</a><br>
				<div>
					<input type="submit" name="" value="Entrar">
				</div>
			</div>
		</div>
		<div class="entradas hidden" id="login1">
			<div>
				<label>Nome:</label>
				<input type="text" name="" placeholder="Digite seu nome">
				<label>Email:</label>
				<input type="text" name="" placeholder="Digite seu email">
				<label>Lattes:</label>
				<input type="text" name="" placeholder="Coloque o link do seu Lattes">
				<label>Descrição:</label>
				<textarea placeholder="Digite um breve descrição sobre sua vida acadêmica"></textarea>
				<label>Senha:</label>
				<input type="password" name="" placeholder="Crie uma senha">
				<div>
					<input type="submit" name="" value="Cadastrar">
				</div>
			</div>			
		</div>
		<script type="text/javascript">
			function chengeLoginTab(i) {
				document.getElementById('loginSele0').classList.remove('selected');
				document.getElementById('loginSele1').classList.remove('selected');
				document.getElementById('loginSele'+i).classList.add('selected');

				document.getElementById('login0').classList.add('hidden');
				document.getElementById('login1').classList.add('hidden');
				document.getElementById('login'+i).classList.remove('hidden');
			}
		</script>
	</div>
</div>
<script type="text/javascript">
	function openLoginModal() {
		document.getElementById('loginModal').classList.toggle('hidden');
	}
	window.onclick = function(event) {
	    if (event.target == document.getElementById("loginModal")) {
	        openLoginModal();
	    }
	}
</script>