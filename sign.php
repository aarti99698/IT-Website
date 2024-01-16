<?php
// include ('config.php');

// if(isset($_POST['signup'])){
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     mysqli_query($conn,"insert into signup(name, email, password) values('$name', '$email', '$password')");

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

        .container {
            width: 100%;
            min-height: 100vh;
            position: relative;
            background-position: center;
            background-color: cornflowerblue;
        }

        .form-box {
            width: 90%;
            max-width: 450px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 50px 60px 70px;
            text-align: center;
        }

        .form-box h1 {
            font-size: 30px;
            margin-bottom: 60px;
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
            width: 20%;
        }

        .input-group {
            height: 230px;
        }

        .btn-field button.disable {
            background: #eaeaea;
            color: #555;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form id="slform" action="" method="post">
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
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <!-- <p>Forgate Password <a href="#">Click Here</a></p> -->
                </div>
                <div class="btn-field">
                    <button type="submit" id="signupBtn" name="signup">Sign Up</button>
                    <?php
                    include('config.php');

                    if (isset($_POST['signup'])) {
                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];

                        $sql = "select * from signup where name = '$name'";
                        $result = mysqli_query($conn, $sql);
                        $count_name = mysqli_num_rows($result);

                        $sql = "select * from signup where email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $count_email = mysqli_num_rows($result);

                        if ($count_name == 0 & $count_email == 0) {
                            if ($password) {
                                $hash = password_hash($password, PASSWORD_DEFAULT);
                                $sql = "INSERT INTO signup(name, email, password) VALUES('$name', '$email', '$hash')";
                                $result = mysqli_query($conn, $sql);
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
                    ?>
                    <button type="submit" id="loginBtn" name="login" class="disable">Log In</button>
                    <?php
                    include('config.php');
                    if (isset($_POST['login'])) {
                        $email = $_POST["email"];
                        $password = $_POST["password"];

                        $sql = "select * from signup where email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $count = mysqli_num_rows($result);
                        if ($count == 1) {
                            // $row = mysqli_fetch_array($result);
                            if (password_verify("password", $row["password"])) {
                                header('Location:index.php');
                            } else {
                                echo '<script> alert("Incorrect password");</script>';
                            }
                        } else {
                            echo '<script> alert("Invalid email");</script>';
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>

    <script>
        let signupBtn = document.getElementById("signupBtn");
        let loginBtn = document.getElementById("loginBtn");
        let nameField = document.getElementById("nameField");
        let title = document.getElementById("title");

        loginBtn.onclick = function () {
            nameField.style.maxHeight = "0";
            title.innerHTML = "Log In";
            signupBtn.classList.add("disable");
            loginBtn.classList.remove("disable");
        }

        signupBtn.onclick = function () {
            nameField.style.maxHeight = "60px";
            title.innerHTML = "Sign Up";
            signupBtn.classList.remove("disable");
            loginBtn.classList.add("disable");
        }
    </script>
</body>

</html>