<?php include('header.php') ?>


	<div class="section" id="firstPage">
		<a href="#" class="slick-arrow arrow-left"></a>
		<a href="#" class="slick-arrow arrow-right"></a>
		<div class="homepage slider">
			<div class="slider-1 first-slider">
				<div class="talent">
					<img src="images/talent.png" alt="" class="talent">
				</div>
				<div class="conent">
					<h2 class="title">Phong cách <br> Xứng tầm</h3>
					<div class="product">
						<div class="item" sign-class=".intense-sign">
							<a href="#" class="images">
			  					<img src="images/cate-detail/xit-toan-than/intense.png" alt="" class="thumbnail">
			  					<img src="images/cate-detail/xit-toan-than/intense-hover.png" alt="" class="thumbnail-hover">
			  				</a>
						</div>
						<div class="item active" sign-class=".motion-sign">
							<a href="#" class="images">
			  					<img src="images/cate-detail/xit-toan-than/motion.png" alt="" class="thumbnail">
			  					<img src="images/cate-detail/xit-toan-than/motion-hover.png" alt="" class="thumbnail-hover">
			  				</a>
						</div>
						<div class="item"  sign-class=".luxury-sign">
							<a href="#" class="images">
			  					<img src="images/cate-detail/xit-toan-than/luxury.png" alt="" class="thumbnail">
			  					<img src="images/cate-detail/xit-toan-than/luxury-hover.png" alt="" class="thumbnail-hover">
			  				</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="sign intense-sign">
						<h4>X-MEN FOR BOSS INTENSE</h4>
			  			<p>"Kết hợp gỗ Đàn Hương và Hổ Phách là cách tôi tạo nên nốt hương trầm đầy nội lực của Intense - Mùi hương là sự đại diện cho một phong thái chắc chắn, một dấu ấn đậm nét của người đàn ông thành công, luôn quyết đoán và kiên định với mục tiêu của mình."</p>
			  			<div class="image">
			  				<img src="images/intense/sign.png" alt="">
			  			</div>
					</div>
					<div class="sign motion-sign active">
						<h4>X-MEN FOR BOSS MOTION</h4>
			  			<p>"Tôi tạo ra Motion như một loại cocktail phá cách, kết hợp nốt hương trầm đầy nội lực từ gỗ Đàn Hương cùng sự xanh mát của Citrus để phác họa một người đàn ông thành công, chủ động - luôn biết cách tự tạo ra cơ hội cho chính mình."</p>
			  			<div class="image">
			  				<img src="images/motion/sign.png" alt="">
			  			</div>
					</div>
					<div class="sign luxury-sign">
						<h4>X-MEN FOR BOSS LUXURY</h4>
			  			<p>"Sự tươi mát lấy cảm hứng từ Bergamot miền Nam nước Ý kết hợp cùng nốt hương trầm đầy sang trọng từ Đàn Hương - Tôi tạo ra hương nước hoa Luxury như một biểu tượng của sự tinh tế, dành riêng cho người đàn ông sang trọng, đẳng cấp, luôn biết tận hưởng hương vị của thành công!"</p>
			  			<div class="image">
			  				<img src="images/luxury/sign.png" alt="">
			  			</div>
					</div>
				</div>
			</div>
			<div class="slider-2 section-slider">
				<div class="space"></div>
				<div class="product">
					<img src="images/slider-product-2.png" alt="">
				</div>
				<div class="content">
					<h2 class="title">X-MEN FOR BOSS</h3>
					<p class="text">“Thương hiệu chăm sóc cá nhân cao cấp dành riêng cho nam giới, với hương nước hoa được tạo bởi những nhà điều hương đẳng cấp thế giới, giúp khẳng định phong cách lịch lãm, sang trọng, đầy lôi cuốn của người đàn ông thành đạt.”</p>
					<div class="buy clear">
						<a href="#" class="button hvr-pulse-grow">Tìm hiểu thêm</a> &nbsp; &nbsp;
						<a href="#" class="button hvr-pulse-grow">Mua ngay</a>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(function(){
				$('.slider').slick({
		            dots: true,
		            slidesToShow: 1,
		            slidesToScroll: 1,
		            autoplay: true,
		            autoplaySpeed: 5000,
		            speed: 200,
		            adaptiveHeight: true,
		            prevArrow: '.arrow-left',
	            	nextArrow: '.arrow-right',
		        });
		        $('.slider').on('afterChange', function(event, slick, currentSlide){
					$(this).find('.slider-product').eq()
				});
			});
		</script>

	</div>
<?php include('footer.php') ?>
<script>
		$(document).ready(function() {
			$('.homepage .slider-1 .product .item').hover(function() {
				/* Stuff to do when the mouse enters the element */
				$('.homepage .slider-1 .product .item').each(function(index, el) {
					$(this).removeClass('active');
				});
				$(this).addClass('active');
				$('.homepage .slider-1 .sign').each(function(index, el) {
					if ($(this).hasClass('active')) {
						$(this).removeClass('active');
					}
				});
				var clss = $(this).attr('sign-class');
				$(clss).addClass('active');
			}, function() {
				/* Stuff to do when the mouse leaves the element */
				// $('.homepage  .slider-1 .product .item').each(function(index, el) {
				// 	if($(this).hasClass('active')) {
				// 		$(this).removeClass('active')
				// 		var clss = $(this).attr('sign-class');
				// 		$(clss).addClass('active')
				// 	}
				// });
			});
		});
</script>
</body>
</html>
