<?php
    /*
    Najib Rifai
    24060120140082 / B1
    */


    require('method_add.php');
    if(isset($_POST["submit"])){
        tambah($_POST);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add customer</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<div class="container">
    <div class="card">
        <div class="card-header">Add Customer</div>
        <div class="card-body">
            <form method="POST" autocomplete="on" action="">
            	<div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name"
                required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <select name="city" id="city" class="form-control" required>
	          		<option value="Airport West">Airport West</option>
					<option value="Box Hill">Box Hill</option>
					<option value="Yarraville">Yarraville</option>
				</select>
			</div><br>
            <a class="btn btn-danger" href="view_customer.php">Back</a>
			<button type="submit" class="btn btn-primary" name="submit">Add</button>
        </form>
        <br>
        </div>
    	</div>
	</div>
</body>
</html>