<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f5f5f5, #eaeaea);
            margin: 0;
            padding: 0;
            height: 100vh; /* Chiều cao bằng 100% viewport */
            display: flex;
            flex-direction: column; /* Sắp xếp theo chiều dọc */
            align-items: center; /* Căn giữa theo chiều ngang */
            justify-content: center; /* Căn phần tử ở giữa trang */
        }

        /* Box-menu */
        .box-menu {
            background-color: rgb(240, 118, 179);
            padding: 10px 0;
            box-shadow: 0 4px 10px pink; /* Thêm bóng để tạo độ sâu */
            width: 100%; /* Để menu chiếm toàn bộ chiều rộng */
            position: fixed; /* Để menu nằm cố định trên đầu trang */
            top: 0;
            left: 0; /* Đảm bảo menu nằm ở vị trí trái */
            z-index: 1000; /* Đảm bảo menu nằm trên các phần tử khác */
        }

        .box-menu ul {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .box-menu ul li {
            margin: 0 15px;
            padding: 15px;
            position: relative;
        }

        .box-menu ul li a {
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            transition: color 0.3s;
        }

        .box-menu ul li:hover a {
            color: #CC0000; /* Màu nhạt hơn cho contrast */
        }

        .box-submenu {
            display: none;
        }

        .box-menu ul li:hover .box-submenu {
            display: block;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            padding: 10px 0;
            border-radius: 5px;
            z-index: 10;
        }

        .box-submenu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .box-submenu ul li {
            padding: 10px 20px;
            border-bottom: 1px solid #ccc; /* Sử dụng màu xám cho viền */
        }

        .box-submenu ul li:last-child {
            border-bottom: none;
        }

        .box-submenu ul li a {
            color: #FF6666; /* Đổi thành màu đậm hơn */
            text-decoration: none;
            transition: color 0.3s;
        }

        .box-submenu ul li:hover a {
            color: #333; /* Màu đậm hơn khi hover */
        }

        .cart {
            float: right;
            color: white;
            padding: 14px 20px;
            background-color: rgb(240, 118, 179);
            padding: 10px 0;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .kieu1 {
            padding: 20px;
            text-align: center;
            color: salmon;
            font-weight: bold;
            margin-top: 10px; /* Thêm khoảng cách trên */
        }

        .login-container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 80px; /* Khoảng cách với menu */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #218838;
        }

        .logo {
            width: 80px;
            display: flex;
            justify-content: flex-start;
            letter-spacing: 5px;
            border-radius: 50%;
        }
        h2 {
            text-align: center;
            color: #333;
        }

        label {
            margin-top: 10px;
            display: block;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse; /* Gộp các viền lại với nhau */
            width: 300px; /* Chiều rộng của bảng */
            
        }

        th, td {
            padding: 10px; /* Khoảng cách bên trong */
            border: 1px solid #ddd; /* Viền cho ô */
            text-align: left; /* Căn trái cho nội dung */
        }

        th {
            background-color: #f2f2f2; /* Màu nền cho tiêu đề */
        }
        .mau{
            color:green;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="box-menu">
            <ul>
                <img src="logo.jpg" alt="Logo Thời Trang" class="logo">
                <li><a href="home.html">Trang Chủ</a>
                    
                </li>
                <li><a href="hotspp.html">Hot sp</a>
                <div class="box-submenu">   
                  <ul>
                      <li><a href="gioithieu.html">Son</a></li>
                      <li><a href="">Makeup</a></li>
                      <li><a href="gioithieu.html">Kcn</a></li>
                      <li><a href=""> Dưỡng tóc</a></li>

                  </ul>
              </div></li>
                <li><a href="newsp.html">New sp</a>
                <div class="box-submenu">   
                  <ul>
                      <li><a href="gioithieu.html">Son</a></li>
                      <li><a href="">Makeup</a></li>
                      <li><a href="gioithieu.html">Kcn</a></li>
                      <li><a href=""> Dưỡng tóc</a></li>

                  </ul>
              </div></li>
                <li><a href="sale.html">Sale</a></li>
                <li><a href="gioithieu.html">Giới thiệu</a></li>
              <li><a href="huongdan.html">Hướng dẫn đặt hàng</a></li>
                <li><a href="dangnhap.php">Đăng nhập</a></li>
                <li>
        <a href="" class="cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
            </svg>
        </a>
    </li>
            </ul>
        </div>
    </header>

    
    

    <div class="login-container">
        <h1 class="mau">Đăng Nhập</h1>
        <form method="POST">
            <div class="form-group">
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Gửi</button>
            </div>
        </form>
        <p class="register-link">Chưa có tài khoản? <a href="register.html">Đăng ký ngay!</a></p> <!-- Thêm liên kết đăng ký -->
    </div>

    <?php
    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli('localhost', 'root', '', 'mypham');

    if ($conn->connect_error) {
        die('Kết nối thất bại: ' . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Lấy thông tin người dùng từ cơ sở dữ liệu
        $sql = "SELECT * FROM dangnhap WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Đăng nhập thành công
            echo "<script>alert('Đăng nhập thành công!');</script>";
            // Điều hướng đến trang chính
            echo "<script>window.location.href='home.html';</script>";
        } else {
            // Đăng nhập thất bại
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!');</script>";
        }
    }
    $conn->close();
    ?>
</body>
</html>