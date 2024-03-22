<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style_prd.css">
  </head>

  <body>
      <div class="main">
          <nav>
              <div class="logo">
                  <img src="images/logo.png"><h2>Công Ty TNHH TMDV Kỹ Thuật Bằng Hữu</h2>
              </div>
              <div class="nav-links">
                <ul>
                  <li><a href="home.php" id="homeBtn">Home</a></li>
                  <li><a href="product.php" id="productBtn">Product</a></li>
                  <li><a href="infomation.php" id="infoBtn">Infomaiton</a></li>
                  <li><a href="profile.php" id="loginBtn"><?php echo $_SESSION['user_name']; ?></a></li>
                </ul>
              </div>
          </nav>

          <div class="container">
            <div class="item" onclick="showDetail('images/pd1.png', 'Palo Alto Networks Enterprise Firewall PA-7050', 'PA-7050 bảo vệ trung tâm dữ liệu và mạng tốc độ cao với thông lượng tường lửa lên tới 120 Gbps và ngăn chặn toàn diện mối đe dọa ở tốc độ lên tới 100 Gbps. Để giải quyết tính chất tính toán chuyên sâu của phân loại và phân tích toàn bộ ở tốc độ 120 Gbps, hơn 400 bộ xử lý được phân phối trên các chức năng kết nối mạng, bảo mật, quản lý chuyển mạch và ghi nhật ký. Kết quả là PA-7050 cho phép bạn triển khai bảo mật thế hệ tiếp theo trong trung tâm dữ liệu của mình mà không ảnh hưởng đến hiệu suất.<br><br>Thông lượng tường lửa 120 Gbps (đã bật ID ứng dụng)<br>Thông lượng ngăn chặn mối đe dọa 60 Gbps<br>Thông lượng IPSec VPN 24 Gbps<br>Tối đa 24.000.000 phiên<br>720.000 phiên mới mỗi giây<br>120.000 đường hầm/giao diện đường hầm IPSec VPN<br>20.000 người dùng SSL VPN<br>225 bộ định tuyến ảo<br>25/225 hệ thống ảo (cơ sở/tối đa)<br>900 khu an ninh<br>Số lượng chính sách tối đa 40.000')"> <!-- Thêm tham số cho hàm showDetail -->
              <img src="images/pd1.png" alt="Sản phẩm 1">
              <h2>Palo Alto Networks Enterprise Firewall PA-7050</h2>
              <h2 style="color: red;">12.500.000đ</h2>
            </div>
            <div class="item" onclick="showDetail('images/pd2.png', 'Fortinet | FG-60E-BDL-950-12', 'Fortinet kết hợp CPU dựa trên RISC với bộ xử lý mạng và nội dung FortiASIC™ độc quyền để đạt được hiệu suất vượt trội. Điều này đơn giản hóa thiết kế thiết bị và mang lại hiệu suất đột phá cho các mạng nhỏ hơn. Fortinet cung cấp hỗ trợ tăng tốc tường lửa trên tất cả các kích thước gói để có thông lượng tối đa. Ngoài ra, Fortinet cung cấp khả năng xử lý nội dung UTM được tăng tốc để có hiệu suất và khả năng bảo vệ vượt trội. Fortinet cũng tăng tốc hiệu suất VPN để truy cập từ xa an toàn, tốc độ cao.')"> <!-- Thêm tham số cho hàm showDetail -->
              <img src="images/pd2.png" alt="Sản phẩm 2">
              <h2>Fortinet | FG-60E-BDL-950-12</h2>
              <h2 style="color: red;">10.000.000đ</h2>
            </div>
            <div class="item" onclick="showDetail('images/pd3.png', 'CISCO ASA5520-CSC20-K9', 'ASA 5520 Security Appliance with SW, HA, 4GE+1FE, 3DES/AES, Cisco ASA 5500 Series Firewall Edition Bundles. Users/Nodes. Unlimited. Firewall Throughput. Up to 450 Mbps. Maximum Firewall and IPS Throughput. Up to 225 Mbps with AIP-SSM-10. Up to 375 Mbps with AIP-SSM-20. Up to 450 Mbps with AIP-SSM-40')"> <!-- Thêm tham số cho hàm showDetail -->
              <img src="images/pd3.png" alt="Sản phẩm 3">
              <h2>CISCO ASA5520-CSC20-K9</h2>
              <h2 style="color: red;">22.000.000đ</h2>
            </div>
          </div>
      </div>
      <div id="detail" class="detail"></div>
      <script>
        function showDetail(imageSrc, productName, productDetail) {
          var detail = document.getElementById('detail');
          // Thay đổi nội dung chi tiết sản phẩm
          detail.innerHTML = '<img src="' + imageSrc + '" alt="Chi tiết sản phẩm"><h3>' + productName + '</h3><p>' + productDetail + '</p>';
          detail.classList.add('active');

          // Gán sự kiện cho phím Esc
          document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
              hideDetail();
            }
          });
        }
        function hideDetail() {
          var detail = document.getElementById('detail');
          detail.innerHTML = ''; // Xóa nội dung chi tiết sản phẩm
          detail.classList.remove('active'); // Ẩn chi tiết sản phẩm
        }
      </script>
    </body>
  </html>
<?php
}
else {
    header("Location: index.php");
}
