<?php
	/*
	Najib Rifai
	24060120140082 / B1

	File: method_add
	Deskripsi: untuk menampung beberapa fungsi yang digunakan pada proses CRUD (Create Read Update Delete)
	*/

	require('db_login.php');

	// fungsi tambah yg dipanggil di halaman add_customer
	function tambah($datacus){
		global $db;
		$name = $db->real_escape_string($datacus['name']);
		$address = $db->real_escape_string($datacus['address']);
		$city = $db->real_escape_string($datacus['city']);

		//Assign ke query

		$query = "INSERT INTO customers (name, address, city) VALUES('$name','$address','$city')";
		$result = $db->query($query);
		if (!$result){
			echo '<div class="alert alert-warning" role="alert">
			  Failed added customer!
			</div>';
		}
		else{
			echo '<div class="alert alert-success" role="alert">
			  Succes added customer!
			</div>';
		}
		//close connection
		$db->close();
	}
	// Fungsi hapus yang dipanggil di halaman confirm_delete_customer

	function hapus($idcustomer){
		global $db;
		$query = "DELETE FROM customers WHERE customerid = '$idcustomer'";
		$result = $db->query($query);
		if(!$result){
			return 1;
		}
		else{
			return 0;
		}
		$db->close();
	}
	// Fungsi registrasi yang dipanggil di halaman registrasi.php
	function registration($data){
		global $db;
		$email = $db->real_escape_string($data['email']);
		$password = $db->real_escape_string($data['password']);

		//Enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//do query
		$query = "INSERT INTO admin (email, password) VALUES('$email','$password')";
		$result = $db->query($query);
		//cek result
		if (!$result){
			echo '<div class="alert alert-warning" role="alert">
			  registration failed!
			</div>';
		}
		else{
			echo '<div class="alert alert-success" role="alert">
			  registration success!
			</div>';
		}

		//close connection
		$db->close();

	}	

?>