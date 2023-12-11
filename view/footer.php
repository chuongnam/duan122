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
 let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); 
}
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
<script>
    function confirmCancelOrder(orderId) {
        var confirmation = confirm("Bạn có chắc muốn hủy đơn hàng này?");
        if (confirmation) {
            window.location.href = 'index.php?act=huydonhang&id_donhang=' + orderId;
        }
    }
</script>

</html>