<?php 

    require_once __DIR__. "/autoload/autoload.php";
    if (isset($_SESSION['name_id'])) {
        echo "<script>alert(' Bạn đã đăng nhập ! Cần phải đăng xuất nếu muốn đăng ký mới'); location.href='index.php'</script>";
    }

    $data =
    [
        'name'      => postInput('name'),
        'email'     => postInput('email'),
        'password'  => postInput('password'),
        'phone'     => postInput('phone'),
        'address'   => postInput('address')
    ];

    $error = [];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        if ($data['name'] == '') {
            $error['name'] = "Tên không được để trống";
        }

        if ($data['email'] == '') {
            $error['email'] = "Email không được để trống";
        }
        else {
            $is_check = $db->fetchOne("users" , "email = '".$data['email']."' ");
            if ($is_check != NULL) {
                $error['email'] = " Email đã tồn tại, vui lòng nhập Email mới";
            }
        }

        if ($data['phone'] == '') {
            $error['phone'] = "Vui lòng nhập thông tin";
        }

        if ($data['password'] == '') {
            $error['password'] = "Vui lòng nhập thông tin";
        }
        else {
            $data['password'] = MD5(postInput("password"));
        }

        if ($data['address'] == '') {
            $error['address'] = "Vui lòng điền địa chỉ liên hệ";
        }

        // Kiểm tra mảng error
        if (empty($error)) {
            $idinsert = $db->insert("users",$data);
            if ($idinsert > 0) {
                $_SESSION['success'] = "Đăng ký thành công!";
                header("location: dang-nhap.php");
            }
            else {

            }
        }

    }

 ?>



<?php require_once __DIR__. "/layouts/header.php"; ?>
<?php require_once __DIR__. "/layouts/slidebar.php"; ?>
<section class="form-projects">
    <div class="container">
        <div class="title-content mr-bot">
            <h3>Đăng ký thành viên</h3>
        </div>
        <form action="" method="POST">
            <div class="row">
            <div class="col-md-8 col-md-push-2 form-projects-text">
                <div class="row">
                    <div class="col-md-12 form-projects-full">
                        <input type="text" name="name" placeholder="Họ và Tên">
                        <?php if (isset($error['name'])): ?>
                            <p class="text-danger" id="text-danger"><?php echo $error['name'] ?></p>
                        <?php endif ?>
                    </div>
                    <div class="col-md-12 form-projects-full">
                        <input type="number" name="phone" placeholder="Số điện thoại">
                        <?php if(isset($error['phone'])): ?>
                            <p class="text-danger" id="text-danger"><?php echo $error['phone'] ?></p>
                        <?php endif ?>
                    </div>
                    <div class="col-md-12 form-projects-full">
                        <input type="email" name="email" placeholder="Email@gmail.com">
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
                    <div class="col-md-12 form-projects-full">
                        <input type="text" name="address" placeholder="Địa chỉ">
                        <?php if(isset($error['phone'])): ?>
                            <p class="text-danger" id="text-danger"><?php echo $error['phone'] ?></p>
                        <?php endif ?>
                    </div>
                    <div class=" col-md-12 button-projects">
                        <button type="submit" class="btn button btn-hoverV3">Đăng ký</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</section>
<?php require_once __DIR__. "/layouts/footer.php"; ?>