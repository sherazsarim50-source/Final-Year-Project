<?php
	session_start();
	require_once '../../config/connect.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}

	if(isset($_GET['id']) & !empty($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT thumb1 FROM products WHERE id=$id";
		$res = mysqli_query($connection, $sql);
		$r = mysqli_fetch_assoc($res);
		if(!empty($r['thumb1'])){
			if(unlink($r['thumb1'])){
				$delsql = "UPDATE products SET thumb1='' WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location:../editproduct.php?id={$id}");
				}
			}else{
				$delsql = "UPDATE products SET thumb1='' WHERE id=$id";
				if(mysqli_query($connection, $delsql)){
					header("location:../editproduct.php?id={$id}");
				}
			}

	}else{
		$delsql = "UPDATE products SET thumb1='' WHERE id=$id";
		if(mysqli_query($connection, $delsql)){
			header("location:../editproduct.php?id={$id}");
		}
	}
}else{
	header("location:../editproduct.php?id={$id}");
}