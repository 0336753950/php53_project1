<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<!-- Tin tuc -->
<div class="container">
  <div class="head-title head-title-xyz clearfix"><h1>Thông tin cần biết</h1></div>
    <div class="blogPost">
      <div class="news clearfix">
            <ul class="clearfix">
              <?php foreach($data as $rows): ?>          
                <li>
                    <div class="clearfix">
                        <figure><a href="index.php?controller=informations&action=detail&id=<?php echo $id; ?>"><img alt="<?php echo $rows->name; ?>" src="assets/upload/informations/<?php echo $rows->photo; ?>"></a></figure>
                        <h2><a href="index.php?controller=informations&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h2>
                        <p><?php echo $rows->description; ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="page text-center">
        <span>1</span><a href="#">2</a><a href="#"><i class="fa fa-angle-right"></i></a>
      </div>      
    </div>
<!-- Tin tuc -->

<div class="blogSidebar">
    <div class="clearfix">
      <!-- Bài viết nổi bật -->
        <div class="right-box">
            <h3 class="title-right">Bài viết nổi bật</h3>
              <div class="news-right">
                <?php 
		          $hotInformations = $this->modelGetHotInformations();
		         ?>
		         <?php foreach($hotInformations as $rows): ?>
		                  <article>
		                    <div class="news-right-img"><a href="index.php?controller=informations&action=detail&id=<?php echo $id; ?>"><img alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" src="assets/upload/informations/<?php echo $rows->photo; ?>"></a></div>
		                    <div class="news-right-title"><a href="index.php?controller=informations&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></div>
		                </article>
		            <?php endforeach; ?> 
              </div>
        </div>
      <!-- Bài viết nổi bật -->

      <!-- Dịch vụ -->
          <div class="right-box">
            <h3 class="title-right">Dịch vụ</h3>
              <div class="news-right">
                  <ul>
                      <li><a href="articlef3db.html?new=4&amp;lap-dat-tam-pin-cho-ho-gia-dinh.htm">Lắp đặt tấm pin cho hộ gia đình</a></li>
                      <li><a href="article4f55.html?new=3&amp;bao-tri-san-pham.htm">Bảo trì sản phẩm</a></li>
                      <li><a href="article5ecc.html?new=2&amp;bao-hanh-san-pham.htm">Bảo hành sản phẩm</a></li>
                  </ul>
              </div>
          </div>
      <!-- Dịch vụ -->

      <!-- Thông tin cần biết -->
          <div class="right-box">
            <h3 class="title-right">Thông tin cần biết</h3>
              <div class="news-right">
                  <ul>
                      <li><a href="#">Danh sách đại lý</a></li>
          
                    <li><a href="#">Đổi trả hàng, hoàn tiền</a></li>
          
                    <li><a href="#">Chính sách bảo hành</a></li>
          
                    <li><a href="#">Hướng dẫn mua hàng</a></li>
          
                    <li><a href="#">Bảo mật thông tin</a></li>
          
                    <li><a href="#">Vận chuyển, giao nhận, lắp đặt</a></li>
                  </ul>
              </div>
          </div>
      <!-- Thông tin cần biết -->
    </div>
</div>
</div>