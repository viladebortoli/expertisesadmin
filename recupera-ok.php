<?php include('header.php');?>
	<div class="container-login">
		<div class="container">
			<div class="row ">
				<div class="col-10 offset-1 text-center max-img">
					<img src="images/logo.png">
				</div>
			</div>
			<div class="row">
				<div class="col-10 offset-1 text-center">
					<div class="clear space-min"></div>
					<span>Solicitar troca de senha enviada com sucesso, fique atendo à sua caixa de e-mails..</span>
					<div class="clear space-min"></div>
				</div>
				<div class="col-12">
					<form method="post" action="nova-senha.php">
						<div class="field-login ">
							 <button class="btn-action-save" type="submit">SOLICITAÇÃO ENVIADA</button>
						</div>
					</form>
				</div>
				<div class="col-12">
					<?php include('foot.php');?>
				</div>
			</div>
 			<?php include('footer.php');?>
		</div>
		
	</div>
