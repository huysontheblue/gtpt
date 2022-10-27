<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold  fs-1 h-font" href="home.php">Phòng trọ</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="">Chung cư cho thuê</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="">Trọ khép kín</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="">Trọ thường</a>
                </li>
            </ul>
            <div class="dropdown text-end d-flex align-items-center" style="padding-right: 100px;">
                <a href="#" class="d-block link-dark text-decoration-none text-align-center" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $_SESSION["avata"]; ?>"  width="32" height="32" class="rounded-circle">
                </a>
                <a class="link-dark text-decoration-none mx-1" href="">
                    <?php echo $_SESSION["name"]; ?>
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li>
                        <a class="dropdown-item" href="./function/logout.php">Log Out</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="./layouts/editmember.php">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
