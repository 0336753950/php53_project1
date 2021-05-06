<?php 
  //load LayoutTrangTrong.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<div class="mains">
	<div class="navi">
    	<div class="container">
        	<ol>
            	<li><a href="index.html">Trang chủ</a></li>
                <li><a href="index.php?controller=contact">Liên hệ</a></li>
            </ol>
        </div>
    </div>
    <div class="clearfix">
    	<div class="container">
        	<div class="cont-box clearfix">
            	<div class="contact">
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
	<div class="cont-right">
        <div class="maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7443.325985054796!2d105.99117302230896!3d21.12599790156353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313509a55f319701%3A0x129b84508c0366aa!2zQ8O0bmcgdHkgQ-G7lSBwaOG6p24gVsSpbmggVGjDoWk!5e0!3m2!1svi!2s!4v1569987407367!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="cont-form">
        	<form onsubmit="return chkFrmContact(this);" action="#" method="post">
        	<div class="cont-row clearfix">
            	<div class="cont-50"><input type="text" name="txtname" placeholder="Họ tên"></div>
                <div class="cont-50"><input placeholder="Địa chỉ"></div>
            </div>
            <div class="cont-row clearfix">
            	<div class="cont-50"><input type="tel" name="txttel" placeholder="Điện thoại"></div>
                <div class="cont-50"><input type="email" name="txtemail" placeholder="E-mail"></div>
            </div>
            <div class="cont-row clearfix">
            	<div class="single"><textarea name="txtcontent" placeholder="Nội dung"></textarea></div>
            </div>
            <div class="clearfix"><input id="btnSend" type="submit" name="btnSend" value="Gửi thông tin"></div>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>