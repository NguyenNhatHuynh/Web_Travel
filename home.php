<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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


    <!-- home section starts  -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>khám phá, du lịch</span>
                        <h3>đi du lịch khắp thế giới</h3>
                        <a href="package.php" class="btn">khám phá nhiều hơn</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>khám phá, du lịch</span>
                        <h3>khám phá những địa điểm mới</h3>
                        <a href="package.php" class="btn">khám phá nhiều hơn</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>khám phá, du lịch</span>
                        <h3>làm cho chuyến tham quan của bạn đáng giá</h3>
                        <a href="package.php" class="btn">khám phá nhiều hơn</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    <!-- home section ends -->


    <!-- Start Services -->
    <section class="services">
        <h1 class="heading-title">Dịch vụ của chúng tôi</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>cuộc phiêu lưu</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>hướng dẫn viên du lịch</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>cuộc phiêu lưu</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>leo núi</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>lửa trại</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>ngoài đường</h3>
            </div>
        </div>

    </section>
    <!-- End Services -->


    <!-- Start About -->
    <section class="home-about">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>Về Chúng Tôi</h3>
            <p>Chúng Tôi Là Công Ty XoanDev Travel , Nơi Đưa Đến Cho Bạn Những Giấy Phút Tuyệt Vời!</p>
            <a href="about.php" class="btn">đọc thêm</a>
        </div>

    </section>
    <!-- End About -->


    <!--  Start Packages -->
    <section class="home-packages">

        <h1 class="heading-title">GÓI DỊCH VỤ CỦA CHÚNG TÔI</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Chuyến Phiêu Lưu</h3>
                    <p>Các Bạn Cứ Việc Hạnh Phúc Hậu Cần Để Chúng Tôi Lo!</p>
                    <a href="book.php" class="btn">đặt bây giờ</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Chuyến Phiêu Lưu</h3>
                    <p>Các Bạn Cứ Việc Hạnh Phúc Hậu Cần Để Chúng Tôi Lo!</p>
                    <a href="book.php" class="btn">đặt bây giờ</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>

                <div class="content">
                    <h3>Chuyến Phiêu Lưu</h3>
                    <p>Các Bạn Cứ Việc Hạnh Phúc Hậu Cần Để Chúng Tôi Lo!</p>
                    <a href="book.php" class="btn">đặt bây giờ</a>
                </div>
            </div>
        </div>


        <div class="load-more"><a href="package.php" class="btn">tải thêm</a></div>
    </section>
    <!--  End Packages -->



    <!-- Start Offer Home-->
    <section class="home-offer">
        <div class="content">
            <h3>LÊN TỚI 70%</h3>
            <p>Các Bạn Cứ Việc Hạnh Phúc Hậu Cần Để Chúng Tôi Lo! Trên Tất Cả Các Gói Dịch Vũ Của Chúng Tôi</p>
            <a href="book.php" class="btn">đặt bây giờ</a>
        </div>
    </section>
    <!-- End Offer Home -->


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