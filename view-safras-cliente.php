<?php include('header.php');?>
<?php include('includes/head-cliente.php');?>
<div class="container-exp">
	<div class="container-fluid p-0">
		<div class="row  row-mobile-reverse">
			<div class="col-12 col-lg-9">
				<div class="bloco-exp">
					<div class="container">
						<div class="row row-center">
							<div class="col-9 col-lg-10">
								<h4 title="clientes cadastrados">Fazenda Agro Farm / </small>Área 3 isolada - Cochila Norte</h4>
							</div>
							<div class="col-3 col-lg-2 max-img text-right">
								<img src="images/apagar/f2.png">
							</div>
							<div class="col-12">
								<div class="clear space-min"></div>
							</div>
						</div>
						<?php include('includes/row-safras-cliente.php');?>
						<div class="row">
							<div class="col-12 text-center">
								<div class="clear space-min"></div>
								<?php include('includes/pagination.php');?>
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
                                <h4 class="title-bloco">Voltar</h4>
                            </div>
                            <div class="col-3 text-right">
                                <a href="javascript:history.back()"class="action-return" title="voltar"></a>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="clear space-min"></div>
 			</div>
		</div>
	</div>

</div>
<?php include('footer.php');?>
