<?php 

    require_once __DIR__. "/autoload/autoload.php";
    $id = intval(getInput('id'));


    // Chi tiết sản phẩm
    $product = $db->fetchID("product",$id);
    $category = $db->fetchAll("category");

    // Lấy danh mục sản phẩm
    $cateid = intval($product['category_id']);
    $sql = "SELECT * FROM product WHERE category_id = $cateid ORDER BY ID DESC LIMIT 3";
    $sanphamkemtheo = $db->fetchsql($sql);

 ?>

<?php require_once __DIR__. "/layouts/header.php"; ?>
    <section class="shop-product-reviewDesc">
        <div class="product-reivew-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pd-details-left clearfix">
                        <div class="detail-slider detail-fullwidth-slider">
                            <!-- Ảnh sản phẩm -->
                            <div class="row">
                                <div class="col-sm-10 col-md-10 col-md-push-2">
                                    <div class="slideshow-container">
                                        <div class=" mySlides productSlides" style="display: none;">
                                            <img src="<?php echo uploads() ?>product/<?php echo $product['thunbar'] ?>" alt="detail" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <!-- Ảnh kèm theo -->
                                <div class="col-sm-2 col-md-2 detail-img-left col-md-pull-10">
                                    <span class="dot slide-detail-item" onclick="currentSlide(1)"><img src="<?php echo base_url() ?>public/frontend/images/page-product-review/Home_Store_V2-14.jpg" class="img-responsive" alt="gallery-detail02"></span>
                                    <span class="dot slide-detail-item active" onclick="currentSlide(2)"><img src="<?php echo base_url() ?>public/frontend/images/page-product-review/Home_Store_V2-15.jpg" class="img-responsive" alt="gallery-detail02"></span>
                                    <span class="dot slide-detail-item" onclick="currentSlide(3)"><img src="<?php echo base_url() ?>public/frontend/images/page-product-review/Home_Store_V2-16.jpg" class="img-responsive" alt="gallery-detail02"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pd-details-right clearfix">
                        <div class="mid-product-content media-body">
                            <h3><?php echo $product['name']; ?></h3>
                            <div class="notable">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <p class="price-old"><?php echo formatPrice($product['price']) ?></p>
                            <span class="details-price">
                                <?php echo formatpricesale($product['price'],$product['sale']) ?>
                            </span>
                            <div class="details-desc">
                                <p><?php echo $product['content']; ?></p>
                            </div>
                                <div class="details-button">
                                    <div class="pd-c-quantity quantity details-next">
                                        <input type="number" min="1" max="100" step="1" value="1">
                                        <div class="quantity-button quantity-down">
                                            <span class="step-next"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="quantity-button quantity-up">
                                            <span class="step-next"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <a href="add-cart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-cart fa-shop" aria-hidden="true"></i>
                                        Thêm vào giỏ hàng
                                    </a>
                                </div>
                            <div class="category_tag">
                                <div class="SKU tags">
                                    <p class="tags-item">Mã sản phẩm:</p>
                                    <span><a href="#" class="sku-nd"><?php echo $product['id'] ?></a></span>
                                </div>
                                <div class="category tags">
                                    <p class="tags-item">Category: </p>
                                    <?php 
                                        $category = $db->fetchID("category",$id=$product['category_id'])
                                     ?>
                                     <span><a href="#" class="sku-nd"><?php echo $category['name']  ?></a></span>
                                </div>
                                <div class="share-link tags">
                                    <p class="tags-item">Share Link:</p>
                                    <ul class="sku-nd">
                                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-review-bottom">
            <div class="container">
                <div class="box-review-bottom text-center">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-review" role="tablist">
                        <li role="presentation" class="active"><a href="#desc" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#review" aria-controls="profile" role="tab" data-toggle="tab">Reviews (1)</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tab-review text-left">
                        <div role="tabpanel" class="tab-pane active" id="review">
                            <div class="review-item">
                                <div class="blog_dt_comments">
                                    <div class="comment-list">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-2">
                                                <div class="comment-user">
                                                    <a href="#"><img src="<?php echo base_url() ?>public/frontend/images/blog_details/Blog_Details_2.jpg" alt="images_comments" class="img-responsive"></a>
                                                    <span class="rating-img">
                                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-xs-9 col-md-10">
                                                
                                                <div class="comment-desc review-desc">
                                                    <?php if (isset($_SESSION['name_user'])): ?>
                                                    <h4>
                                                        <?php echo $_SESSION['name_user']; ?>
                                                    </h4>
                                                        <p>Tôi rất hài lòng về dịch vụ chăm sóc khách hàng của của hàng, nhân viên tư vấn rất nhiệt tình, chu đáo. Tôi sẽ quay lại mua sản phẩm khác và giới thiệu cho bạn bè tôi mua hàng vì đây là dịch vụ rất uy tín.
                                                            Like </p>
                                                        <?php else : ?>
                                                    <h4>Fan cứng</h4>
                                                    <span>27 Aug 2016</span>
                                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.
                                                            Like </p>
                                                    <?php endif; ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/blog_dt_comment-->
                                <div class="blog_dt_leave">
                                    <h3 class="review-title">Add Review </h3><span class="review-rule hidden-xs hidden-sm hidden-md"></span>
                                    <form action="#" method="POST" role="form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Name*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Email*">
                                            </div>
                                        </div><!--/form-group-->
                                        <h3 class="review-title">Your Rating:  </h3>
                                    <span class="rating-text">
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                        <textarea placeholder="Your Review" class="textarea"></textarea>
                                        <button type="button" class="btn button btn-hover btn-review">Submit</button>
                                    </form>
                                </div><!--/blog_dt_leave-->
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="desc">
                            <div class="desc-item">
                                <p>
                                    Denim collection, cotton fabric, dark wash, five pockets, zip and one button fastening, 16 cm hem. Smart Casual collection, cotton fabric, textured design, rounded neck, long sleeve, cable knit finish.<br>
                                    - Front pocket<br>
                                    - Twin side pockets<br>
                                    - Lobster clasp<br>
                                    - Zip closure<br>
                                    - Contrast lining<br>
                                    -Inner pocket<br>
                                    20.08x13.39x5.12in (LengthxHeightxWidth)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require_once __DIR__. "/layouts/footer.php"; ?>