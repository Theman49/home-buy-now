@extends('../layout/main')
@section('head')
<link rel="stylesheet" href="/css/home.css">
<title>{{ $title }} | Home Buy Now</title>
@endsection
@section('container')
		<!-- B U Y E R  -->
		<div class="center container signup" id="buyer">
			<div class="row">
				<div class="col text-center status" id="statusBuyer">
					<h1 style="vertical-align:middle;">Buyer</h1>
					<div class="mb-3">
						<label>or becoming our part with sign up as <span id="changeToSeller" class="changeTo">Seller</span></label>
					</div>
					<div class="mb-3">
						<label>Already have an account? <a href="/login?status=buyer">Login here</a></label>
					</div>
				</div>
				<div class="col myForm" id="formBuyer">
					<form method="POST" action=/auth/submitRegister">
						<h1 class="text-center">Sign Up</h1>
						<h6 class="text-center"  style="margin-bottom:20px">as Buyer</h6>
						<div class="mb-3">
							<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
						</div>
						<div class="mb-3">
							<input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email" placeholder="Email" required>
						</div>

						<div class="mb-3">
							<input type="text" class="form-control" name="no_handphone" placeholder="No. Handphone" required>
						</div>

						<div class="mb-3">
							<select name="id_kategori" style="border: 0px;padding:5px 8px;width:100%;height:40px;">
								<?php
									foreach($kategori as $row){
								?>
									<option value="<?=$row['id_kategori']?>"><?=strtoupper($row['jenis_kategori'])?></option>
								<?php
									}
								?>
							</select>
						</div>

						<div class="mb-3">
							<input type="password" class="form-control pwd" name="password" placeholder="Password" required>
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input cekmeout" destination=0>
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<input type="submit" class="btn btn-primary" name="submitSignUpBuyer" value="Sign Up" style="margin-bottom: 10px;">
					</form>	
				</div>
			</div>
		</div>
		
		<!-- S E L L E R -->
		<div class="center container card signup" id="seller">
			<div class="row">
				<div class="col myForm" id="formSeller">
					<form method="POST" action=/auth/submitRegister">
						<h1 class="text-center">Sign Up</h1>
						<h6 class="text-center" style="margin-bottom:20px">as Seller</h6>
						<div class="mb-3">
							<!-- <label for="exampleInputEmail1" class="form-label">Nama Lengkap:</label> -->
							<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
						</div>
						<div class="mb-3">
							<!-- <label for="exampleInputEmail1" class="form-label">Email address:</label> -->
							<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="email" placeholder="Email">
						</div>

						<div class="mb-3">
							<!-- <label for="exampleInputEmail1" class="form-label">No. Handphone:</label> -->
							<input type="text" class="form-control" name="no_handphone" placeholder="No. Handphone">
						</div>

						<div class="mb-3">
							<select name="id_kategori" style="border: 0px;padding:5px 8px;width:100%;height:40px;">
								<?php
									foreach($kategori as $row){
										if($row['id_kategori'] == 1 || $row['id_kategori'] == 3 || $row['id_kategori'] == 4){
											continue;
										}
								?>
									<option value="<?=$row['id_kategori']?>"><?=strtoupper($row['jenis_kategori'])?></option>
								<?php
									}
								?>
							</select>
						</div>

						<div class="mb-3">
							<!-- <label for="exampleInputPassword1" class="form-label">Password:</label> -->
							<input type="password" class="form-control pwd" name="password" placeholder="Password">
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input cekmeout" destination=1>
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<input type="submit" class="btn btn-primary" name="submitSignUpSeller" value="Sign Up" style="margin-bottom: 10px;">
					</form>	
				</div>
				<div class="col text-center status" id="statusSeller">
					<h1 style="vertical-align:middle;">Seller</h1>
					<div class="mb-3">
						<label>or becoming our part with sign up as <span id="changeToBuyer" class="changeTo">Buyer</span></label>
					</div>
					<div class="mb-3">
						<label>Already have an account? <a href="/login?status=seller">Login here</a></label>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('script')
<script src="/js/home.js"></script>
@endsection