<?php
/*
Najib Rifai
24060120140082 / B1
*/

//File      : login.php
//Deskripsi : menampilkan form login dan melakukan login ke halaman admin.php

session_start(); //inisialisasi session
require_once('db_login.php');

//cek apakah user sudah submit form
if (isset($_POST["submit"])){
    $valid = TRUE; //flag validasi
    //Ambil masukan email

    $Email = $_POST['email'];
    $Pass = $_POST['password'];

    //cek validasi email
    $email = test_input($_POST['email']);
    if ($email == ''){
        $error_email = "Email is required";
        $valid = FALSE;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_email = "Invalid email format";
        $valid = FALSE;
    }

    //cek validasi password
    $password = test_input($_POST['password']);
    if ($password == ''){
        $error_password = "Password is required";
        $valid = FALSE;
    }

    //cek validasi
    if ($valid){
        //asign a query
        $query = " SELECT password FROM admin WHERE email='$Email'";
        $result = mysqli_query($db, $query);

        if($result){
            $row = mysqli_fetch_assoc($result);

            if(password_verify($Pass, $row["password"])){
                $_SESSION['username'] = $Email;
                header('Location: view_customer.php');
                exit;   
            }
            else{ //login gagal
                echo '<span class="alert alert-danger" role="alert">Combination of username and password are not correct.</span>';
            }
        }
        $db->close();
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">Login Form</div>
            <div class="card-body">
                <form method="POST" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" size="30" value="<?php if(isset($email)) echo $email;?>">
                        <div class="text-danger"><?php if(isset($error_email)) echo $error_email;?></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" size="30" value="">
                        <div class="text-danger"><?php if(isset($error_password)) echo $error_password;?></div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>