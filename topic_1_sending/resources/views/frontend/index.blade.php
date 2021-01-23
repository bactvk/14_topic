<!DOCTYPE html>
<html lang="en">
<head>
	<title>Adding caption</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">


	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main_2.css')}}">
<!--====================================================================================-->
</head>
<body>

	<div class="bg-contact3" style="background-image: url('/assets/images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form" method="POST" novalidate>
					@csrf
					<span class="contact3-form-title">
						Adding caption
					</span>

					
					<div class="wrap-input3 validate-input object">
						<input class="input3 " type="email" name="object" placeholder="Enter email" required="">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input subject" >
						<input class="input3 " type="text" name="subject" placeholder="Enter subject" required="">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						{{-- <textarea id="editor1" class="input3" name="content" placeholder="Flirt caption" required=""></textarea> --}}
						<textarea  class="input3" name="content" placeholder="Enter content" required=""></textarea>
						<span class="focus-input3"></span>
					</div>
					{{-- radio --}}
					<div>
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice_send" value="email" checked="checked">
							<label class="label-radio3" for="radio1">
								Email
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choice_send" value="slack">
							<label class="label-radio3" for="radio2">
								Slack
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio3" type="radio" name="choice_send" value="sms">
							<label class="label-radio3" for="radio3">
								SMS
							</label>
						</div>

					</div>

					<div class="float-right">
						<button class="btn btn-primary" type="submit">
							Send
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>

	@if(session('success'))
		<div class="alert alert-success success_msg">{{session('success')}}</div>
	@endif

<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
	<script src="https://cdn.ckeditor.com/4.15.0/standard-all/ckeditor.js"></script>
	<script>



	    // CKEDITOR.replace('editor1', {
	    //    extraPlugins: 'editorplaceholder',
	    //   editorplaceholder: 'Enter flirt caption'
	    // });

	    $('.alert').fadeOut(5000);

	    $('input[name=choice_send]').click(function(){
	    	var val = $(this).val();
	    	if(val == "email"){
	    		$('.subject').css('display','block');
	    		$('.object').css('display','block');
	    	}else if(val == "slack" || val == "sms"){
	    		$('.subject').css('display','none');
	    		$('.object').css('display','none');
	    	}
	    })
	  </script>

</body>
</html>
