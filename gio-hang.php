<?php 
    require_once __DIR__. "/autoload/autoload.php";
    $sum=0;
    if (!isset($_SESSION['name_id'])) {
        echo "<script>alert(' Bạn chưa đăng nhập ! Cần đăng nhập tài khoản để vào giỏ hàng'); location.href='index.php'</script>";
    }

    if ( ! isset($_SESSION['cart']) || count($_SESSION['cart']) == 0 ) {
        echo "<script>alert(' Không có sản phẩm nào trong giỏ hàng !'); location.href='index.php'</script>";
    }
    


 ?>
<?php require_once __DIR__. "/layouts/header.php"; ?>
<div class="breakcrumb text-center breadcrumb-garden">
    <h3 class="breakcrumb-title">Giỏ hàng của bạn</h3>
    <div class="breakcrumb-desc">
        <a href="index.php">Trang chủ</a>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <a href="gio-hang.php">Giỏ hàng</a>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <a href="#">Chi tiết giỏ hàng</a>
    </div>
</div>
<section class="gardenShop-content">
                <div class="container">
                    <div class="pgshopping-cart">
                        <?php if(isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <strong style="color: #3c763d">Success!!</strong><?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
                    </div>
                <?php endif ?>
                        <table class="table table-shopCart">
                            <thead>
                            <tr class="shoppingCart-title">
                                <th class="shopping-cart-img">Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th class="shopping-cart-price">Đơn giá</th>
                                <th class="shopping-cart-quantity">Số lượng</th>
                                <th>Tổng tiền</th>
                                <th><a href="#"><i class="fa fa-times fa-shoppingCart" style="background:#8bc052; border:none"></i></a></th>
                              </tr>
                            </thead>
                            <tbody class="shopCart-bottom">
                            <!-- Danh sách sản phẩm --> 
                            <?php $stt = 1; foreach ($_SESSION['cart'] as $key => $value): ?>
                                <tr class="cart-product">
                                    <td class="shopping-cart-img">
                                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads() ?>product/<?php echo $value['thunbar'] ?>" alt="ShoppingCart_01"></a>
                                    </td>
                                    <td class="cart-product-one"><?php echo $value['name'] ?></td>
                                    <td class="shopping-cart-price"><span class="price-shCart"><?php echo formatPrice($value['price']); ?></span></td>
                                    <td class="cart-product-two shopping-cart-quantity">
                                        <div class="pd-c-quantity quantity add-card add-card-product">
                                            <input type="number" min="1" max="100" step="1" value="<?php echo $value['qty'] ?>">
                                            <div class="quantity-button quantity-down">
                                                <span><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="quantity-button quantity-up">
                                                <span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price-total"><span class="price-shCart"><?php echo formatPrice($value['price'] * $value['qty']) ?></span></td>
                                    <td><a href="remove.php?key=<?php echo $key ?>"><i class="fa fa-times fa-border fa-shoppingCart"></i></a></td>
                                </tr>
                                <?php $sum += ($value['price'] * $value['qty']); $_SESSION['tongtien'] = $sum; ?>
                            <?php $stt ++;  endforeach ?>
                            </tbody>
                            <!-- end -->
                        </table>
                    </div>
                    <div class="button-cart clearfix">
                        <div class="form-type form-type-custom">
                            <button class="button btn-hover btn-updateCart">Cập nhật đơn hàng</button>
                        </div>
                        <div class="form-subscribe pull-right form-cart">
                            <div class="form-tax form-tax-total form-cart-total">
                                <h4>Thông tin đơn hàng</h4>
                                <div class="box-formTax">
                                    <div class="cart-total1 cart-shopping">
                                        <div class="form-cart-top">
                                            <div class="form-total1 form-cart-item">
                                                <h5>Số tiền</h5>
                                                <p class="pull-right"><?php echo formatPrice($_SESSION['tongtien']); ?></p>
                                            </div>
                                            <div class="form-total1 form-cart-item">
                                                <h5>VAT</h5>
                                                <p class="pull-right">10%</p>
                                            </div>
                                            <div class="form-total1 form-cart-item">
                                                <h5>Tổng tiền</h5>
                                                <p class="pull-right"><?php $_SESSION['total'] = $_SESSION['tongtien'] * 110/100; echo formatPrice($_SESSION['total']) ?></p>
                                            </div>
                                        </div>
                                        <div class="form-total1 form-cart-item form-cart-bottom">
                                            <h5>Cần kiểm tra kỹ số lượng các sản phẩm đã chọn</h5>
                                        </div>
                                        <div class="button-proceed">
                                            <a href="thanh-toan.php">
                                                <button class="button btn-checkOut btn-checkOutV2 btn-hover">THANH TOÁN ĐƠN HÀNG</button>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
<?php require_once __DIR__. "/layouts/footer.php"; ?>