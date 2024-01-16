<?php
include('config.php');
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email)
{
    //Load Composer's autoloader
    require 'PHPMailer\Exception.php';
    require 'PHPMailer\PHPMailer.php';
    require 'PHPMailer\SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'avantika0196@gmail.com';                     //SMTP username
        $mail->Password   = 'sgae ylli ocjc nrid';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('avantika0196@gmail.com', 'Aarti');
        $mail->addAddress($email);     //Add a recipient
    
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email verified';
        $mail->Body    = "Signup Successful 
            Click the link below to verify the email address <a  href='http://localhost/itwebsite/verify.php?email=$email'>Verify</a>";
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $is_verified = $_POST["is_verified"];

    $sql = "select * from signup where name = '$name'";
    $result = mysqli_query($conn, $sql);
    $count_name = mysqli_num_rows($result);

    $sql = "select * from signup where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_name == 0 & $count_email == 0) {
        if ($password) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO signup(name, email, password, is_verified) VALUES('$name', '$email', '$hash', 0)";
            $result = mysqli_query($conn, $sql) && sendMail($_POST['email']);
            if ($result) {
                header('Location:message.php');
            }
        } else {
            echo '<script> alert("Password do not match!!!");</script>';
        }
    } else {
        if ($count_name > 0) {
            echo '<script> alert("Username already exists!!!");</script>';
        }
        if ($count_email > 0) {
            echo '<script> alert("Email already exists!!!");</script>';
        }
    }
}


// if (isset($_POST['submit'])){
//     $user_exist_query = "select * from signup where name = '$name' and email = '$email'";
//     $result = mysqli_query($conn, $user_exist_query);

//     if($result){
//         if(mysqli_num_rows($result)>0){
//             $row = mysqli_fetch_array($result);
//             if()
//         }
//         else{

//         }
//     }
//     else{
//         echo '<script> alert("Cannot Run Query!!!");</script>';
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header-nav {
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: #f1f5f5;
            position: fixed;
            width: 100%;
            z-index: 999;
        }

        .header-nav .logo {
            margin-left: 30px;
        }

        .container {
            width: 100%;
            min-height: 100vh;
            position: relative;
            background-position: center;
            background-color: rgba(93, 92, 97, 0.5);
        }

        .form-box {
            width: 90%;
            max-width: 450px;
            position: absolute;
            top: 58%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 50px 60px 50px;
            text-align: center;
        }

        .form-box h1 {
            font-size: 30px;
            margin-bottom: 40px;
            color: #3c00a0;
            position: relative;
        }

        .form-box h1::after {
            content: '';
            width: 30px;
            height: 4px;
            border-radius: 3px;
            background: #3c00a0;
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translate(-50%);
        }

        .input-field {
            background: #eaeaea;
            margin: 15px 0;
            border-radius: 3px;
            display: flex;
            align-items: center;
            max-height: 65px;
            transition: max-height 0.5s;
            overflow: hidden;
        }

        input {
            width: 100%;
            background: transparent;
            border: 0;
            outline: 0;
            padding: 18px 15px;

        }

        .input-field i {
            margin-left: 15px;
            color: #999;
        }

        form p {
            text-align: left;
            font-size: 13px;
        }

        form p a {
            text-decoration: none;
            color: #3c00a0;
        }

        .btn-field {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .btn-field button {
            background: #3c00a0;
            color: #fff;
            height: 40px;
            border-radius: 15px;
            border: 0;
            outline: 0;
            cursor: pointer;
            transition: 1s;
            width: 100%;
        }

        .input-group {
            height: auto;
        }

        .btn-field button.disable {
            background: #eaeaea;
            color: #555;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header>
        <div class="header-nav">
            <div class="logo">
                <a href="index.php"><img src="image2\glogo.png" alt="logo"></a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form id="forms" action="" method="post">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="name" placeholder="Name">
                    </div>

                    <div class="input-field">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="input-field">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        <input type="password" name="password" placeholder="Password" maxlength="10">
                    </div>

                </div>
                <div class="btn-field">
                    <button type="submit" id="signupBtn" name="submit">Sign Up</button>
                </div>

            </form>
            <p style="margin-top:10px;">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>

</body>

</html>