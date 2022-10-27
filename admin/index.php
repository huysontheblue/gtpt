<?php 
    require('../connect.php');
    session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true))
    {
        redirect('index.php');
        /* redirect('dashboard.php'); */
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS Bootrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link GG Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Link Icon Bootrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Link Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- Link Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Link Bootrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Link Style CSS -->
    <link rel="stylesheet" href="style/common.css">
    <title>Admin Login</title>
</head>
<body class="bg-light">
    <div class="login-form rounded-4 bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="text-center bg-dark text-white py-3">ADMIN LOGIN</h4>
            <div class="p-4 px-4">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input name="admin_name" required type="text" class="form-control shadow-none" placeholder="User">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-file-lock"></i>
                    </span>
                    <input name="admin_pass" required type="password" class="form-control shadow-none" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php 
        if(isset($_POST['login']))
        {
            $lg_data = loginadmin($_POST);
            $query = "SELECT * FROM `admin` WHERE `admin_name` = ? AND `admin_pass` = ?";
            $values = [$lg_data['admin_name'],$lg_data['admin_pass']];
            $res = select($query,$values,"ss");
            if($res->num_rows==1) {
               $row = mysqli_fetch_assoc($res);
               $_SESSION['adminLogin'] = true;
               $_SESSION['adminId'] = $row['admin_id'];
               redirect('dashboard.php');
               alert('success','Login success');
            }
            else {
                alert('error','Login Failed');
            }
        }
    ?>
</body>
</html>