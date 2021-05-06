<?php 
  //load LayoutTrangTrong.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>

<div class="mains">
	<div class="navi">
    	<div class="container">
        	<ol>
            	<li><a href="index.html">Trang chủ</a></li>
                <li><a class="active">Login</a></li>
            </ol>
        </div>
    </div>
    <div class="clearfix">
    	<div class="container" >
        	<div class="cont-box clearfix">
            	<div class="contact row">
                	<div class="clearfix">
                		<h1 style="display:none;">Liên hệ</h1>
                        <figure><a href="index.html"><img alt="Đèn led năng lượng mặt trời" src="assets/upload/products/vioa-vita.png"></a></figure>
						<p class="uppercase">
							<strong>Công ty cổ phần Vĩnh Thái</strong>
						</p>
						<p><strong>Trụ sở:</strong> số 5 đường TS 13 KCN Tiên Sơn, Bắc Ninh. Điện thoại: 0904.015.168.</p>
						<p><strong>Văn phòng:</strong> 453 Ngọc Thuỵ Quận Long Biên - Hà Nội</p>
						<p>Chi nhánh TP HCM: Số 34, đường số 2, KDC Nam Hùng Vương, P. An Lạc, Q. Bình Tân, TP. Hồ Chí Minh</p>
						<p><strong>Website:</strong> vinhthai.com.vn - deye.vn</p>
                    </div>
                    <div class="like-button share-facebook contact-fb">
                        <div id="fb-root"></div>
                        <div class="fb-like" data-href="vinhthai.com.vn" data-layout="button_count" 
                        data-action="like" data-show-faces="false" data-share="true"></div>
                    </div>
                </div>

                <div class="contact row">
            		<div class="clearfix " >
                    <h1>Đăng ký tài khoản</h1>
                    <?php if(isset($_GET["notify"])&&$_GET["notify"]=="exists"): ?>
		            <p style="color:red;">Email đã tồn tại!</p>
		          	<?php else: ?>
		            <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
		          	<?php endif; ?>
                    <div class="clearfix">
                    	<fieldset>
                    		<legend style="text-align: center;">&nbsp;&nbsp;Đăng ký tài khoản&nbsp;&nbsp;</legend>
                    	<form class="form" action="index.php?controller=account&action=registerPost" method="post">
                    		<label>Họ và tên :</label><br>
                    		<input type="txt" name="name" placeholder="Name"><br>
                    		<label>Email :</label><br>
                    		<input type="email" name="email" placeholder="Email"><br>
                    		<label>Địa chỉ :</label><br>
                    		<input type="txt" name="address" placeholder="Address"><br>
                    		<label>Điện thoại :</label><br>
                    		<input type="number" name="phone" placeholder="Number"><br>
                    		<label>Password :</label><br>
                    		<input type="password" name="password" placeholder="Password"><br>
                    		<input id="btnSend" type="submit" name="" value="Đăng ký">
                        </form>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="contact row">
            		<div class="clearfix" >
                    	<fieldset>
                    		<legend style="text-align: center;">&nbsp;&nbsp;Đăng nhập tài khoản&nbsp;&nbsp;</legend>
                    	<form class="form" action="index.php?controller=account&action=login" method="post">
			                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
			                <a href="index.php?controller=account&action=login"><input id="btnSend" type="submit" name="btnSend" value="Đăng nhập"></a> </div>
                        </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>