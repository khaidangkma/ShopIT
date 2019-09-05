<div class="col-md-3 col-md-pull-9">
                            <div class="slidebar-left">
                                <div class="input-group input-slider">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default slider-search" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </span>
                                    <input type="text" class="form-control form-sidebar" placeholder="Search">
                                </div><!-- /input-group -->
                                <div class="box-slider-left slideCategory">
                                    <h3 class="slider-left-title">Danh mục sản phẩm</h3>
                                    <ul class="slide-left-list">
                                        <?php foreach($category as $item) :?>
                                            <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Sản phẩm mới được update -->
                                <div class="box-slider-left slideNewproduct">
                                    <h3 class="slider-left-title">Sản phẩm mới</h3>

                                    <?php foreach ($productNew as $item): ?>
                                    <div class="box-slideNewproduct">
                                        <div class="slideNewproduct-item slideNewproduct-img">
                                            <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><img src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" alt="product1" class="img-responsive" /></a>
                                        </div>
                                        <div class="slideNewproduct-item slideNewproduct-text">
                                            <h5><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></h5>
                                            <p class="slideProduct-price"><?php echo formatPrice($item['price']) ?></p>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                    
                                </div>
                                <!-- end -->
                                    <a href="#"><img src="<?php echo base_url() ?>public/frontend/images/page-shop-sliderbar/banner.jpg" alt="banner slideBar" class="img-responsive"/></a>
                                    <h3 class="slider-left-title slideBanner-title" style="color: red">Discount 15% for plant</h3>
                                </div>
                                <div class="box-slider-left slideTag">
                                    <h3 class="slider-left-title">Tags</h3>
                                    <ul class="slideTag-list">
                                        <?php foreach($category as $item) :?>
                                            <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>