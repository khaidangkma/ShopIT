
<?php 

	require_once __DIR__. "/autoload/autoload.php";
	

 ?>
    <?php require_once __DIR__. "/layouts/header.php"; ?>
    <?php require_once __DIR__. "/layouts/slidebar.php"; ?>
    <div class="box-filter-product">
        </div>
        <div class="box-filter clearfix">
            <div class="col-xs-12 col-sm-4 col-md-4">
            <section class="box-main1">
            </section> 
        </div>
        <div class="container">
            <div class="filter"><h3 class="footer-top-title">Thông báo thanh toán</h3></div>
                <div class="box-filter clearfix">
                    <div class="col-md-9">
                    <section class="box-main1">
                        <?php if(isset($_SESSION['success'])): ?>
                            <div class="alert alert-success" id="alert-success" role="alert">
                                <strong style="color: #3c763d">Success!</strong>
                                <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
                            </div>
                        <?php endif ?>
                        <a href="index.php" class="btn btn-success">Trở về trang chủ</a>
                    </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-filter-product">
        </div>
    <?php require_once __DIR__. "/layouts/footer.php"; ?>