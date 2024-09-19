<?php include('header.php');?>
<?php include('includes/head.php');?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-lg-2">
			<?php include('includes/menu-left.php');?>
		</div>
		<div class="col-12 col-lg-10">
			<div class="head-container">
				<div class="row row-center">
					<div class="col-9">
						<h1>usuário do painel</h1>
						<p>controle de usuários do apinel administivo</p>
					</div>
					<div class="col-3 text-right">
						<a href="javascript:history.back()" data-text="voltar" class="icon-action action-prev icon-touch"></a>
					</div>
				</div>
			</div>
 			<!--form -->
			<div class="container-app">
				<div class="row">
					<div class="col-12">
						<b>dados do usuário</b>
						<div class="clear space-minn"></div>
					</div>
					<div class="col-12">
						<form action="home.php">
					  
							<!--login -->
							<div class="row">
								<div class="col-4">
									<label class="input-alvo d-block">
										<input type="text" placeholder="nome">
									</label>
								</div>
								<div class="col-5">
									<label class="input-alvo d-block">
										<input type="text" placeholder="e-mail">
									</label>
								</div>
								<div class="col-3">
									<label class="input-alvo d-block position-relative">
										<input  type="password" value="" placeholder="senha do usuário">
										<span class="view-password"></span>
									</label>
								</div>
								<div class="col-4">
									<label class="input-alvo d-block">
										<select>
											<option>perfil</option>
											<option value="ativo">adm</option>
											<option value="congelado">colaborador</option>
										</select>
									</label>
								</div>
							</div>
							<div class="clear space-minn"></div>
							<!-- actions -->
							<div class="row ">
								<div class="col-6 col-md-3 offset-md-6">
									<a href="javascript:history.back();" class="btn-cancel d-block w-100">CANCELAR</a> 
								</div>
								<div class="col-6 col-md-3">
									<button class="btn-grava w-100">CADASTRAR</button> 
								</div>
							</div>
						</form> 
					</div>
				</div>
			</div>

			</div>
		</div>
	</div>
</div>
 
<?php include('footer.php');?>