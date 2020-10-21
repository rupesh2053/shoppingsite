$(document).ready(function(){

		$('#next-1').click(function(e){

			e.preventDefault();
			$('#nameError').html('');
			$('#usernameError').html('');

			if($('#name').val() == ''){
			 $('#nameError').html('* Name is required.');
			 return false;
			}
			else if($('#name').val().length < 3){
			 $('#nameError').html('* Name must of more than 3 characters.');
			 return false;
			}
			else if(!isNaN($('#name').val())){
			 $('#nameError').html('* Numbers are not allowed.');
			 return false;
			}
			else if($('#username').val() == ''){
			 $('#usernameError').html('* Username is required.');
			 return false;
			}
			else if($('#username').val().length < 4){
			 $('#usernameError').html('* must of more than 4 characters.');
			 return false;
			}
			else{
			 $('#second').show();
			 $('#first').hide();
			 $('#progressBar').css('width','60%');
			 $('#progressText').html('Step-2');
			}
		});

		$('#next-2').click(function(e){
			e.preventDefault();
			$('#emailError').html('');
			$('#phoneError').html('');

			if($('#email').val() == ''){
			 $('#emailError').html('* Email is required.');
			 return false;
			}
			else if(!validateEmail($('#email').val())){
			 $('#emailError').html('* Email is not valid.');
			 return false;
			}
			else if($('#phone').val() == ''){
			 $('#phoneError').html('* Phone number is required.');
			 return false;
			}
			else if(isNaN($('#phone').val())){
			 $('#phoneError').html('* Numbers only allowed.');
			 return false;
			}
			else if($('#phone').val().length != 10){
			 $('#phoneError').html('* Phone number must be of 10 digits.');
			 return false;
			}
			else
			{	
				$('#third').show();
				$('#second').hide();
				$('#progressBar').css('width','100%');
				$('#progressText').html('Step-3');
			}

			function validateEmail($email){
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				return emailReg.test($email);
			}
		});

		$('#submit').click(function(e){

			e.preventDefault();
			$('#passError').html('');
			$('#cpassError').html('');

			if($('#pass').val() == ''){
			 $('#passError').html('* Password is required.');
			 return false;
			}
			else if($('#pass').val().length < 6){
			 $('#passError').html('* Password length must be of more than 6 characters.');
			 return false;
			}
			else if($('#cpass').val() == ''){
			 $('#cpassError').html('* Confirm Password is required.');
			 return false;
			}
			else if($('#pass').val() != $('#cpass').val()){
			 $('#cpassError').html('* Two passwords are not matched.');
			 return false;
			}
			else{
				$('#submit').attr('disabled','disabled');
        		$(document).css('cursor','progress');
				$.ajax({
					url: 'action.php',
					method: 'post',
					data:$("#form-data").serialize(),
					success:function(response){
						$('#result').show();
						$('#result').html(response);
						$('#form-data')[0].reset();
						$('#first').show();
						$('#third').hide();
						$('#progressBar').css('width','30%');
						$('#progressText').html('Step-1');
					}
				});
			}
		 });

		$('#prev-2').click(function(){
			$('#second').hide();
			$('#first').show();
			$('#progressBar').css('width','30%');
			$('#progressText').html('Step-1');
		});

		$('#prev-3').click(function(){
			$('#third').hide();
			$('#second').show();
			$('#progressBar').css('width','60%');
			$('#progressText').html('Step-2');
		});

	});