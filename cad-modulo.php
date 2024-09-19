<?php include('header.php');?>
<?php include('includes/head.php');?>
<div class="container-exp">
	<div class="container-fluid p-0">
		<div class="row ">
			<div class="col-12 col-lg-9">
				<div class="bloco-exp">
					<div class="container">
						<div class="row row-center">
							<div class="col-9 col-lg-10">
								<h4 title="clientes cadastrados"><small>José Almdeia / Fazenda Agro Farm / </small>Novo Módulo</h4>
							</div>
							<div class="col-3 col-lg-2 max-img text-right">
								<img src="images/apagar/f2.png">
							</div>
							<div class="col-12">
								<div class="clear space-min"></div>
							</div>
						</div>
                         <div class="row row-center">
                            <div class="col-12 col-lg-6">
                              <label class="input-exp d-block  ">
                                    <input type="text" placeholder="título do módulo" value="Área 3 isolada - Cochila Norte">
                                </label>
 							</div>
                             <div class="col-12 col-lg-6">
                                <label class="input-exp d-block label-cad label-cad-status">
                                    <select>
                                         <option value="ativo">status ativo</option>
                                        <option value="congelago">status congelago</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-12">
								<div class="clear space"></div>
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
					<?php include('includes/bloco-modulos.php');?>
				</div>
 			</div>
		</div>
	</div>

</div>
<?php include('footer.php');?>
