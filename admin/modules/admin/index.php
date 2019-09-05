

<?php 
	$open = "admin";
	require_once __DIR__. "/../../autoload/autoload.php";


	if( isset($_GET['page']))
	{
		$p = $_GET['page'];
	}
	else
	{
		$p = 1;
	}

	$sql = "SELECT admin.* FROM admin ORDER BY ID DESC ";
	$admin = $db->fetchJone('admin',$sql,$p,5,true);

	if(isset($admin['page']))
	{
		$sotrang = $admin['page'];
		unset($admin['page']);
	}


 ?>

<?php require_once __DIR__. "/../../layouts/header.php"; ?>
	<!-- Page Heading NOI DUNG -->
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            Danh sách Quản lý
	            <a href="add.php" class="btn btn-success">Thêm mới</a>
	        </h1>
	        <ol class="breadcrumb">
	            <li>
	                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
	            </li>
	            <li class="active">
	                <i class="fa fa-file"></i> Admin
	            </li>
	        </ol>
	        <div class="clearfix"></div>
	        <!-- Thông báo lỗi -->
	        <?php require_once __DIR__. "/../../../partials/notification.php"; ?>
	    </div>
	</div>
	<div class="row">
    	<div class="col-md-12">
    		<div class="table-responsive">
		    <table class="table table-bordered table-hover">
		        <thead>
		            <tr>
		                <th>STT</th>
		                <th>Name</th>
						<th>Email</th>
						<th>Phone</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php $stt =1 ;foreach ($admin as $item): ?>
			        	<tr>
			                <td><?php echo $stt ?></td>
			                <td><?php echo $item['name'] ?></td>
			                <td><?php echo $item['email'] ?></td>
			                <td><?php echo $item['phone'] ?></td>
			                <td>
			                	<a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id'] ?>"><i class="fa fa-edit"></i>Sửa</a>
			                	<a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-times"></i>Xóa</a>
			                </td>
			            </tr>
		        	<?php $stt++; endforeach ?>
		            
		        </tbody>
		    </table>
			    <div class="pull-right">
			    	<nav aria-label="Page navigation" class="clearfix">
	    			    <ul class="pagination">
	    			        <li>
	    			            <a href="" aria-label="Previous">
	    			            <span aria-hidden="true">&laquo;</span>
	    			            </a>
	    			        </li>

	    			        <?php for( $i = 1 ; $i <= $sotrang ;$i++) : ?>
	    			        	<?php 
	    			        	if(isset($_GET['page']))
	    			        	{
	    			        		$p = $_GET['page'];
	    			        	}
	    			        	else
	    			        	{
	    			        		$p = 1;
	    			        	}
	    			        	?>
								<li class="<?php echo ($i == $p) ? 'active' : '' ?>">

									<a href="?page=<?php echo $i ;?>"><?php echo $i ; ?></a>
								</li>
							<?php endfor; ?>
	    			        <li>
	    			            <a href="" aria-label="Next">
	    			            <span aria-hidden="true">&raquo;</span>
	    			            </a>
	    			        </li>
	    			    </ul>
    				</nav>
			    </div>
			</div>
    	</div>
    </div>
	<!-- /.row -->
<?php require_once __DIR__. "/../../layouts/footer.php"; ?>