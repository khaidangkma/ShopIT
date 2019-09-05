<?php 

	require_once __DIR__. "/autoload/autoload.php";
    if (isset($_SESSION['name_id'])) {
        echo "<script>alert(' Bạn đã đăng nhập ! Cần phải đăng xuất nếu muốn đăng nhập tài khoản khác!'); location.href='index.php'</script>";
    }
    $data =
    [
        'email'     => postInput('email'),
        'password'  => postInput('password')
    ];

    $error = [];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($data['email'] == '') {
            $error['email'] = "Email không được để trống";
        }
        if ($data['password'] == '') {
            $error['password'] = "Vui lòng điền mật khẩu";
        }

        if (empty($error)) {
            $is_check = $db->fetchOne("users" , "email = '".$data['email']."' AND password = '".md5($data['password'])."' ");

            if ($is_check != NULL) {
                $_SESSION['name_user'] = $is_check['name'];
                $_SESSION['name_id'] = $is_check['id'];
                echo "<script>alert(' Đăng nhập thành công !'); location.href='index.php'</script>";
            }
            else {
                // Đăng nhập thất bại
                $_SESSION['error'] = " Đăng nhập thất bại";
            }
        }
    }


 ?>

<?php require_once __DIR__. "/layouts/header.php"; ?>

<section class="form-projects">
    <div class="container">
        <div class="title-content mr-bot">
            <h3>Đăng nhập hệ thống</h3>
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success" id="alert-success" role="alert">
                    <strong style="color: #3c763d">Success!</strong>
                    <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
                </div>
            <?php endif ?>
            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger" id="alert-error" role="alert">
                    <strong style="color: red">Error!</strong>
                    <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
                </div>
            <?php endif ?>
        </div>
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-8 col-md-push-2 form-projects-text">
                    <div class="row">
                        <div class="col-md-12 form-projects-full">
                            <input type="email" name="email" placeholder="Tài khoản (Email)">
                            <?php if(isset($error['email'])): ?>
                                <p class="text-danger" id="text-danger"><?php echo $error['email'] ?></p>
                            <?php endif ?>
                        </div>
                        <div class="col-md-12 form-projects-full">
                            <input type="password" name="password" placeholder="Mật khẩu">
                            <?php if(isset($error['password'])): ?>
                                <p class="text-danger" id="text-danger"><?php echo $error['password'] ?></p>
                            <?php endif ?>
                        </div>

                        <div class=" col-md-12 button-projects">
                            <button type="submit" class="btn button btn-hoverV3">Đăng nhập</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
        
    </div>
</section>
<?php require_once __DIR__. "/layouts/footer.php"; ?>