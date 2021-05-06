<style type="text/css">
        .smart-search img{width: 70px;height: 70px; margin-right: 5px;}
        .smart-search{position: absolute; width: 95%; z-index: 1; display: none; max-height: 350px; overflow: scroll;}
        .smart-search ul{padding:0px; margin:0px; list-style: none;}
        .smart-search ul li{background: white; border-bottom: 1px solid #dddddd;}
</style>

<div class="header">
  <div class="h-top">
      <div class="container">
          <div class="logo"><a href="index.php"><img alt="ĐÈN LED NĂNG LƯỢNG MẶT TRỜI" src="assets/upload/products/vioa-vita.png"></a></div>
            <div class="h-top-middle">
              <div class="clearfix" style=" position: relative;">
                  <input type="text" id="key" placeholder="Tìm theo tên hoặc mã sản phẩm bạn cần"><button><i class="fa fa-search" onclick="return search();"></i></button>
              </div>
              <div class="smart-search">
                <ul>
                </ul>
              </div>
              <script src="https://code.jquery.com/jquery-latest.js"></script>
              <script type="text/javascript">
                $(document).ready(function(){
                  //khi go phim vao o textbox
                  $("#key").keyup(function(){
                    //lay gia tri vua nhap vao
                    var strKey = $("#key").val();
                    //ham trim() loai bo khoang trang
                    strKey = strKey.trim();
                    if(strKey != ""){
                      //hien thi the html co class=smart-search
                      $(".smart-search").attr("style","display:block");
                      //---
                      //ajax de lay du lieu
                      $.ajax({
                        url: "index.php?controller=products&action=ajax&key="+strKey,
                        success: function( result ) {
                          //clear tat ca cac the li
                          $(".smart-search ul").empty();
                          //them ket qua vua tim thay
                          $(".smart-search ul").append(result);
                        }
                      });
                      //---
                    }else
                      $(".smart-search").attr("style","display:none");
                  });
                });
              </script>
  
              <div class="phone-box"><a href="tel:0904015168">Hotline: 0904.015.168</a><a href="tel:0904415979">090.441.5979</a></div>
            </div>

            <!-- gio hang -->
            <div class="header-right">
              <?php 
                $numberProduct = 0;
                if(isset($_SESSION["cart"])){
                    foreach($_SESSION["cart"] as $product){
                      $numberProduct++;
                    }
                }
              ?>
             <div class="mini-cart" style="z-index: 1;">
                  <a href="#">
                        <i class="fa fa-cart-plus"></i>
                        <div class="cart-box">
                          <a href="index.php?controller=cart"><span class="cart-box-title">Giỏ hàng</span></a>
                          <span class="cart-box-total"><?php echo $numberProduct; ?></span>
                        </div>
                  </a>

                  <div class="content-mini-cart">
                    <div class="items">
                      <?php if($numberProduct > 0): ?>
                      <?php endif; ?> </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  <div class="menutop" >
      <div class="container" style="font-size: 12px;">
          <ul class="clearfix">
              <li><a href="index.php">Trang chủ</a></li>
              <li><a href="index.php?controller=aboutus">Giới thiệu</a></li>
              
              <!-- san pham -->
                <li><a>Sản phẩm<i class="fa fa-angle-down"></i></a>
                  <div class="subcat">
                      <ul>
                          <?php 
                          //load cap 1
                          $categories = $this->modelGetCategories();
                          ?>
                          <?php foreach($categories as $rows): ?>
                          <li><a href="index.php?controller=products&action=categories&category_id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?><i class="fa fa-angle-right"></i></a>
                                <div class="smallsubcat clearfix">
                                  <ul>
                                    <?php 
                                    //load cap 2
                                    $categoriesSub = $this->modelGetCategoriesSub($rows->id);
                                    ?>
                                    <?php foreach($categoriesSub as $rowsSub): ?>
                                    <li><a href="index.php?controller=products&action=categories&category_id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                                    <?php endforeach; ?>
                                  </ul>
                                </div>
                            </li>
                            <?php endforeach; ?>     
                        </ul>
                    </div>
                </li>
                <!-- san pham -->

                <li>
                  <a href="index.php?controller=services">Dịch vụ</a>
                </li>

                <li>
                  <a href="index.php?controller=news">Tin tức</a>
                </li>

                <li>
                  <a href="index.php?controller=informations">Thông tin cần biết</a>
                </li>

                <li><a href="index.php?controller=wishlist">Yêu thích</a></li>
                <li><a href="index.php?controller=contact">Liên hệ</a></li>
                <?php if(isset($_SESSION["customer_email"]) == false): ?>
                <li><a href="index.php?controller=account&action=login">Đăng nhập</a></li>
                <li><a href="index.php?controller=account&action=register">Đăng ký</a></li>
                <?php else: ?>
                <li><a style="text-transform: none;" href="#">Xin chào <?php echo $_SESSION["customer_email"]; ?></a></li>&nbsp; &nbsp;
                <li><a href="index.php?controller=account&action=logout">Đăng xuất</a></li>
                <?php endif; ?>
          </ul>
      </div>
  </div>
  
</div>