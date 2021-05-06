<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
  
    <div class="row">
      <div class="pro-head">
          <div class="container">
                <div class="pro-head-inner clearfix">
                    <div class="pro-image">
                      <?php foreach($data as $rows): ?>
                      <div class="pro-image-inner">
                          <div class="image_preview">
                              <a href="#" onclick="return hs.expand(this)"><img itemprop="image" alt="" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="product-info-main">
                        <div class="product-info-main-head clearfix">
                            <h1><?php echo $record->name; ?></h1>
                            <ul class="clearfix">

                                <li>
                                    <p itemprop="description" class="prod-xyz"><?php echo $record->description; ?></p>
                                </li>
                                
                                <li>
                                    <div class="label">Giá bán:
                                      <span class="item-price "><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?> đ</span>
                                    </div>
                                    <div>Giá thị trường:</span>
                                      <span class="old-price market"><?php echo number_format($rows->price); ?> đ</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="label">Tiết kiệm:</div>
                                    <span class="red"><?php echo number_format(($rows->price*$rows->discount)/100); ?> đ <span><?php echo $record->discount; ?> %</span></span>
                                </li>
                                
                                <li>
                                  <div class="label">Lượt xem:</div>
                                    <span>326</span>
                                </li>
                                <li>
                                    <div style="padding-top:8px;" class="clearfix">
                                      <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="addcart"><i class="fa fa-cart-plus"></i>Thêm vào giỏ hàng</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                  <h4 style="padding-left: 10px;font-size: 25px;margin: 0px;padding: 10px 0px;">Rating</h4>
              <style type="text/css">
                .vote{border:black 1px solid; border-radius: 3px;margin: 10px 0px;}
              </style>
                  <div style="float: left;">
                    <img src="assets/upload/products/star.jpg"><br>
                    <img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><br>
                    <img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><br>
                    <img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><br>
                    <img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg"><img src="assets/upload/products/star.jpg">
                  </div>
                  <div style="float: right;">
                    <span class="vote"><?php echo $this->getStar($record->id,1); ?> vote</span><br>
                    <span class="vote"><?php echo $this->getStar($record->id,2); ?> vote</span><br>
                    <span class="vote"><?php echo $this->getStar($record->id,3); ?> vote</span><br>
                    <span class="vote"><?php echo $this->getStar($record->id,4); ?> vote</span><br>
                    <span class="vote"><?php echo $this->getStar($record->id,5); ?> vote</span>
                  </div>

                        <div class="prod-x clearfix">
                          <p><span>Mã:</span> .<br>
                          <span>Danh mục:</span> 
                            <a rel="tag" data-original-title="" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $record->name; ?></a><br>
                          <span>Từ khóa:</span>
                            <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" title=""><?php echo $record->name; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="container">
          <div class="clearfix">
              <ul class="tabs">
                    <li class="tab-link current" data-tab="tab-1">Thông tin sản phẩm</li>
                    <li class="tab-link" data-tab="tab-2">Thông số kỹ thuật</li>
                </ul>
                <div id="tab-1" class="tab-content current">
                  <h2 class="pro-title"><?php echo $record->name; ?></h2>
                  <article class="clearfix">
                    <p class="MsoNormal"><o:p></o:p></p>
                    <p class="MsoNormal"><?php echo $record->content; ?><o:p></o:p></p>
                  </article>
                </div>
                <div id="tab-2" class="tab-content">
                  <h3><?php echo $record->description; ?></h3>
                    <article class="clearfix"></article>
                </div>
            </div>
            <div class="prod-comment clearfix">
              <div class="fb-comments" data-href="http://vinhthai.com.vn/pro.asp?pro=19&amp;bo-chuyen-doi-inverter-deye-60kw.htm" data-width="100%" data-numposts="5"></div>
            </div>
        </div>
    </div>
    <script src="assets/admin/layout1/js/jquery-1.12.4.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    
      $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');
    
        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');
    
        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
      })
  
    })
    </script>

    <div class="row">
      <div class="clearfix">
          <div class="container">
              <div class="block-title clearfix">
                <h2><a href="#">Sản phẩm cùng chuyên mục</a></h2>
              </div>
        
                <div class="prod prod-pad clearfix">
                  <ul class="clearfix">
            
                      <li>
                          <div class="clearfix">
                              <figure><a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a></figure>
                                <div class="prod-text clearfix">
                                  <h3><a href="#"><?php echo $record->name; ?></a></h3>
                                </div>
                                <div class="prod-price clearfix">
                                  
                                    <span class="item-price"> <?php echo number_format($rows->price); ?> đ</span>
                                    <span class="old-price"> <?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?>  đ</span>
                                    
                                </div>
                            </div>
                        </li>         
                    </ul>
                </div>
                <div class="letview text-center"><a href="#">Xem thêm các sản phẩm khác</a></div>
                
            </div>
      </div>
    </div>
</div>