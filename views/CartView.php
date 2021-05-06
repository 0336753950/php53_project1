<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangTrong.php";
?>     
<style type="text/css">
  .button{padding: 5px;border: 1px solid black; border-radius: 5px;}
</style>                    
      <div class="head-title head-title-xyz clearfix"><h1>Thông tin giỏ hàng</h1></div>

        <div class="template-cart">
          <form action="index.php?controller=cart&action=update" method="post">
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th style="width: 100px;" class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th style="width: 30px;" class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($_SESSION["cart"] as $product): ?>
                    <tr>
                      <td><img src="assets/upload/products/<?php echo $product['photo']; ?>" class="img-responsive" /></td>
                      <td><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
                      <td> <?php echo number_format($product['price']); ?>₫ </td>
                      <td><input type="number" id="quantity" min="1" class="input-control" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"></td>
                      <td><p><b><?php echo number_format($product['number']*$product['price']); ?>₫</b></p></td>
                      <td><a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <?php if($this->cartNumber() > 0): ?>
                  <tfoot>
                    <tr>
                      <td colspan="6"><a href="index.php?controller=cart&action=destroy" class="button pull-left">Xóa toàn bộ</a> <a href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                        <input type="submit" class="button pull-right" style="margin: 0px 8px;height: 31px;" value="Cập nhật"></td>
                      </tr>
                    </tfoot>
                  <?php endif; ?>
                </table>
              </div>
            </form>
            <?php if($this->cartNumber() > 0): ?>
              <div class="total-cart pull-right" style="padding: 10px 0px;"> <h3>Tổng tiền thanh toán:
                <?php echo number_format($this->cartTotal()); ?>₫ <br></h3>
                <a href="index.php?controller=cart&action=checkout" class="button pull-right black">Thanh toán</a> </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
