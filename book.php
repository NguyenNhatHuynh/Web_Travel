<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->
    <section class="header">

        <a href="home.php" class="logo">XoanDev travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->

    <div class="heading" style="background: url(images/header-bg-3.png)">
        <h1>đặt bây giờ</h1>
    </div>


    <!-- Start Book -->
    <section class="booking">

        <h1 class="heading-title">đặt tour của bản</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>tên: </span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email: </span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>số điện thoại: </span>
                    <input type="text" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>địa chỉ: </span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>đi đâu: </span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>bao nhiêu: </span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>ngày đến: </span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>ngày rời đi: </span>
                    <input type="date" name="leaving">
                </div>

            </div>

            <input type="submit" value="submit" class="btn" name="send">
        </form>

    </section>
    <!-- End Book -->


    <!-- Start Footer -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Đường Dẫn</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>Liên Kết Phụ</h3>
                <a href="#"><i class="fas fa-angle-right"></i>đặt câu hỏi</a>
                <a href="#"><i class="fas fa-angle-right"></i>về chúng tôi</a>
                <a href="#"><i class="fas fa-angle-right"></i>chính sách bảo mật</a>
                <a href="#"><i class="fas fa-angle-right"></i>điều khoản sử dụng</a>
            </div>

            <div class="box">
                <h3>Thông Tin Liên Lạc</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-235-3242</a>
                <a href="#"><i class="fas fa-phone"></i>+99-324-234</a>
                <a href="#"><i class="fas fa-envelope"></i>xoandev@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>HCM, VIETNAM</a>
            </div>

            <div class="box">
                <h3>Theo dõi chúng tôi</h3>
                <a href="#"><i class="fab fa-facebook"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>

        </div>

        <div class="credit"> created by <span>XoanDev</span></div>
    </section>
    <!-- End Footer -->



    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>