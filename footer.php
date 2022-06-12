<div class="footer" style="background-color: rgb(248, 244, 248);margin-top: 40px">
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<a href="index.html"><img src="public/images/logo.png" alt=" " /></a>
				</div>
				<div class="footer-bottom-cate">
					<h6>Liên hệ</h6>
					<ul>
						<li><p>Trường: Cao đẳng thực hành FPT</p></li>
						<li><p>Sinh viên: Lê Ngọc Kiên Trung</p></li>

					</ul>
				</div>
				<div class="footer-bottom-cate">
                    <h6>Danh mục</h6>
                    <ul>
                    <?php foreach (selectDb("SELECT * FROM category") as $row) { ?>
                        <li><p><a href="product.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></p></li>
                        <?php

                    } ?>
                    </ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>Địa chỉ</h6>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814628!2d105.7445984154191!3d21.038132792832968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1654941143793!5m2!1svi!2s" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
					
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(function () {
				var menu_ul = $('.menu > li > ul'),
					menu_a = $('.menu > li > a');
				menu_ul.hide();
				menu_a.click(function (e) {
					e.preventDefault();
					if (!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true, true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true, true).slideUp('normal');
					}
				});

			});
		</script>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
		 </script>
		<script src="public/js/jquery.wmuSlider.js"></script>
		<script>
			$('.example1').wmuSlider();         
		</script>
</body>

</html>
