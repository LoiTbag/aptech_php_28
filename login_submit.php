<?php
	include 'connetdatabase.php';
	if(isset($_POST['submit']) && $_POST['txtEmail'] != '' && $_POST['txtPassword'] != ''){
		$email = $_POST['txtEmail'];
		$password = $_POST['txtPassword'];
		$password = md5($password);

		$sql = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."' "; 
		$listEmail = $conn->query($sql);
		if($listEmail->num_rows > 0){
			echo " ban da dang nhap thanh cong";
		}else{
			echo "ban da nhap sai email hoac password";
		}
	}else{
		header("location: dang_nhap.php");
	}
?>