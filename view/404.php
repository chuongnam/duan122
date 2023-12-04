<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
  <section class="page_404">
    <div class="container">
      <div class="row"> 
        <div class="col-sm-12 ">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <div class="four_zero_four_bg">
              <h1 class="text-center">404</h1>
            </div>
            <div class="contant_box_404">
              <h3 class="h2">Không thể truy cập</h3>
              <p>Không đủ quyền để truy cập</p>
              
              <!-- Thêm div hiển thị thời gian đếm ngược -->
              <div id="countdown"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Thời gian đếm ngược
    var countdown = 6; // 5 seconds
    var countdownDiv = document.getElementById('countdown');

    function updateCountdown() {
      countdown--;
      countdownDiv.innerHTML = 'Chuyển hướng sau ' + countdown + ' giây';

      if (countdown <= 0) {
        window.location.href = 'index.php';
      } else {
        setTimeout(updateCountdown, 1000); // Cập nhật mỗi giây
      }
    }

    // Bắt đầu thời gian đếm ngược khi trang được tải
    setTimeout(updateCountdown, 1000);
  </script>
  <style>
    
  </style>
</body>
</html>
