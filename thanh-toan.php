
<?php 
	require_once __DIR__. "/autoload/autoload.php";
	$user = $db->fetchID("users",intval($_SESSION['name_id']));
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$data =
		[
			'amount' => $_SESSION['total'],
			'users_id' => $_SESSION['name_id'],
			'note' => postInput("note")
		];
	// Lưu thông tin khách hàng
		$idtran = $db->insert("transaction",$data);
		if ($idtran > 0) 
		{
			foreach ($_SESSION['cart'] as $key => $value) 
			{
				$data2 =
				[
					'transaction_id'	=> $idtran,
					'product_id' 		=> $key,
					'qty' 				=> $value['qty'],
					'price'				=> $value['price']

				];

				$id_insert = $db->insert("orders",$data2);
			}
			unset($_SESSION['cart']);
			unset($_SESSION['total']);
			$_SESSION['success'] = " Lưu thông tin đơn hàng thành công ! Chúng tôi sẽ liên hệ với bạn sớm nhất !";
			header("location: thong-bao.php");
		}
	}
 ?>
    <?php require_once __DIR__. "/layouts/header.php"; ?>
    <?php require_once __DIR__. "/layouts/slidebar.php"; ?>

        <div class="box-filter-product">
        </div>
        <!-- Show thông tin thanh toán -->
        <div class="container">
            <div class="filter"><h3 class="footer-top-title">Thanh toán đơn hàng</h3></div>

            <div class="box-filter clearfix">
                <div class="col-md-9">
                    <section class="box-main1">
                        <form action="" method="POST" class="form-horizontal formcustome" id="formcustome-label" role="form">
                            <div class="box-filter-product">
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-md-offset-1" style="margin-top: 10px"> Tên thành viên</label>
                                <div class="col-md-8">
                                    <input type="text" readonly="" name="name"  class="form-control" 
                                    value="<?php echo $user['name'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-md-offset-1" style="margin-top: 10px"> Email</label>
                                <div class="col-md-8">
                                    <input type="email" readonly="" name="email" class="form-control" value="<?php echo $user['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-md-offset-1" style="margin-top: 10px"> Số điện thoại</label>
                                <div class="col-md-8">
                                    <input type="number" readonly="" name="phone"  class="form-control" value="<?php echo $user['phone'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-md-offset-1" style="margin-top: 10px"> Tổng số tiền cần thanh toán</label>
                                <div class="col-md-8">
                                    <input type="text" readonly="" name="address"  class="form-control" value="<?php echo formatPrice($_SESSION['total']) ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-md-offset-1" style="margin-top: 10px"> Địa chỉ nhận hàng</label>
                                <div class="col-md-8">
                                    <input type="text" readonly="" name="address"  class="form-control" value="<?php echo $user['address'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-md-offset-1" style="margin-top: 10px"> Ghi chú</label>
                                <div class="col-md-8">
                                    <input type="text" name="note" class="form-control" value="">
                                </div>
                            </div>
                            <button type="submit" class="button btn-checkOut btn-checkOutV2 btn-hover" style="margin-left: 300px; margin-bottom: 30px;margin-top: 20px;" >Xác nhận thanh toán</button>

                        </form>
                    </section>
                </div>
        <!-- end -->
            </div>

            <div class="box-filter-product">
            </div>
        </div>

    <?php require_once __DIR__. "/layouts/footer.php"; ?>