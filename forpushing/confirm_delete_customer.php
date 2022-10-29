<?php
/*
Najib Rifai
24060120140082 / B1
*/

require('method_add.php');

$id = $_GET["id"];

if(hapus($id) == 0){
	echo "
		<script>alert('success to delete customer!');
		document.location.href = 'view_customer.php';
		</script>
	";
}
?>