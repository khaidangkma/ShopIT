
<?php 

	require_once __DIR__. "/autoload/autoload.php";

	$id = intval(getInput('id'));
	$EditCategory = $db->fetchID("category",$id);

	if(isset($_GET['page']))
	{
		$p = $_GET['page'];
	}
	else
	{
		$p = 1;
	}

	$sql = "SELECT * FROM product WHERE category_id = $id";

	$total = count($db->fetchsql($sql));

	$product = $db->fetchJones("product",$sql,$total,$p,12,true);
	if(isset($product['page']))
    {
        $sotrang = $product['page'];
        unset($product['page']);
    }

	$path = $_SERVER['SCRIPT_NAME'];
	// _debug($path);


 ?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<?php require_once __DIR__. "/layouts/slidebar.php"; ?>
<section class="page-shop-slidebar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="slidebar-right">
                                <div class="top-product clearfix">
                                    <div class="top-product-left pull-left">
                                        <div class="dropdown-title">Item Show : </div>
                                        <div class="dropdown dropdown-sidebar">
                                            <button class="dropdown-toggle dropdown-slidebar-item" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                12 Products
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Plant</a></li>
                                                <li><a href="#">Pots</a></li>
                                                <li><a href="#">Seeds</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pull-right gird-list">
                                        <a href="#" class="grid-view bg-active">
                                            <i class="fa fa-th-large" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="grid-view">
                                            <i class="fa fa-bars" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Danh sách sản phẩm được hiển thị -->
                                
                                <div class="content-box-product">
                                    <div class="row">
                                        
                                        
                                    <?php foreach ($product as $item): ?>
                                        <div class="col-xs-4 col-sm-4 col-md-4 list-product">
                                                <div class="group-box-hover">
                                                    <div class="product">
                                                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" alt="product1" class="img-responsive"></a>
                                                        <button class="btn button product-cart btn-hover border-color">
                                                            <a href="add-cart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-cart fa-shop" aria-hidden="true"></i>
                                                            Thêm vào giỏ hàng
                                                            </a>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-name">
                                                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
                                                    </div>
                                                    <div class="product-name">
                                                        <span>Mã sản phẩm : <?php echo $item['id'] ?></span>
                                                    </div>
                                                    <p class="price-old"><?php echo formatPrice($item['price']) ?></p>
                                                    <p><?php echo formatpricesale($item['price'],$item['sale']) ?></p>
                                                </div>
                                        </div>
                                    <?php endforeach ?>
                                        
                                    </div>
                            </div>
                            <!-- Phân trang hiển thị sản phẩm-->
                                <nav aria-label="Page navigation" class="page-number">
                                  <ul class="pagination page-text">
                                    <li>
                                      <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">Prev</span>
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
                                      <a href="#" aria-label="Next">
                                        <span aria-hidden="true">Next</span>
                                      </a>
                                    </li>
                                  </ul>
                                </nav>
                            </div>
                        </div>
<?php require_once __DIR__. "/layouts/menu-left.php"; ?>
                    </div>
                </div>
            </section>
<?php require_once __DIR__. "/layouts/footer.php"; ?>