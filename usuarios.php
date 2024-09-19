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
								<h4 title="clientes cadastrados">Usuários cadastrados</h4>
								<div class="clear space"></div>
							</div>
						</div>
						<?php include('includes/row-usuarios.php');?>
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
				<?php include('includes/bloco-usuarios.php');?>
				<div class="clear space-min"></div>
				 
 			</div>
		</div>
	</div>

</div>
<?php include('footer.php');?>
