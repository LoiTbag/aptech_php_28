<?php
include 'connetdatabase.php';
	if(isset($_POST['submit']) && $_POST['txtEmail'] != '' && $_POST['txtPassword'] != ''){
		//thuc hien xu ly khi nguoi dung aans nut submit va dien day du thog tin
		$email = $_POST['txtEmail'];
		$password = $_POST['txtPassword'];
		$password = md5($password);

		$sql = "SELECT * FROM user WHERE email = '".$email."' ";

		// hung dl
		$listEmail = $conn->query($sql);
		// ktra email da ton tai
		if($listEmail->num_rows > 0){
			echo "email da ton tai";
			header('location:dangky.php');
		}else{
			$insertUser = "INSERT INTO user (email,password) VALUES ('". $email. "','". $password."')";
			if($conn->query($insertUser) === true){
				echo "them user thanh cong";
				echo "<br/>";
				echo "<a href=".'dang_nhap.php'.">dang nhap</a>";
				//header('location:dang_nhap.php');
			}else{
				echo "them user thaats baij";
			}
		}	
	}
	else{
		header('location:dang_ky.php');
	}

?>