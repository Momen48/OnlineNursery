<?php
	session_start();
	require_once ('../config/connect.php');
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}

	if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT image FROM products WHERE id=$id";
		$res = mysqli_query($connection, $sql);
		$row = mysqli_fetch_assoc($res);
		if(!empty($row['image'])){
			if(unlink($row['image'])){
				$delsql = "DELETE FROM products WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location:products.php");
				}
			}
		}else{
			$delsql = "DELETE FROM products WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location:products.php");
				}
		}

	}else{
		header('location: products.php');
	}
?>    