<!DOCTYPE html>
<html>
<head>
    
<title>IT - University of Tripoli</title>
<meta  charset="utf-8" />

<!-- Custom Theme files -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>IT - University of Tripoli</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">

			@if(Session::has('error'))
				<div class="alert alert-success text-right">
					 	{{Session::get('error')}}
				</div>
			@endif
            @if(Session::has('success'))
				<div class="alert alert-success text-right">
						{{Session::get('success')}}
				</div>
			@endif

				<form method="POST" action="{{route('submitstd')}}">

				@csrf
	
					<input class="text" type="text" name="Username" placeholder="Full Name" required="">
                    <br>
                    <input class="text" type="text" name="stdid" placeholder="Student ID" required="">
                    <br>
                    <input class="text" type="text" name="Department" placeholder="Department" required="">
                    <br>
					<input class="text" type="email" name="email" placeholder="Email" required="">
<!--
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
-->
					<input type="submit" value="Register">
				</form>
<!--				<p>Don't have an Account? <a href="#"> Register </a></p>-->
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2021 . All rights reserved for ITWT413 | Design by Mohamed Gomati</p>
		</div>
		
	</div>
	<!-- //main -->
</body>
</html>