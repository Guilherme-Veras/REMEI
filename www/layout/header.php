<header>
	<div class="webHeader">
		<div class="logo">
			<!--img onclick="redir('inicio')" src="imgs/logo/logo-remei-black.png"-->
			<a href="inicio"><img src="imgs/logo/logo-remei-semchapeu-branco.png"></a>
		</div>
		<div class="nav">
			<ul>
				<li><a href="inicio">Home</a></li>
				<li><a href="objetivos">Objetivos</a></li>
				<li><a href="alta">Em alta</a></li>
				<li><a href="integrantes">Integrantes</a></li>
			</ul>
		</div>
		<div class="login">
			<div class="deslogado <?php if($user != 0){ echo 'hidden'; } ?>" id="deslogado">
				<p onclick="openLoginModal()">Entrar/Cadastrar</p>
			</div>
			<div class="logado <?php if($user == 0){ echo 'hidden'; } ?>" id="logadoDiv">
				<img src="imgs/perfil/0.png" id="perfilImgWeb">
				<p onclick="openDropLogin()" id="perfilNomeWeb"><?php echo $userNome; ?><img src="imgs/icons/arrow-drop-down-white.svg"></p>
				<div class="dropLogin hidden" id="dropLogin">
					<ul>
						<li><a href="perfil?user=<?php echo $user; ?>">Ver Perfil</a></li>
						<hr>
						<li><a href="novoPost">Novo Post</a></li>
						<hr>
						<li onclick="logout()">Sair</li>
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
					<li onclick="redir('perfil?user=<?php echo $user; ?>')">Ver Perfil</li>
					<li onclick="redir('novoPost')">Novo Post</li>
					<li onclick="logout()">Sair</li>
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
				<input type="text" id="emailLogin" onkeyup="runOnEnter(event, logar)" placeholder="Digite seu email">
				<label class="erro hidden" id="emailErroLogin">Email incorreto</label>
				<label>Senha:</label>
				<input type="password" id="senhaLogin" onkeyup="runOnEnter(event, logar)" placeholder="Digite sua senha">
				<label class="erro hidden" id="senhaErroLogin">Senha incorreta</label>
				<a>Esqueceu a senha?</a><br>
				<div>
					<input type="submit" onclick="logar()" value="Entrar">
				</div>
			</div>
			<script type="text/javascript">
				function logar(){
					document.getElementById('emailErroLogin').classList.add('hidden');
					document.getElementById('senhaErroLogin').classList.add('hidden');
					var xhr = new XMLHttpRequest();
			        xhr.open('POST', "api/login");
			        xhr.onload = function() {
			        	if (this.responseText == 0){//email errado
							document.getElementById('emailErroLogin').classList.remove('hidden');
			        	}else if(this.responseText == 1){//senha incorrera
							document.getElementById('senhaErroLogin').classList.remove('hidden');
			        	}else if(typeof (this.responseText) === 'string'){//sucess
			        		//openLoginModal();
			        		//document.getElementById('perfilNomeWeb').innerHTML = this.responseText+'<img src="imgs/icons/arrow-drop-down-white.svg">';
			        		//document.getElementById('deslogado').classList.add('hidden');
			        		//document.getElementById('logadoDiv').classList.remove('hidden');
			        		reload();
			        	}else{//qualquer outro erro
							document.getElementById('emailErroLogin').classList.remove('hidden');
			        	}
			        };
			        // prepare FormData
			        var formData = new FormData();
			        formData.append('email', document.getElementById('emailLogin').value);
			        formData.append('senha', document.getElementById('senhaLogin').value);
			        xhr.send(formData);
			    }
			</script>
		</div>
		<div class="entradas hidden" id="login1">
			<div>
				<label>Nome:</label>
				<input type="text" onkeyup="runOnEnter(event, criarConta)" id="nome" placeholder="Digite seu nome">
				<label>Email:</label>
				<input type="text" onkeyup="runOnEnter(event, criarConta)" id="email" placeholder="Digite seu email">
				<label class="erro hidden" id="emailErroCad">Email inválido</label>
				<label>Senha:</label>
				<input type="password" onkeyup="runOnEnter(event, criarConta)" id="senha" placeholder="Crie uma senha">
				<div>
					<input type="submit" onclick="criarConta()" value="Cadastrar">
				</div>
			</div>
			<script type="text/javascript">
				function criarConta(){
					document.getElementById('emailErroCad').classList.add('hidden');
					if (validateEmail(document.getElementById('email').value)) {
						var xhr = new XMLHttpRequest();
				        xhr.open('POST', "api/cadastro");
				        xhr.onload = function() {
				        	console.log(this.responseText);
				        	if (this.responseText == 0) {//email ja usado
				        	}else if(this.responseText == 1){//sucess
				        		openLoginModal();
				        		document.getElementById('perfilNomeWeb').innerHTML = document.getElementById('nome').value+'<img src="imgs/icons/arrow-drop-down-white.svg">';
				        		document.getElementById('deslogado').classList.add('hidden');
				        		document.getElementById('logadoDiv').classList.remove('hidden');
				        	}else{//qualquer outro erro

				        	}
				        };
				        // prepare FormData
				        var formData = new FormData();
				        formData.append('nome', document.getElementById('nome').value);
				        formData.append('email', document.getElementById('email').value);
				        formData.append('senha', document.getElementById('senha').value);
				        xhr.send(formData);	
					}else{
						document.getElementById('emailErroCad').classList.remove('hidden');
					}
			    }
			</script>			
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
</script>