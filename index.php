<?php
    session_start();
    require 'connect.php';
    $err="";
    if(isset($_SESSION["name"])){
        header("Location: home.php");
    }
    else
    {
        if(isset($_POST["submit"])){
            $user =  $_POST["username"];
            $pass =  $_POST["password"];
            if((strlen($user) < 4) || strlen($pass) < 4){
                $err="Vui lòng nhập tên người dùng !";
            }
            else{
                $sqls = "SELECT * FROM `user` WHERE `username`='".$user."' AND `password`='".md5($pass)."';";
                $result = mysqli_query($connect,$sqls);
                $rows = mysqli_num_rows($result);
                $value = mysqli_fetch_assoc($result);
                if($rows == 1){ 
                    $_SESSION['username'] = $user;
                    $_SESSION['id']  = $value["id"];
                    $_SESSION['name']  = $value["name"];
                    $_SESSION['email']  = $value["email"];
                    $_SESSION['phone']  = $value["phone"];
                    $_SESSION['avata']  = $value["avata"];
                    header("Location: home.php");
                }else{
                    $err =  "Tên đăng nhập hoặc mật khẩu không đúng!";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Đăng nhập phòng trọ</title>
</head>
<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://xaydungthuanphuoc.com/wp-content/uploads/2022/09/mau-phong-tro-co-gac-lung-dep2028-5.jpg" alt="login form" class="img-fluid h-100 w-100" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="index.php" method="POST">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Phòng trọ</span>
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Đăng nhập tài khoản</h5>
                                        <div class="form-outline mb-4">
                                            <input class="form-control form-control-lg" type="text" name="username" placeholder="Tên đăng nhập" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" class="form-control form-control-lg" name="password" placeholder="Mật khẩu" />
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit" value="Đăng nhập">Đăng nhập</button>
                                        </div>
                                        <a class="small text-muted" href="register.php">Đăng ký tài khoản</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>