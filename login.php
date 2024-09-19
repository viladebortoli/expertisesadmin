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
				<div class="col-12">
					<div >
						<div class="field-login icon-login">
							<input data-erro="revise seu e-mail"  data-mens="acessar com e-mail" type="text" id="email_user" placeholder="acessar com e-mail">
						</div>
						<div class="field-login position-relative icon-password " >
							<input data-erro="revise sua senha"  data-mens="digite sua senha" type="password"  id="password_user" placeholder="digite sua senha">
							<span class="view-password"></span>
						</div>
						<div class="field-login ">
							 <button class="btn-submit-white" id="login-submit" onclick="validaFormLogin()">LOGIN</button>
 						</div>
					</div>
				</div>
				<div class="col-12 text-center">
					<a href="recupera.php" class="remember-password">esqueci a senha</a>
				</div>
				<div class="col-8 offset-2 text-center max-img">
					<img src="images/logo-expertise.png">
				</div>
			</div>
 			<?php include('foot.php');?>
		</div>
		
	</div>
	<?php include('footer.php');?>