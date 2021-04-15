    <div class="footer">
        <footer class="text-center text-dark">
            <!-- Grid container -->
            <div class="container p-4">
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-facebook-f"></i
                    ></a>
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-twitter"></i
                    ></a>
                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-google"></i
                    ></a>
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-instagram"></i
                    ></a>
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-linkedin-in"></i
                    ></a>
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-github"></i
                    ></a>
                </section>
                <section class="">
                    <form action="">
                        <div class="row d-flex justify-content-center">
                            <div class="col-auto">
                                <p class="pt-2">
                                    <strong>Hãy gia nhập ngay hôm nay</strong>
                                </p>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="form5Example2" class="form-control"
                                           placeholder="Email address"/>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-light mb-4">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </section>
                <section class="mb-4">
                    <strong>
                        Trung tâm ngoại ngữ ABC
                    </strong>
                </section>
                <section class="">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Về chúng tôi</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-dark">Tổng đài hỗ trợ</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Ưu đãi khóa học</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Đội ngũ giảng dạy</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Lịch khai giảng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Tin tức sự kiện</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-dark">Cơ hội nghề nghiệp</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Chính sách liên kết</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Thông tin trung tâm</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Khóa học</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-dark">Khóa học phù hợp</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Tiếng anh trẻ em</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Tiếng anh học sinh</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-dark">Tiếng anh người lớn</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Hotline</h5>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <p class="text-dark">Hà Nội: 0388123456</p>
                                </li>
                                <li>
                                    <p class="text-dark">Đà Nẵng: 0234456789</p>
                                </li>
                                <li>
                                    <p class="text-dark">TP.HCM: 0399234567</p>
                                </li>
                                <li>
                                    <img src="https://vus.edu.vn/Assets/images/dathongbao.png" style="width: 120px">
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Khóa học trực tuyến:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

<script>
    $(document).ready(function(){
	$('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
	$('.dropdown-submenu > a').on("click", function(e) {
	var dropdown = $(this).parent().find(' > .show');
		$('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
		$(this).next('.dropdown-menu').toggleClass('show');
		e.stopPropagation();
	});
	$('.dropdown').on("hidden.bs.dropdown", function() {
		$('.dropdown-menu.show').removeClass('show');
	});
});
</script>
</body>

</html>