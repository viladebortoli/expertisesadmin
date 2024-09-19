<?php include('header.php');?>
	<div class="container-login">
		<div class="container">
			<div class="row ">
				<div class="col-10 offset-1 text-center max-img">
					<img src="images/logo.png">
				</div>
			</div>
			
			<div class="row">
				<div class="col-12 text-center">
					<div class="clear space-min"></div>
					<span>Solicitar troca de senha.</span>
					<div class="clear space-min"></div>
				</div>
				<div class="col-12">
					<form method="post" action="recupera-ok.php">
						<label class="input-exp d-block label-cad label-cad-email">
							<input type="text" placeholder="e-mail" value="">
						</label>
						<label class="field-login ">
							 <button class="btn-action-save" type="submit">RECUPERAR SENHA</button>
						</label>
					</form>
				</div>
				<div class="col-12">
					<?php include('foot.php');?>
				</div>
			</div>
 			<?php include('footer.php');?>
		</div>
	</div>
