    <!-- Capa -->
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('imgs/capa/bg_entrar.jpg')">
        <div class="container">
            <div class="row row-login">
                <div class="col-lg-6 login-frases d-flex align-items-center">
                	<div class="row d-flex justify-content-end">
						<p id="frase-motivacao"></p>
	                	<span class="mr-1">By - </span><span id="autor-frase-motivacao"></span>
                	</div>
                </div>
                <div class="col-lg-6 login-campos">
                	<form action="" method="post" accept-charset="utf-8">
            			<h3>Entar</h3>

						<div class="form-group bmd-form-group">
							<label for="email" class="bmd-label-floating">EMAIL</label>
							<input type="text" onkeydown="removerErr()" class="form-control" name="email" id="email" required>
							<span class="bmd-help">Digite seu email cadastrado.</span>
							<?php
								if($err == 1){
									?><span class="error" id="errEmail">*Email incorreto.</span><?php
								}
							?>
						</div>

						<div class="form-group bmd-form-group">
							<label for="password" class="bmd-label-floating">SENHA</label>
							<input type="password" onkeydown="removerErr()" class="form-control" name="senha" id="password" required>
							<span class="bmd-help">Digite sua senha cadastrada.</span>
							<?php
								if($err == 2){
									?><span class="error" id="errSenha">*Senha incorreta.</span><?php
								}
							?>
						</div>

						<span><a href="esqueceu_senha" class="mb-1">Esqueçeu a senha</a></span>

						<button class="btn btn-primary btn-round">
							Entrar <i class="fas fa-sign-in-alt ml-1"></i>
						</button>

                	</form>
                </div>
            </div>
        </div>
    </div>