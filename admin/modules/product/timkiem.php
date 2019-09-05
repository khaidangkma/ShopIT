<?php 

	$open = "product";
	require_once __DIR__. "/../../autoload/autoload.php";

	if( isset($_GET['page']))
	{
		$p = $_GET['page'];
	}
	else
	{
		$p = 1;
	}

	$sql = "SELECT product.*,category.name as namecate FROM product
		LEFT JOIN category on category.id = product.category_id
	 ";
	$product = $db->fetchJone('product',$sql,$p,10,true);

	if(isset($product['page']))
	{
		$sotrang = $product['page'];
		unset($product['page']);
	}



 ?>

 <?php require_once __DIR__."/../../layouts/header.php"; ?>

 <div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Danh sách sản phẩm
	            <a href="add.php" class="btn btn-success">Thêm mới</a>
	        </h1>

	        <ol class="breadcrumb">
	        	<div class="form-group">
				    <a href="timkiem.php" class="btn btn-lg btn-success">Tìm kiếm</a>
				    <input class="form-control">
				    
				    <p class="help-block">Nhập từ khóa bạn muốn tìm vào ô bên trên.</p>
				</div>
	            <li>
	                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
	            </li>
	            <li class="active">
	                <i class="fa fa-file"></i> Sản phẩm
	            </li>
	            <li class="active">
	                <i class="fa fa-search"></i>Tìm kiếm
	            </li>
	        </ol>
	        <div class="clearfix"></div>
	        <!-- Thông báo lỗi -->
	        <?php require_once __DIR__. "/../../../partials/notification.php"; ?>
	    </div>
	    <?php 
	    


	     ?>
	</div>

 <?php require_once __DIR__."/../../layouts/footer.php"; ?>