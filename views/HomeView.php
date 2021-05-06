<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangChu.php";
 ?>
 <style type="text/css">
   .purchase{border: 1px solid blue;background: blue;;border-radius: 5px;width: 100px;padding: 5px; margin: 8px auto;}
 </style>
<?php 
$categories = $this->modelGetCategories();
?>
<?php foreach($categories as $rowsCategories): ?>

    <div class="container">
      <div class="title">
        <h2><a href="#"><?php echo $rowsCategories->name; ?></a></h2>
      </div>
        
      <div class="prod clearfix">
                  
        <ul class="clearfix" >
          <?php 
          $products = $this->modelGetProductsHome($rowsCategories->id);
          ?>
          <?php foreach($products as $rows): ?>
            <li>
              <div class="clearfix" style="position: relative;">
                <?php if ($rows->discount != 0): ?>
                <div style="position: absolute;left: 0px;z-index: 1;width: 50%;height: 30px;padding: 5px;color: white;background: black;border: 1px solid black;"><?php echo $rows->discount; ?>%</div>
                <?php endif; ?>
                <div class="heart" style="position: absolute;z-index: 1;padding: 5px;color: white;right: 0px;border: 1px solid red;background: red;width: 50%;height: 30px;">
                  <a style="color: white;margin: 5px;" href="index.php?controller=wishlist&action=create&id=<?php echo $rows->id; ?>"><i class="fa fa-heart"></i>&nbsp;&nbsp;Wishlist
                  </a>
                </div>

                <figure><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>"></a>
                </figure>
                <div class="prod-text clearfix">
                  <h3><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                                    
                  </div>
                    <div class="prod-price clearfix">
                    <?php if(number_format($rows->price) == 0): ?>
                      <span class="price"><a href="index.php?controller=contact"> Liên hệ</a></span>
                      <?php else: ?>
                      <span class="item-price"> <?php echo number_format($rows->price); ?> đ</span>
                      <span class="old-price"> <?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?>  đ</span>
                      <?php endif; ?>
                    </div>

                    <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/upload/products/star.jpg"></a>
                      <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/upload/products/star.jpg"></a>
                      <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/upload/products/star.jpg"></a>
                      <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/upload/products/star.jpg"></a>
                      <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/upload/products/star.jpg"></a>
                    </p>

                    <div class="" style="display: inline-flex;">
                      <div class="purchase">
                        <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">
                          <b style="color: white;">Mua hàng</b>
                        </a>
                      </div>
                      
                    </div>
                  </div>
            </li>
              <?php endforeach; ?>
            </ul>
                      
      </div>
  </div>
</div>
<?php endforeach; ?>
<div class="clearfix">
  <div class="container">
      <div class="block-title clearfix"><h3><a>Tin tức &amp; Sự kiện</a></h3></div>
        <div class="related clearfix">
  
            <ul class="clearfix">
        <?php 
          $hotNews = $this->modelGetHotNews();
         ?>
         <?php foreach($hotNews as $rows): ?>
                <li>
                    <div class="clearfix">
                        <figure><a href="index.php?controller=news&action=detail&id=<?php echo $id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a></figure>
                        <h3><a class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                        
                    </div>
                </li>
                
               <?php endforeach; ?> 
            </ul>
        
        </div>
    </div>
</div>
</div>
