<div class="holder">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-18 col-lg-12">
				<h2 class="text-center">Create an Account</h2>
				<div class="form-wrapper">
					<p>To access your whishlist, address book and contact preferences and to take advantage of
						our speedy checkout, create an account with us now.</p>
					<form method="POST">
						<div class="form-group">
							<input type="text" id="fullName" name="fullName" class="form-control" onkeyup="check('fullName', 'warn-name')" placeholder="Full name">
							<p class="text-danger d-none" id="warn-name">Please enter full name</p>
						</div>
						<div class="form-group">
							<input type="text" id="email" name="email" class="form-control" placeholder="E-mail" onkeyup="check('email', 'warn-email')">
							<p class="text-danger d-none" id="warn-email">Please enter email</p>
						</div>
						<div class="form-group">
							<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number" onkeyup="check('phone', 'warn-phone')">
							<p class="text-danger d-none" id="warn-phone">Please enter phone</p>
						</div>
						<div class="form-group">
							<input type="text" id="address" name="address" class="form-control" placeholder="Address" onkeyup="check('address', 'warn-address')">
							<p class="text-danger d-none" id="warn-address">Please enter address</p>
						</div>
						<div class="form-group">
							<input type="password" id="password" name="password" class="form-control" onkeyup="check('password', 'warn-pwd')" placeholder="Password">
							<p class="text-danger d-none" id="warn-pwd">Please enter password</p>
						</div>
						<div class="form-group">
							<input type="password" id="confirmPwd" name="confirmPwd" class="form-control" onkeyup="check('confirmPwd', 'warn-confirm')" placeholder="Confirm Password">
							<p class="text-danger d-none" id="warn-confirm">Please enter confirm password</p>
							<p class="text-danger d-none" id="not-match">Confirm password is not match</p>
						</div>
						<!-- <div class="clearfix">
									<input id="checkbox1" name="checkbox1" type="checkbox" checked="checked">
									<label for="checkbox1">By registering your details you agree to our <a href="#"
											class="custom-color" data-fancybox data-src="#modalTerms">Terms and
											Conditions</a> and <a href="#" class="custom-color" data-fancybox
											data-src="#modalCookies">Cookie Policy</a></label>
								</div> -->
						<div class="text-center">
							<input type="submit" class="btn" value="Create an account">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function check(inpuId, warnName) {
		if(document.getElementById(inpuId).value.trim() === ""){
			document.getElementById(warnName).classList.remove("d-none");
		}else{
			document.getElementById(warnName).classList.add("d-none");
		}

		if(inpuId === "confirmPwd" && document.getElementById(inpuId).value.trim() != ""){
			if(document.getElementById(inpuId).value.trim() !== document.getElementById("password").value.trim()){
                document.getElementById("not-match").classList.remove("d-none");
            }else{
                document.getElementById("not-match").classList.add("d-none");
            }
		}
	}

</script>

<?php
	if(isset($_POST['fullName'])){
		$fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];

		if($fullName != "" && $email != "" && $phone != "" && $address != "" && $password != ""){

			$sqlCheckExist = "SELECT * FROM user WHERE email = '$email'";
			$resultExist = mysqli_query($conn, $sqlCheckExist);
			$exist = $resultExist->fetch_assoc();
			if($exist['user_id'] != null){
				?>
					<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
					<script>
						Swal.fire({
							icon: 'warning',
							title: 'Email existing!',
							showConfirmButton: true,
							confirmButtonText: 'OK'
						})
					</script>
					<?php
			}else{
				$sql = "INSERT INTO user (email, phone_number, address, password, full_name) VALUES ('$email', '$phone', '$address', '$fullName', '$password')";
				$result = mysqli_query($conn, $sql);
				$numRows = mysqli_affected_rows($conn);
				if ($numRows > 0) {
					?>
					<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
					<script>
						Swal.fire({
							icon: 'success',
							title: 'Register successfully!',
							showConfirmButton: true,
							confirmButtonText: 'OK'
						})
					</script>
					<?php
				}
			}
		}else{
			?>
			<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Vui lòng nhập đầy đủ thông tin',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
            </script>
			<?php
		}
	}
?>