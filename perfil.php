<?php include('header.php');?>
<?php include('includes/head.php');?>
<div class="container-exp">
	<div class="container-fluid p-0">
		<div class="row row-mobile-reverse">
			<div class="col-12 col-lg-9">
				<div class="bloco-exp">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h4 title="clientes cadastrados">Meus dados</h4>
								<div class="clear space"></div>
							</div>
						</div>
                        <!-- form cliente -->
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <label class="input-exp d-block label-cad label-cad-perfil">
                                    <input type="text" placeholder="nome completo" value="">
                                </label>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="input-exp d-block label-cad label-cad-fone">
                                    <input type="tel" placeholder="fone" value="">
                                </label>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="input-exp d-block label-cad label-cad-email">
                                    <input type="text" placeholder="e-mail" value="">
                                </label>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="input-exp d-block label-cad label-cad-status">
                                    <select>
                                         <option value="ativo">administrador</option>
                                        <option value="congelago">colaborador</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="input-exp d-block label-cad label-cad-senha">
                                      <input type="password" placeholder="digite sua senha" value="">
                                </label>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label class="input-exp d-block label-cad label-cad-senha">
                                      <input type="password" placeholder="confirmar senha" value="">
                                </label>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-3">
            <div class="bloco-exp">
                <div class="container">
                    <div class="row row-center">
                        <div class="col-9">
                            <h4 class="title-bloco">Publicar</h4>
                        </div>
                        <div class="col-3 text-right">
                            <a href="javascript:history.back()"class="action-return" title="voltar"></a>
                        </div>
                        <div class="col-12">
                        <div class="clear space-minn"></div>
                            <small>salvar modificações</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="clear space-min"></div>
                            <button class="btn-action-save">salvar</button>
                        </div>
                    </div>
                </div>
            </div>
				<div class="clear space-min"></div>
				<div class="d-none d-lg-block">
                    <?php include('includes/bloco-clientes.php');?>
				</div>
 			</div>
		</div>
	</div>

</div>
<?php include('footer.php');?>
