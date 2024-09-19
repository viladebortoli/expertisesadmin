<?php include('header.php');?>
	<div class="container-login">
		<div class="container">
			<div class="row ">
				<div class="col-12 text-center max-img">
					<img src="images/logo.png">
				</div>
			</div>
			<div class="clear space-min"></div>
			<div class="row">
				<div class="col-12 text-center">
					<p>Cadastrar nova senha</p>
				</div>
				<div class="col-12">
					<form method="post" action="login.php">
						<div class="field-login position-relative icon-password " >
							<input data-erro="revise sua senha"  data-mens="digite sua senha" type="password"  id="password_user" placeholder="digite sua senha">
							<span class="view-password"></span>
						</div>
						<div class="field-login position-relative icon-password " >
							<input data-erro="revise sua senha"  data-mens="digite sua senha" type="password"  id="password_user" placeholder="digite sua senha">
							<span class="view-password"></span>
						</div>
						
						<div class="field-login ">
							 <button class="btn-action-save" type="submit">SALVAR</button>
						</div>
					</form>
				</div>
			</div>
			<div class="clear space-min"></div>
			<div class="row">
				<div class="col-12 text-center">
					<p>baixar o aplicativo agora</p>
				</div>
				<div class="col-12 text-center link-store">
					 <a href="#?"><img src="images/icon-store-1.png"></a>
					 <a href="#?"><img src="images/icon-store-2.png"></a>
				</div>
				<div class="col-4 offset-4 text-center ">
					 <hr>
				</div>
			</div>
			<?php include('footer.php');?>
		</div>
		
	</div>
