<?php 

	require_once __DIR__. "/autoload/autoload.php";
    if ( !isset($_SESSION['name_id'])) {
        echo "<script>alert(' Xin vui lòng đăng nhập để thêm vào giỏ hàng'); location.href='index.php'</script>";
    }

    $id = intval(getInput('id'));
	$product = $db->fetchID("product",$id);

	/*Kiểm tra nếu tồn tại giỏ hàng thì cập nhật giỏ hàng
	***********		
	nếu không có thì tạo mới giỏ*/

	if ( !isset($_SESSION['cart'][$id])) {
		// Tạo mới
		$_SESSION['cart'][$id]['name'] 		= $product['name'];
		$_SESSION['cart'][$id]['thunbar'] 	= $product['thunbar'];
		$_SESSION['cart'][$id]['qty'] 		= 1;
		$_SESSION['cart'][$id]['price'] 	= ((100 - $product['sale']) * $product['price']) / 100;

	} else {
		$_SESSION['cart'][$id]['qty'] += 1;
	}

	echo "<script>alert(' Bạn đã thêm vào giỏ hàng thành công'); location.href='gio-hang.php'</script>";
	

 ?>