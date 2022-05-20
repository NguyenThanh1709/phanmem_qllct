    <div class="wp_header--admin">
        <div class="header--admin">
            <div class="header_title header_title--admin">
                <!-- <a href="index.php">
                    <i class="header_icon--calender fa-solid fa-calendar-check"></i>
                </a> -->
                <h1 class="header_text header_text--admin">Quản trị hệ thống lịch công tác</h1>

            </div>
            <div class="header-navbar">
                <div class="authen">
                    <a href="">
                        <img src="./asset/img/avata.jpg" alt="" class="img-user">
                        <a href="" class="authen-item login-fullname"><?php echo $_SESSION['ten_nv'] ?></a>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <a href="?mod=pages&act=change_pw"><i class="icon-user--admin fa-regular fa-user"></i>Tài khoản của tôi</a>
                            </li>
                            <li class="header__navbar-user-item header__navbar-user-item--separate">
                                <a href="#modal_confirm-logout"><i class="icon-off fa-solid fa-power-off "></i>Đăng xuất</a>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>