<div class="holder">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-9 card" style="border-radius: 10px; background-color: #f0f0f0; padding: 10px">
                <h2 class="text-center">Login</h2>
                <div class="form-wrapper">
                    <!-- <p>To access your whishlist, address book and contact preferences and to take advantage of
                                our speedy checkout, create an account with us now.</p> -->
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                    <div class="text-center">
                        Don't have account? <a class="text-info" href='?request_uri=register'>Register</a> now
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['email'] != '' && $_POST['password'] != '') {

        // Lấy giá trị từ form
        $email = $_POST["email"];
        $password = $_POST["password"];
        echo $email;
        // Truy vấn kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $user = $result->fetch_assoc();
        if ($result->num_rows == 1) {
            // Đăng nhập thành công
            $_SESSION['userId'] = $user["user_id"];
            
            echo "<script>window.location.href = 'http://localhost/MyPham/'</script>";
        } else {
            // Đăng nhập thất bại
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'Tài khoản hoặc mật khẩu không chính xác!',
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                })
            </script>
            <?php
            echo "<script>if ( window.history.replaceState ) { window.history.replaceState( null, null, window.location.href ); }</script>";
        }

        // Đóng kết nối cơ sở dữ liệu
        // $conn->close();
        unset($_POST["email"]);
        unset($_POST["password"]);
        $email = $password = "";
    } 
    if ((isset($_POST['password']) && $_POST['password'] == '') || (isset($_POST['email']) && $_POST['email'] == '')) {
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