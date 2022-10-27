<?php
    session_start();
    require '../connect.php';
    $err = "";
    $urlImages = insert_image();
    if(isset($_POST["submit"])){
        $id =  $_POST["id"];
        $user =  $_POST["username"];
        $email =  $_POST["email"];
        $phone =  $_POST["phone"];
        $name =  $_POST["name"];
        $avata =  $urlImages;
        $query = "";
        if(strlen($urlImages) > 10){
            $_SESSION['avata'] =  $avata;
            $query = "UPDATE `user` SET `name`=N'".$name."',`username`='".$user."',`phone`='".$phone."',`avata`='".$avata."',`email`='".$email."' WHERE `id`=".$id.";";
        }else{
            $query = "UPDATE `user` SET `name`=N'".$name."',`username`='".$user."',`phone`='".$phone."',`email`='".$email."' WHERE `id`=".$id.";";
        }
        $result = mysqli_query($connect,$query);
        if($result){
            echo "ok";
            $_SESSION['username'] = $user;
            $_SESSION['name']  = $name;
            $_SESSION['email']  = $email;
            $_SESSION['phone']  = $phone;
            header("Location: ../home.php");
        }
        else{
            echo "notok";
            header("Location: ../home.php");
        }
    }
    function insert_image()
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["Avata"]["name"]);
        if(strlen(basename($_FILES["Avata"]["name"])) < 4){
            return '';
        }
        $uploadOk = 1;basename($_FILES["Avata"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["Avata"]["tmp_name"]);
          if($check !== false) {
            $uploadOk = 1;
            if (move_uploaded_file($_FILES["Avata"]["tmp_name"], $target_file)) {
                return $target_file;
            } else {
                return 'false';
            }
          } else {
            return 'false';
            $uploadOk = 0;
          }
        }
    }
?>