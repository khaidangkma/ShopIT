

<?php
	$open = "category";
	require_once __DIR__. "/../../autoload/autoload.php";

	$id = intval(getInput('id'));


	$EditCategory = $db->fetchID("category",$id);
	if( empty($EditCategory))
	{
		$_SESSION['error'] = " Dữ liệu không tồn tại";
		redirectAdmin("category");
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$data =
		[
			"name" => postInput('name'),
			"slug" => to_slug(postInput("name"))
		];

		$error = [];

		if(postInput('name')=='')
		{
			$error['name'] = " Mời bạn nhập đầy đủ tên danh mục";
		}

		// error trống có nghĩa là không có Lỗi
		if (empty($error))
		{
			//Kiểm tra
			if ($EditCategory['name'] != $data['name'])
			{
				$isset = $db->fetchOne("category","name = '".$data['name']."' ");
				if (count($isset) > 0)
				{
					$_SESSION['error'] = "Tên danh mục đã tồn tại";
					redirectAdmin("category");
				}
				else
				{
					$id_update = $db->update("category",$data,array("id"=>$id));
					if($id_update > 0)
					{
						$_SESSION['success'] = "Cập nhật thành công";
						redirectAdmin("category");
					}
					else
					{
						$_SESSION['error'] = "Dữ liệu không thay đổi";
						redirectAdmin("category");
					}
				}
			}
			else
			{
				$id_update = $db->update("category",$data,array("id"=>$id));
				if($id_update > 0)
				{
					$_SESSION['success'] = "Cập nhật thành công";
					redirectAdmin("category");
				}
				else
				{
					$_SESSION['error'] = "Dữ liệu không thay đổi";
					redirectAdmin("category");
				}
			}
		}
	}


 ?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
	<!-- Page Heading NOI DUNG -->
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Thêm mới danh mục
	        </h1>
	        <ol class="breadcrumb">
	            <li>
	                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
	            </li>
	            <li>
	                <i ></i>  <a href="">Danh mục</a>
	            </li>
	            <li class="active">
	                <i class="fa fa-file"></i> Thêm mới
	            </li>
	        </ol>
	        <div class="clearfix"></div>
	        <!-- Thông báo lỗi -->
	        <?php require_once __DIR__. "/../../../partials/notification.php"; ?>
	    </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="" method="POST">
			    <div class="form-group">
			        <label for="inputEmail3" class="col-sm-2 control-label"> Tên danh mục </label>
			        <div class="col-sm-8">
			            <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="name" value="<?php echo $EditCategory['name'] ?>">
			            <?php if (isset($error['name'])): ?>
			            	<p class="text-danger"> <?php echo $error['name'] ?></p>
			            <?php  endif?>
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="col-sm-offset-2 col-sm-10">
			            <button type="submit" class="btn btn-success"> Lưu </button>
			        </div>
			    </div>
			</form>
		</div>
	</div>
	<!-- /.row -->
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>