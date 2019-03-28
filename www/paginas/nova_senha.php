
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('imgs/capa/bg_esqueceu.jpg')">
        <div class="container">
            <div class="row row-login row-recuperar row-novaSenha">
                <div class="col-lg-6 login-frases d-flex align-items-center">
                	<div class="row d-flex justify-content-end">
						<p>Bom ai está! Crie uma nova senha de tente <span class="negrito">não esquece-la</span> desta vez cabeção. <i class="fas fa-heart"></i></p>
                	</div>
                </div>
                <div class="col-lg-6 login-campos novaSenha-campos">
                	<form action="" method="post" accept-charset="utf-8">
            			<h3>Criar Nova Senha</h3>

						<div class="form-group bmd-form-group">
							<label for="password" class="bmd-label-floating">NOVA SENHA</label>
							<input type="password" name="senha" class="form-control" id="password" required>
							<span class="bmd-help">Digite uma nova senha.</span>
						</div>

						<div class="form-group bmd-form-group">
							<label for="confirmepassword" class="bmd-label-floating">CONFIRMAR NOVA SENHA</label>
							<input type="password" class="form-control" id="confirmepassword" required>
							<span class="bmd-help">Digite novamente a nova senha.</span>
						</div>

						<button type="button" class="btn btn-primary btn-round mt-3" onclick="verificarNovaSenha()">
							Salvar <i class="fas fa-save ml-1"></i>
						</button>

                	</form>
                </div>
            </div>
        </div>
    </div>
