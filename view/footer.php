<hr>
<section class="app-container">

    <p>NHẬN THÔNG TIN POLYBIKE</p>
    <input type="text" placeholder="nhập email của bạn...">
</section>

<div class="footer-top">
    <li><a href=""><img src="image/anh9.jpg"></a></li>
    <li><a href="">LIÊN HỆ</a></li>
    <li><a href="">TUYỂN DỤNG</a></li>
    <li><a href="">GIỚI THIỆU</a></li>

</div>
<div class="footer-conter">
    <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650<br>

        Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam<br>

        Số điện thoại: <b>0243 205 2222/ 090 589 8683</b>
    </p>
</div>
<div class="footer-bottom">
    ©POLYBIKE All rights reserved
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.querySelector(".aspect-ratio-169");
        let count = 0;

        function nextSlide() {
            count++;
            if (count > 4) { // Số 4 là tổng số hình ảnh - 1
                count = 0;
            }
            updateSlide();
        }

        function updateSlide() {
            const translateValue = -count * 100;
            slider.style.transform = `translateX(${translateValue}%)`;
        }

        setInterval(nextSlide, 1500);
    });
</script>

<script>
    $(document).ready(function() {
        $('#changepasswordform').validate({
            rules: {
                old_password: {
                    required: true
                },
                new_password: {
                    required: true
                },
                confirm_password: {
                    required: true,
                    equalTo: "#new_password"
                }
            },
            messages: {
                old_password: {
                    required: "Vui lòng nhập mật khẩu cũ."
                },
                new_password: {
                    required: "Vui lòng nhập mật khẩu mới."
                },
                confirm_password: {
                    required: "Vui lòng xác nhận mật khẩu mới.",
                    equalTo: "Mật khẩu xác nhận không khớp."
                }
            },
            errorClass: "error"
        });
    });
</script>

</html>