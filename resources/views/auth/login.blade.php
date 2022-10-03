@extends('../layout/main')
@section('head')
<link rel="stylesheet" href="/css/home.css">
<title>{{ $title }} | Home Buy Now</title>
@endsection
@section('container')
    <!-- B U Y E R  -->
		<div class="center container login" id="buyer">
			<div class="row">
				<div class="col text-center status" id="statusBuyer">
					<h1 style="vertical-align:middle;">Buyer</h1>
					<div class="mb-3">
						<label>or Login as <span id="changeToSeller" class="changeTo">Seller</span></label>
					</div>
					<div class="mb-3">
						<label>Didn't have any account? <a href="/register?status=buyer">Register here</a></label>
					</div>
				</div>
				<div class="col myFormLogin" id="formBuyer">
					<form method="POST" action="/auth/submitLogin">
						<h1 class="text-center">Login</h1>
						<h6 class="text-center"  style="margin-bottom:20px">as Buyer</h6>
						<div class="mb-3">
							<!-- <label for="exampleInputEmail1" class="form-label">Email address:</label> -->
							<input type="email" class="form-control"aria-describedby="emailHelp" name="email" placeholder="Email" required>
						</div>
						<div class="mb-3">
							<!-- <label for="exampleInputPassword1" class="form-label">Password:</label> -->
							<input type="password" class="form-control pwd" name="password" placeholder="Password" required>
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input cekmeout" destination=0>
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<input type="submit" class="btn btn-primary" name="submitLoginBuyer" value="Login" style="margin-bottom: 10px;">
						
					</form>	
				</div>
			</div>
		</div>
		
		<!-- S E L L E R -->
		<div class="center container card login" id="seller">
			<div class="row">
				<div class="col myFormLogin" id="formSeller">
					<form method="POST" action="/auth/loginSeller">
						@csrf
						<h1 class="text-center">Login</h1>
						<h6 class="text-center" style="margin-bottom:20px">as Seller</h6>
						<div class="mb-3">
							<!-- <label for="exampleInputEmail1" class="form-label">Email address:</label> -->
							<input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="Email">
							@error('email')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>
						<div class="mb-3">
							<!-- <label for="exampleInputPassword1" class="form-label">Password:</label> -->
							<input type="password" class="form-control pwd" name="password" placeholder="Password">
							@error('password')
								<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>
						<div class="mb-3 form-check">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
							<input type="checkbox" class="form-check-input cekmeout" destination=1>
						</div>
						<input type="submit" class="btn btn-primary" name="submitLoginSeller" value="Login" style="margin-bottom: 10px;">
						
					</form>	
				</div>
				<div class="col text-center status" id="statusSeller">
					<h1 style="vertical-align:middle;">Seller</h1>
					<div class="mb-3">
						<label>or Login as <span id="changeToBuyer" class="changeTo">Buyer</span></label>
					</div>
					<div class="mb-3">
						<label>Didn't have any account? <a href="/register?status=seller">Register here</a></label>
					</div>	
				</div>
			</div>
		</div>
@endsection
@section('script')
<script src="/js/home.js"></script>
@endsection