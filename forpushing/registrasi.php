<?php
/*
    Najib Rifai
    24060120140082 / B1
*/

require('method_add.php');
if(isset($_POST["register"])){
	registration($_POST);

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Registrasi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<br>
    <div class="container">
        <div class="card">
            <div class="card-header">Registrasi Form</div>
            <div class="card-body">
                <form method="POST" autocomplete="on" action="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="em" size="30" required>
                      
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="pass" size="30" value="" required>
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>