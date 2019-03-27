 <div class="page-header header-filter" data-parallax="true" style="background-image: url('imgs/capa/bg_entrar.jpg')">
        <div class="container">
            <div class="row row-login row-cadastro">
                <div class="col-lg-6 login-frases cadastro-texto d-flex align-items-center">
                	<div class="row d-flex justify-content-end">
						<p>
							Para cadastrar na REMEI é preciso informar o <span class="negrito">nome completo</span>, o <span class="negrito">email institucional</span>.
						</p>
						<p>
							O cadastro será rápido, após dele pode ficar a vontade para editar seus dados. 
							<i class="fas fa-smile-beam ml-1"></i>
						</p>
                	</div>
                </div>
                <div class="col-lg-6 login-campos cadastro-campos">
                	<form action="" method="get" accept-charset="utf-8">
            			<h3>Cadastrar</h3>

						<div class="form-group bmd-form-group">
							<label for="nome" class="bmd-label-floating">Nome</label>
							<input type="text" class="form-control" id="nome" required>
							<span class="bmd-help">Digite seu nome completo.</span>
						</div>

						<div class="form-group bmd-form-group">
							<label for="email" class="bmd-label-floating">EMAIL</label>
							<input type="email" class="form-control" id="email" required>
							<span class="bmd-help">Digite seu email institucional.</span>
						</div>


						<div class="form-group bmd-form-group">
							<label for="confirmeemail" class="bmd-label-floating">CONFIRMAR EMAIL</label>
							<input type="email" class="form-control" id="confirmeemail" required>
							<span class="bmd-help">Digite novamente seu email institucional.</span>
						</div>

						<div class="row row-senhas">
							<div class="col-6 form-group bmd-form-group">
								<label for="password" class="bmd-label-floating">SENHA</label>
								<input type="password" class="form-control" id="password" required>
								<span class="bmd-help">Digite sua senha cadastrada.</span>
							</div>

							<div class="col-6 form-group bmd-form-group">
								<label for="confirmepassword" class="bmd-label-floating">CONFIRMAR SENHA</label>
								<input type="password" class="form-control" id="pasconfirmepasswordsword" required>
								<span class="bmd-help">Digite novamente sua senha cadastrada.</span>
							</div>
						</div>

                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <label class="check" id="lbl-termoDeUso" onclick="myChecked_termoDeUso('lbl-termoDeUso', 'chk-termoDeUso')">
                                        <div class="my-check">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <input class="" id="chk-termoDeUso" type="checkbox" value=""> Aceito os <a href="docs/termo_de_uso.pdf">termos de uso</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <button type="button" onclick="verificarCadastro()" class="btn btn-primary btn-round mt-1 ">
                                    Cadastrar <i class="fas fa-sign-in-alt ml-1"></i>
                                </button>
                            </div>
                        </div>

                	</form>
                </div>
            </div>
        </div>
    </div>