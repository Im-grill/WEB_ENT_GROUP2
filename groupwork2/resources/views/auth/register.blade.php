<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
    <script src="{{ 'js/login.js' }}" defer></script>
	<title>
		Register
	</title>
</head>

<body>
	<div id="container" class="container">
		<div class="row">

            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                </div>
            </div>

			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="email" name="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" placeholder="Password">
						</div>
						<button>
							Sign up
						</button>
						<p>
							<span>
								Already have an account?
							</span>
							{{-- <b onclick="toggle()" class="pointer">
								Sign up here
							</b> --}}
                            <a href="{{ route('login') }}">Sign in here</a>
						</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row content-row">
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Registration
					</h2>
					<p>
						abcde
					</p>
				</div>
			</div>
			<div class="col align-items-center flex-col">
				
			</div>
		</div>
	</div>
</body>

</html>