$('document').ready(function(){
	 


	//login
	function validaFormLogin(){
		$('#login-submit').click(function(){
			var login = $('#email_user').val().length;
			var valuPass = $('#password_user').val().length;
			if( login == 0){
				$('#email_user').parent().addClass('field-erro');
				mensErro = $('#email_user').attr('data-erro');
				$('#email_user').attr('placeholder', mensErro);
			}
			else if( valuPass == 0){
				$('#password_user').parent().addClass('field-erro');
				mensErrop = $('#password_user').attr('data-erro');
				$('#password_user').attr('placeholder', mensErrop);
			}
			else{
				var perfil = $('#email_user').val();
 				if(perfil == "cliente"  || perfil == "Cliente" || perfil == "CLIENTE" ){
					window.location.href = "home-cliente.php";
				}
				else{
					window.location.href = "home.php";
				}
			}
		});
	}
	validaFormLogin();
	//limpa campos
	$('.field-login input').focus(function(){
		$(this).parent().removeClass('field-erro');
		mesnReset = $(this).attr('data-mens');
		$(this).attr('placeholder', mesnReset);
	});
	function viewPass(){
		$('.view-password').click(function(){
			var valuPass = $('#password_user').val().length;
			if( valuPass != 0){
				if(!$(this).hasClass('view-password-active')){
					$(this).addClass('view-password-active');
						$(this).parent().find('input').attr('type','text');
				}
				else{
					$(this).removeClass('view-password-active');
						$(this).parent().find('input').attr('type','password');
				} 
			}
		});
	}
	viewPass();


	$('.btn-action-save').click(function(){
		javascript:history.back();
	});


	
	 $('.action-filter').click(function(){
		if( $('.container-filter').is(':hidden')){
			 $('.container-filter').slideDown();
			 $(this).addClass('active-filter');
		}
		else{
			$('.container-filter').slideUp();
			 $(this).removeClass('active-filter');
		}
	});
	  

 
	$('.action-delete').click(function(){
		var item =$(this).parent().parent().parent().parent();
		$('.modal-confirma').fadeIn();
		$('.action-true').click(function(){
			item.remove();
			$('.modal-confirma').fadeOut();
		});
	});
	 
	$('#cad-fazenda, #edit-fazenda').click(function(){
 		$('.modal-fazenda').fadeIn();
	});

	$('.close-modal, .container-modal-shadow').click(function(){
		$('.container-modal').fadeOut();
	 });

	 
	 $('#action-menu-admin').click(function(){
		$('.menu-mobile').css('left','0%')
	 });
	 $('#action-menu-cliente').click(function(){
		$('.menu-mobile').css('left','0%')
	 });
	 $('.close-menu-mobile').click(function(){
		$('.menu-mobile').css('left','-100%')
	 });
	 $(document).ready(function(){
		setTimeout(function(){ 	
			 $('.loader').fadeOut();
	    }, 100);
	 });
 
 //26-08-24
 $('#selectmodel2').click(function(){
	$('.lista-painel').addClass('tow-painel');
	$('.limpapainel').show();
	$('.lista-painel').removeClass('three-painel full-painel');
	$('.limpapainel').show();
 });
 $('#selectmodel3').click(function(){
	$('.lista-painel').addClass('tow-painel three-painel');
	$('.lista-painel').removeClass('full-painel');
	$('.limpapainel').show();
 });
 $('#selectmodel4').click(function(){
	$('.lista-painel').addClass('full-painel');
	$('.limpapainel').show();
 });
 $('#selectmodel1').click(function(){
 	$('.lista-painel').removeClass('full-painel tow-painel three-painel');
	 $('.limpapainel').hide();
 });

 $('.troca-painel').click(function(){
    $(this).parent().hide();
});


  
});
 