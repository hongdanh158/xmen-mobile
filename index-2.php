<?php include('header.php') ?>
	<div class="section" id="firstPage">
		<div class="homepage slider">
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
	</div>
<?php include('footer.php') ?>
<script>
		$(document).ready(function() {
			// $('#fullpage').fullpage({
			// 	menu: '#menu',
			// 	scrollingSpeed: 1000,
			// 	css3: true,
			// });
			$('.homepage .slider-1 .products .item').hover(function() {
				/* Stuff to do when the mouse enters the element */
				$('.homepage .slider-1 .products .item').each(function(index, el) {
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
				$('.homepage  .slider-1 .products .item').each(function(index, el) {
					if($(this).hasClass('active')) {
						$(this).removeClass('active')
						var clss = $(this).attr('sign-class');
						$(clss).removeClass('active')
					}
				});
			});
		});
</script>
</body>
</html>
